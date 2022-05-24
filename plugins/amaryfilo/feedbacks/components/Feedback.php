<?php namespace Amaryfilo\Feedbacks\Components;

use Cms\Classes\ComponentBase;
use Request;
use Mail;
use Winter\Storm\Exception\ValidationException;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

use amaryfilo\Feedbacks\Models\Feedback as FeedbackModel;

use GuzzleHttp\Client;

class Feedback extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Feedback MAIN',
            'description' => 'Put this component into pages or template where you use simple form vith request onForm.'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onForm()
    {
        $messages = [
            'contact.email' => "E-mail address is incorrect.",
            'contact.*' => "Phone number is incorrect. Ex.: +x-xxxxxxxxxx ",
        ];

        $rules = 'required';
        if(post('type') === 'email') $rules = 'required|email';
        elseif (post('type') === 'whatsapp') $rules = 'required|regex:/^[+][0-9]{1,4}[-]{0,1}[0-9]{10,15}$/';
        elseif (post('type') === 'telegram') {
            $ruleLink = '/^(https:\/\/(?:t\.me\/))[a-zA-Z0-9]{1,}$/';
            $ruleTag = '/^[@]{1}[0-9,a-z,A-Z]{1,}$/';
            $rulePhone = '/^[+][0-9]{1,4}[-]{0,1}[0-9]{10,15}$/';

            $match = [
                'link' =>  preg_match($ruleLink, trim(post('contact'))),
                'tag'   =>  preg_match($ruleTag, trim(post('contact'))),
                'phone'  =>  preg_match($rulePhone, trim(post('contact'))),
            ];

            if ($match['link']) $rules = "regex:".$ruleLink;
            elseif ($match['tag']) $rules = "regex:".$ruleTag;
            elseif ($match['phone']) $rules = "regex:".$rulePhone;
            else $rules = "regex:/^(rocknblockerror)$/";
        }

        $validator = Validator::make(Request::all(), ['contact'=> $rules], $messages);

        if($validator->fails()) {
            if (post('type') === 'telegram') throw new ValidationException(['contact' => 'Accepted only: https://t.me/account, @account or phone ex.: +x-xxxxxxxxxx']);
            else throw new ValidationException($validator);
        } 

        $data = [
            'name' => post('name'),
            'contact' => post('contact'),
            'type' => post('type'),
            'idea' => post('idea'),
            'from_url' => Request::url(),
            'created_at' => date("Ymdhis")
        ];
        
        if(post('id') === 'bridge') $data['idea'] = '<b>Blockchain</b>: '.post('blockchain').'.<br /><b>Token Contract</b>: '.post('tokenContract').'.';
        
        FeedbackModel::insert($data);
        
        $this->page['success_form'] = "1";
        
        $data['data'] = post();

        $mailAdmins = explode(',',env('MAIL_REQUEST_TO'));

        foreach ($mailAdmins as $mailAdmin) {
            Mail::sendTo($mailAdmin, 'amaryfilo.feedbacks::mail.feedback', $data);
        }
        
        if(post('type') === 'email') Mail::sendTo(trim(post('contact')), 'amaryfilo.feedbacks::mail.request', ['name' => post('name')]);

        // $this->toPipeDrive($data);
        $this->toAmoCrm($data);

    }
    protected function getAccessToken(array $values = []) {
        $apiId = env('AMOCRM_ID');
        $apiSecretKey = env('AMOCRM_SECRETKEY');
        $apiCompany = env('AMOCRM_COMPANY_DOMAIN');
        $redirectUri = 'https://rocknblock.io/';
        $typeRequest = $values['type'] ?? 'authorization_code';
        $token = $values['token'] ?? env('AMOCRM_TOKEN');
        $typeTokenField = $values['type_field'] ?? 'authorization_code';

        $apiUrl = "https://{$apiCompany}.amocrm.ru/oauth2/access_token";

        $data = [
            'client_id'     => $apiId,
            'client_secret' => $apiSecretKey,
            'grant_type'    => $typeRequest,
            'redirect_uri'  => $redirectUri,
        ];
        
        $data[$typeTokenField] = $token;

        $client = new Client();
        $res = $client->request('POST', $apiUrl, ['json' => $data]);

        $response = json_decode($res->getBody(), true);
        $response['endTokenTime'] = $response['expires_in'] + time();

        $arrParams = [
            "name" => "AmoCrm Custom Integration",
            "type" => "amocrm",
            "user" => "alex",
            "data_fields" => json_encode($response)
        ];

        $integration = DB::table('amaryfilo_integrations')->where('type', 'amocrm')->first();
        
        if($integration) $integration->update(['data_fields' => $arrParams['data_fields']]);
        else DB::table('amaryfilo_integrations')->insert($arrParams);

        return $response['access_token'];
    }

    protected function checkAccessToken() {
        $integration = DB::table('amaryfilo_integrations')->where('type', 'amocrm')->first();

        if($integration) {
            $data = json_decode($integration->data_fields);
            return $data->endTokenTime - 60 < time() ? $this->getAccessToken(['type' => 'refresh_token', 'token' => $data->refresh_token, 'type_field' => 'refresh_token']) : $data->access_token;
        } 
        else return $this->getAccessToken(['type_field' => 'code']);
    }

    protected function toAmoCrm(array $values = []) {
        $accessToken = $this->checkAccessToken();

        if($accessToken) {
            $data = [
                [
                    "name" => "Заявка с сайта",
                    "responsible_user_id" => 8040091,
                    "pipeline_id" => 5258959,
                    "_embedded" => [
                        "metadata" => [
                            "category" => "forms",
                            "form_id" => 1,
                            "form_name" => "Форма на сайте",
                            "form_page" => $values['from_url'],
                            "ip" => Request::ip(),
                            "referer" => url()->previous(),
                            "form_sent_at" => strtotime(date("Y-m-d H:i:s")),
                        ],
                        "contacts" => [
                            [
                                "first_name" => $values["name"],
                                "custom_fields_values" => [
                                    [
                                        // "field_code" => strtoupper($values["type"]),
                                        "field_code" => 'EMAIL',
                                        "values" => [
                                            [
                                                "enum_code" => "WORK",
                                                "value" => $values["contact"]
                                            ]
                                        ]
                                    ],
                                    [
                                        "field_id" => 420563,
                                        "values" => [
                                            [
                                                "value" => $values["idea"]
                                            ]
                                        ]
                                    ],
                                    [
                                        "field_id" => 420615,
                                        "values" => [
                                            [
                                                "value" => $values["type"].': '.$values["contact"]
                                            ]
                                        ]
                                    ],
                                    [
                                        "field_code" => "POSITION",
                                        "values" => [
                                            [
                                                "value" => "Посетитель сайта"
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                    ],
                ]
            ];

            $response = $this->amoCrmRequest(['url' => "api/v4/leads/complex", 'token' => $accessToken, 'data' => $data]);

            // if($response) {
                // $dataChat = [
                    // "conversation_id" => $response[0]['id']."-webrnb",
                //     "user" => [
                //         "id" => $response[0]['id'],
                //         "ref_id" => $response[0]['contact_id'],
                //         "name" => $values['name']
                //     ]
                // ];

                // $scopeData = [
                //     "account_id" => env('AMOCRM_ID'),
                //     "title" => "ChatIntegration",
                //     "hook_api_version" => "v2"
                // ];

                // $amojoId = $this->amoCrmRequest(['url' => "api/v4/account?with=amojo_id", 'token' => $accessToken, 'data' => $scopeData]);
                // dd($amojoId);
                
                // $getScope = $this->amoCrmRequest(['url' => "v2/origin/custom/".$response[0]['id'], 'token' => $accessToken, 'data' => $scopeData]);
                // dd($getScope);
                // $chat = $this->amoCrmRequest(['url' => "v2/origin/custom/".$response[0]['id']."/chats", 'token' => $accessToken, 'data' => $dataChat]);

                // dd($response, $chat);
            // }
        }
    }

    public function amoCrmRequest(array $values = []) {
        $apiCompany = env('AMOCRM_COMPANY_DOMAIN');
        $accessToken = $values['token'];

        $apiUrl = "https://{$apiCompany}.amocrm.ru/{$values['url']}";
        $headers = [
            'Content-Type'  => 'application/json',
            'Accept'        => 'application/json',
            'Authorization' => 'Bearer ' . $accessToken,
        ];

        $client = new Client();
        $res = $client->request('POST', $apiUrl, ['headers' => $headers,'json' => $values['data']]);
        
        return json_decode($res->getBody(), true);
    }

    public function onFormDone()
    {
        $this->page['success_form'] = "0";
    }

    // public function toPipeDrive(array $values = []) {
    //     $person = [];
    //     $person['name'] = $values['name'];
    //     $person['label'] = "7";
    //     $isTypeEmail = $values['type'] === 'email';
    //     $person[$isTypeEmail ? 'email' : 'phone'] = [['value' => $values['contact'],'label' => $isTypeEmail ? "Main" : $values['type']]];
    //     if(!$isTypeEmail) $person[$values['type'] === 'telegram' ? '92524324f9dc5f9b55a48c2b6a4d84aec6d16377' : 'e71670c7f11a9cb29aa333d6d1815cf7a18bb199'] = $values['contact'];

    //     $getPerson = $this->pipeDriveRequest(['url' => "v1/persons", 'data' => $person]);
        
    //     if($getPerson['success']) {
    //         $rqRef = Request::path() === '/' ? 'mainpage' : Request::path();
    //         $lead = [
    //             'title' => 'From website: '.$rqRef,
    //             'label_ids' => ['643dd95d-05b8-4108-82f2-c7996ea5c0d7'],
    //             'person_id' => $getPerson['data']['id'],
    //             'was_seen' => false,
    //             '6b570f722dc5a7fd375c2a247967cef21f7babdd' => "13",
    //             'e7f3337675a2627acd9d0f0aa87786de4ebbf7eb' => $values['from_url']
    //         ];

    //         $getLead = $this->pipeDriveRequest(['url' => "v1/leads", 'data' => $lead]);

    //         if($getLead['success']) {
    //             $note = [
    //                 'lead_id' => $getLead['data']['id'],
    //                 'content' => $values['idea']
    //             ];

    //             $addNote = $this->pipeDriveRequest(['url' => "v1/notes", 'data' => $note]);
    //         }
    //     }
    // }

    // public function pipeDriveRequest(array $values = []) {
    //     $apiKey = env('PIPEDRIVE_APIKEY');
    //     $apiCompany = env('PIPEDRIVE_COMPANY_DOMAIN');

    //     $apiUrl = "https://{$apiCompany}.pipedrive.com/{$values['url']}?api_token={$apiKey}";

    //     $client = new Client();
    //     $res = $client->request('POST', $apiUrl, ['json' => $values['data']]);
        
    //     return json_decode($res->getBody(), true);
    // }
    
}
