<?php

return [
    'auth' => [
        'title' => 'Панель керування',
        'invalid_login' => 'Ви ввели некоректні дані. Будь ласка, перевірте їх та спробуйте ще раз.',
    ],
    'field' => [
        'invalid_type' => 'Застосовано невірний тип поля: :type.',
        'options_method_invalid_model' => "Атрибут ':field' не відповідає допустимій моделі. Спробуйте явно вказати метод параметрів для класу :model .",
        'options_method_not_exists' => "Клас моделі :model повинен містити метод :method(), що повертає опції для поля ':field'.",
        'options_static_method_invalid_value' => "Статический метод ':method()' в :class не вернул допустимый массив параметров.",
        'colors_method_not_exists' => "Класс модели :model должен содержать метод :method(), возвращающий HTML цвет в HEX для поля формы ':field'.",
    ],
    'widget' => [
        'not_registered' => "Клас віджету ':name' не зареєстровано",
        'not_bound' => "Віджет з назвою класу ':name' не прив'зано до контролера",
    ],
    'page' => [
        'untitled' => 'Без назви',
        '404' => [
            'label' => 'Сторінка не знайдена',
            'help' => 'Ми ретельно шукали, але запрошенный URL так і не змогли знайти. Можливо ви шукали щось інше?',
            'back_link' => 'Повернутися до попередньої сторінки',
        ],
        'access_denied' => [
            'label' => 'Доступ заборонено',
            'help' => 'У вас немає необхідних прав для перегляду цієї сторінки.',
            'cms_link' => 'Повернутися до бекенду',
        ],
        'no_database' => [
            'label' => 'Відсутня база данних',
            'help' => 'Для доступу до бекенду потрібна база данних. Перевірте, налаштування та міграції бази данних, перш ніж спробувати знову.',
            'cms_link' => 'Повернутися на домашню сторінку',
        ],
    ],
    'partial' => [
        'not_found_name' => "Фрагмент ':name' не знайдено.",
        'invalid_name' => 'Неправильне назва фрагменту: :name.',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Невірна назва AJAX обробника: :name.',
        'not_found' => "AJAX обробника ':name' не знайден.",
    ],
    'account' => [
        'impersonate' => 'Імперсонація користувача',
        'impersonate_confirm' => 'Ви впевнені, що хочете імперсонувати себе як цього користувача? Ви зможете повернутися у вихідний стан вийшовши з системи.',
        'impersonate_success' => 'Тепер ви імперсоновані як цей користувач',
        'impersonate_working' => 'Імперсонація...',
        'impersonating' => 'Ви тимчасово увійшли до системи як :impersonatee. Журнали логів, як і раніше, можуть ідентифікувати вас як :impersonator',
        'stop_impersonating' => 'Зупинити імперсонацію',
        'unsuspend' => 'Припинено',
        'unsuspend_confirm' => 'Ви впевнені, що хочете призупинити цього користувача?',
        'unsuspend_success' => 'Користувач був припинений.',
        'unsuspend_working' => 'Призупинення...',
        'signed_in_as' => 'Виконано вхід як :full_name',
        'sign_out' => 'Вийти',
        'login' => 'Увійти',
        'reset' => 'Скинути',
        'restore' => 'Відновити',
        'login_placeholder' => 'логін',
        'password_placeholder' => 'пароль',
        'remember_me' => 'Залишитись в системі',
        'forgot_password' => 'Забули свій пароль?',
        'enter_email' => 'Введіть свою електронну адресу',
        'enter_login' => 'Введіть своє ім\'я користувача',
        'email_placeholder' => 'електронна адреса',
        'enter_new_password' => 'Введіть новий пароль',
        'password_reset' => 'Скинути пароль',
        'restore_success' => 'На Вашу електронну адресу було надіслано інструкції з відновлення паролю.',
        'reset_success' => 'Ваш пароль було успішно змінено. Тепер Ви можете ввійти.',
        'reset_error' => 'Надано неправильні дані з відновлення паролю. Будь ласка, спробуйте знову!',
        'reset_fail' => 'Не вдалося змінити Ваш пароль!',
        'apply' => 'Застосувати',
        'cancel' => 'Скасувати',
        'delete' => 'Видалити',
        'ok' => 'ОК',
    ],
    'dashboard' => [
        'menu_label' => 'Панель керування',
        'widget_label' => 'Віджет',
        'widget_width' => 'Ширина',
        'full_width' => 'повна ширина',
        'manage_widgets' => 'Керування віджетами',
        'add_widget' => 'Додати віджет',
        'widget_inspector_title' => 'Налаштування віджету',
        'widget_inspector_description' => 'Налаштування віджету',
        'widget_columns_label' => 'Ширина :columns',
        'widget_columns_description' => 'Ширина віджету, число між 1 та 10.',
        'widget_columns_error' => 'Будь ласка, уведіть ширину віджету як число між 1 та 10.',
        'columns' => '{1} колонка|[2,4] колонки|[5,Inf] колонок',
        'widget_new_row_label' => 'Перенести на новий рядок',
        'widget_new_row_description' => 'Помістити віджет у новий рядок.',
        'widget_title_label' => 'Назва віджету',
        'widget_title_error' => 'Назва віджету є обов\'язковою.',
        'reset_layout' => 'Скидання макета',
        'reset_layout_confirm' => 'Ви дійсно хочете встановити за замовчуванням?',
        'reset_layout_success' => 'Макет був скинутий',
        'make_default' => 'Використовувати за замовчуванням',
        'make_default_confirm' => 'Встановіть поточну схему розташування за замовчуванням?',
        'make_default_success' => 'Поточне розташування тепер за замовчуванням',
        'collapse_all' => 'Згорнути',
        'expand_all' => 'Розгорнути',
        'status' => [
            'widget_title_default' => 'Статус системи',
            'update_available' => 'Доступно {0} оновлень!|Доступно {1} оновлення!|Доступно [2,4] оновленя|Доступно [5,Inf] оновлень!',
            'updates_pending' => 'В очікуванні оновлення програмного забезпечення',
            'updates_nil' => 'Програмне забезпечення в актуальному стані',
            'updates_link' => 'Оновити',
            'warnings_pending' => 'Деякі питання потребують уваги',
            'warnings_nil' => 'Немає попереджень для відображення',
            'warnings_link' => 'Переглянути',
            'core_build' => 'Версія системи',
            'event_log' => 'Журнал подій',
            'request_log' => 'Журнал запитів',
            'app_birthday' => 'Сайт засновано',
        ],
        'welcome' => [
            'widget_title_default' => 'Ласкаво просимо',
            'welcome_back_name' => 'Ласкаво просимо до :app, :name.',
            'welcome_to_name' => 'Ласкаво просимо до :app, :name.',
            'first_sign_in' => 'Це ваша перша авторизація.',
            'last_sign_in' => 'Дата останньої авторизації',
            'view_access_logs' => 'Перегляд журналу доступу',
            'nice_message' => 'Гарного дня!',
        ],
    ],
    'user' => [
        'name' => 'Адміністратор',
        'menu_label' => 'Адміністратори',
        'menu_description' => 'Керування адміністративними користувачами, групами та дозволами back-end-у.',
        'list_title' => 'Керування адміністраторами',
        'new' => 'Новий адміністратор',
        'login' => 'Логін',
        'first_name' => 'Ім\'я',
        'last_name' => 'Прізвище',
        'full_name' => 'Повне ім\'я',
        'email' => 'Електронна пошта',
        'role_field' => 'Роль',
        'role_comment' => 'Ролі визначають рівні доступу користувачів, які можна визначити у вкладці "Права".',
        'groups' => 'Групи',
        'groups_comment' => 'Вкажіть до яких груп повинен належати цей обліковий запис.',
        'avatar' => 'Аватар',
        'password' => 'Пароль',
        'password_confirmation' => 'Підтвердження паролю',
        'permissions' => 'Дозволи',
        'account' => 'Обліковий запис',
        'superuser' => 'Супер-адміністратор',
        'superuser_comment' => 'Надає цьому обліковому запису необмежений доступ.',
        'send_invite' => 'Надіслати запрошення за електронною адресою',
        'send_invite_comment' => 'Надсилає вітальне повідомлення, що містить інформацію про ім\'я користувача та пароль.',
        'delete_confirm' => 'Ви дійсно хочете видалити цього адміністратора?',
        'return' => 'Повернутися до списку адміністраторів',
        'allow' => 'Дозволити',
        'inherit' => 'Успадкувати',
        'deny' => 'Заборонити',
        'activated' => 'Активований',
        'last_login' => 'Останній вхід',
        'created_at' => 'Створено',
        'updated_at' => 'Оновлено',
        'deleted_at' => 'Вилучен',
        'show_deleted' => 'Показати вилучених',
        'group' => [
            'name' => 'Група',
            'name_comment' => 'Назва відображається на сторінці стоврення/редагування адміністратора.',
            'name_field' => 'Назва',
            'description_field' => 'Опис',
            'is_new_user_default_field_label' => 'Група за замовчуванням',
            'is_new_user_default_field_comment' => 'Додавання нових адміністраторів в цю групу за замовчуванням',
            'code_field' => 'Код',
            'code_comment' => 'Введіть унікальний код якщо Ви хочете отримувати до неї доступ через API.',
            'menu_label' => 'Групи',
            'list_title' => 'Керування групами',
            'new' => 'Нова група',
            'delete_confirm' => 'Видалити цю групу адміністраторів?',
            'return' => 'Повернутись до списку груп',
            'users_count' => 'Користувачі',
        ],
        'role' => [
            'name' => 'Роль',
            'name_field' => 'Назва',
            'name_comment' => 'Назва відображається у списку ролей у формі "Адміністратор".',
            'description_field' => 'Опис',
            'code_field' => 'Код',
            'code_comment' => 'Введіть унікальний код, якщо ви хочете отримати доступ до об\'єкту ролі за допомогою API.',
            'menu_label' => 'Керування ролями',
            'list_title' => 'Керування ролями',
            'new' => 'Нова роль',
            'delete_confirm' => 'Видалити цю роль адміністратора?',
            'return' => 'Повернутися до списку ролей',
            'users_count' => 'Користувачі',
        ],
        'preferences' => [
            'not_authenticated' => 'Немає автентифікованих користувачів, чиї налаштування можна завантажити або зберегти.',
        ],
        'trashed_hint_title' => 'Цей аккаунт був вилучен',
        'trashed_hint_desc' => 'Цей аккаунт був вилучен та не може бути авторизован. Щоб відновити його, натисніть іконку відновлення користувача в правому нижньому куті.',
    ],
    'list' => [
        'default_title' => 'Список',
        'search_prompt' => 'Пошук…',
        'no_records' => 'У цьому вигляді немає записів.',
        'missing_model' => 'Поведінка списку, що використовується в :class не містить визначення моделі.',
        'missing_column' => 'Немає визначень колонок для :columns.',
        'missing_columns' => 'Список використаний в :class не містить визначених колонок.',
        'missing_definition' => "Поведінка списку не містить колонки для ':field'.",
        'missing_parent_definition' => "Список поведінки не містить визначення ':definition'.",
        'behavior_not_ready' => 'Поведінку списку не було ініціалізовано, перевірте чи Ви викликали makeLists() у своєму контролері.',
        'invalid_column_datetime' => "Значення колонки ':column' не є DateTime-об'єктом, Ви не пропускаєте посилання на \$dates посилання в моделі?",
        'pagination' => 'Показано записів: :from-:to з :total',
        'first_page' => 'Перша сторінка',
        'last_page' => 'Остання',
        'prev_page' => 'Попередня сторінка',
        'next_page' => 'Наступна сторінка',
        'refresh' => 'Оновити',
        'updating' => 'Оновлення…',
        'loading' => 'Завантаження…',
        'setup_title' => 'Створення списку',
        'setup_help' => 'Використовуйте позначки для вибору колонок, які Ви хочете бачити в списку. Ви моєете змінювати позиції колонок перетягуючи їх вниз-вгору.',
        'records_per_page' => 'Записів на сторінку',
        'records_per_page_help' => 'Оберіть число записів на сторінку для показу. Будь ласка, зауважте, що велике число записів на одну сторінку може зменшити швидкодію.',
        'check' => 'Перевірити',
        'delete_selected' => 'Видалити обрані',
        'delete_selected_empty' => 'Немає обраних записів до видалення.',
        'delete_selected_confirm' => 'Видалити обрані записи?',
        'delete_selected_success' => 'Обрані записи успішно видалено',
        'column_switch_true' => 'Так',
        'column_switch_false' => 'Ні',
    ],
    'fileupload' => [
        'attachment' => 'Прикріплення',
        'help' => 'Додайте назву та опис для цього прикріплення.',
        'title_label' => 'Назва',
        'description_label' => 'Опис',
        'default_prompt' => 'Натисніть %s або перетягніть файл сюди для завантаження',
        'attachment_url' => 'URL прикріплення',
        'upload_file' => 'Завантажити файл',
        'upload_error' => 'Помилка завантаження',
        'remove_confirm' => 'Ви впевнені?',
        'remove_file' => 'Видалити файл',
    ],
    'repeater' => [
        'add_new_item' => 'Додати новий об\'єкт',
        'min_items_failed' => ':name потребує мінімум :min об\'єктів, було передано тільки :items',
        'max_items_failed' => ':name дозволяє передати максимум :max об\'єктів, було передано :items',
    ],
    'form' => [
        'create_title' => 'Нова :name',
        'update_title' => 'Редагувати :name',
        'preview_title' => 'Попередній перегляд :name',
        'create_success' => ':name створено',
        'update_success' => ':name оновлено',
        'delete_success' => ':name видалено',
        'restore_success' => ':name відновленно',
        'reset_success' => 'Успішно скасовано',
        'missing_id' => 'Ідентифікатор запису форми не було вказано.',
        'missing_model' => 'Поведінка форми, що використовується в :class не містить визначення моделі.',
        'missing_definition' => "Поведніка форми не містить поля для ':field'.",
        'not_found' => 'Запис форми з ідентифікатором :id не знайдено.',
        'action_confirm' => 'Ви впевнені?',
        'create' => 'Створити',
        'create_and_close' => 'Створити та закрити',
        'creating' => 'Створення…',
        'creating_name' => 'Створення :name…',
        'save' => 'Зберегти',
        'save_and_close' => 'Зберегти та закрити',
        'saving' => 'Збереження…',
        'saving_name' => 'Збереження :name…',
        'delete' => 'Видалити',
        'deleting' => 'Видалення…',
        'confirm_delete' => 'Ви дійсно хочете видалити цей запис?',
        'confirm_delete_multiple' => 'Ви дійсно хочете видалити обрані записи?',
        'deleting_name' => 'Видалення :name…',
        'restore' => 'Відновити',
        'restoring' => 'Відновлення...',
        'confirm_restore' => 'Ви впевненні, що хочете відновити цей запис?',
        'reset_default' => 'Скинути за замовчуванням',
        'resetting' => 'Скидання',
        'resetting_name' => 'Скидання :name',
        'undefined_tab' => 'Різне',
        'field_off' => 'Викл',
        'field_on' => 'Вкл',
        'add' => 'Додати',
        'apply' => 'Застосувати',
        'cancel' => 'Скасувати',
        'close' => 'Закрити',
        'confirm' => 'Підтвердити',
        'reload' => 'Перезавантажити',
        'complete' => 'Готово',
        'ok' => 'ОК',
        'or' => 'або',
        'confirm_tab_close' => 'Ви дійсно хочете закрити цю вкладку? Незбережені зміни буде втрачено.',
        'behavior_not_ready' => 'Поведінку форми не було ініціалізовано, перевірте чи Ви викликали initForm() у своєму контролері.',
        'preview_no_files_message' => 'Немає завантажених файлів.',
        'preview_no_media_message' => 'Немає обраного файла.',
        'preview_no_record_message' => 'Немає обраних записів.',
        'select' => 'Обрати',
        'select_all' => 'вибрати все',
        'select_none' => 'вибрати жоден',
        'select_placeholder' => 'будь ласка, оберіть',
        'insert_row' => 'Вставити рядок',
        'insert_row_below' => 'Вставити рядок нижче',
        'delete_row' => 'Видалити рядок',
        'concurrency_file_changed_title' => 'Файл було змінено',
        'concurrency_file_changed_description' => 'Файл, що Ви редагуєте, було змінено на диску іншим користувачем. Ви можете або перезавантажити файл та втратити свої зміни, або перезаписати файл на диску.',
        'return_to_list' => 'Повернутися до списку',
    ],
    'recordfinder' => [
        'find_record' => 'Знайти запис',
        'invalid_model_class' => 'Наданий клас моделі ":modelClass" для пошуку запису є недійсним',
        'cancel' => 'Скасувати',
    ],
    'pagelist' => [
        'page_link' => 'Посилання на сторінку',
        'select_page' => 'Обрати сторінку...',
    ],
    'relation' => [
        'missing_config' => "Поведінка відношення не містить жодного налаштування для ':config'.",
        'missing_definition' => "Поведінка відношення не містить визначення для ':field'.",
        'missing_model' => 'Поведінка відношення, що використовується в :class не містить визначення моделі.',
        'invalid_action_single' => 'Ця дія не може бути здійсненою щодо одного відношення.',
        'invalid_action_multi' => 'Ця дія не може бути здійснена щодо кількох відношень.',
        'relationwidget_unsupported_type' => '":type" тип зв\'язку не підтримується віджетом Relation.',
        'help' => 'Натисніть по елементу щоб додати',
        'related_data' => 'Відносяться дані :name',
        'add' => 'Додати',
        'add_selected' => 'Додати обрані',
        'add_a_new' => 'Додати нове :name',
        'link_selected' => 'Обрано зв\'язок',
        'link_a_new' => 'Зв\'язати нове :name',
        'cancel' => 'Скасувати',
        'close' => 'Закрити',
        'add_name' => 'Додати :name',
        'create' => 'Створити',
        'create_name' => 'Створити :name',
        'update' => 'Оновити',
        'update_name' => 'Оновити :name',
        'preview' => 'Попередній перегляд',
        'preview_name' => 'Попередній перегляд :name',
        'remove' => 'Видалити',
        'remove_name' => 'Видалити :name',
        'delete' => 'Видалити',
        'delete_name' => 'Видалити :name',
        'delete_confirm' => 'Ви впевнені?',
        'link' => 'Зв\'язати',
        'link_name' => 'Зв\'язати :name',
        'unlink' => 'Відв\'язати',
        'unlink_name' => 'Відв\'язати :name',
        'unlink_confirm' => 'Ви впевнені?',
    ],
    'reorder' => [
        'default_title' => 'Перевпорядкувати записи',
        'no_records' => 'Немає доступних до сортування записів.',
    ],
    'model' => [
        'name' => 'Модель',
        'not_found' => "Модель ':class' з ідентифікатором :id не знайдено",
        'missing_id' => 'Не вказано ідентифікатор для пошуку запису моделі.',
        'missing_relation' => "Модель ':class' не містить визначення для ':relation'.",
        'missing_method' => "Модель ':class' не містить метод ':method'.",
        'invalid_class' => "Модель :model використана в :class не є правильною, вона повинна успадковувати клас \Model .",
        'mass_assignment_failed' => "Масове призначення не вдалось для атрибуту ':attribute' моделі.",
    ],
    'warnings' => [
        'tips' => 'Підказки з налаштування системи',
        'tips_description' => 'Є речі, на які потрібно звернути увагу щоб правильно налаштувати систему.',
        'permissions' => 'Директорія :name та її субдиректорії не мають дозволу для запису для PHP. Будь ласка, встановіть відповідні дозволи для веб-серверу для цієї директорії.',
        'extension' => 'Розширення PHP :name не встановлено. Будь ласка, встановіть цю бібліотеку та активуйте розширення.',
        'plugin_missing' => 'Плагін :name має залежності, які не встановлено. Будь ласка, встановіть ці плагіни.',
        'debug' => 'Режим налагодження увімкнено. Це не рекомендується для робочих інсталяцій.',
        'decompileBackendAssets' => 'Ассети в бекенді нині декомпільовані. Це не рекомендується для робочих інсталяцій.',
        'default_backend_user' => 'Був виявлен користувач з даними для входу за замовчуванням (admin / admin@domain.tld). Змініть своє ім\'я користувача та/або email-адресу, щоб захистити систему.',
    ],
    'editor' => [
        'menu_label' => 'Налаштування редактору коду',
        'menu_description' => 'Персоналізуйте свої налаштування редактору коду, такі як розмір шрифту та колір.',
        'preview' => 'Передпрогляд',
        'font_size' => 'Розмір шрифту',
        'tab_size' => 'Розмір табуляції',
        'use_hard_tabs' => 'Відступ табуляціями',
        'code_folding' => 'Згортання коду',
        'code_folding_begin' => 'Відмітка на початку блоку',
        'code_folding_begin_end' => 'Відмітка на початку та кінці блоку',
        'autocompletion' => 'Заповнити форму',
        'word_wrap' => 'Перенос слів',
        'highlight_active_line' => 'Підсвічувати активні рядки',
        'auto_closing' => 'Автоматично закривати теги та спецсимволи',
        'show_invisibles' => 'Показувати невидимі символи',
        'show_gutter' => 'Показувати нумерацію рядків',
        'basic_autocompletion' => 'Автозаповнення (Ctrl + Space)',
        'live_autocompletion' => 'Живе автозаповнення',
        'enable_snippets' => 'Увімкнути фрагменти коду (Tab)',
        'display_indent_guides' => 'Показати відступ напрямних',
        'show_print_margin' => 'Показати запас друку',
        'mode_off' => 'Вимкнено',
        'mode_fluid' => 'Адаптивно',
        '40_characters' => '40 символів',
        '80_characters' => '80 символів',
        'theme' => 'Кольорова схема',
        'markup_styles' => 'Стилі розмітки',
        'custom_styles' => 'Спеціальна таблиця стилів',
        'custom styles_comment' => 'Спеціальні стилі для включення в редактор HTML.',
        'markup_classes' => 'Класи розмітки',
        'paragraph' => 'Абзац',
        'link' => 'Посилання',
        'table' => 'Таблиця',
        'table_cell' => 'Клітинки таблиці',
        'image' => 'Зображення',
        'label' => 'Назва поля',
        'class_name' => 'Назва класу',
        'markup_tags' => 'Теги розмітки',
        'markup_tag' => 'Тег розмітки',
        'allowed_empty_tags' => 'Дозволені порожні теги',
        'allowed_empty_tags_comment' => 'Контактні дані, які не видаляються, коли вони не мають ніякого змісту всередині.',
        'allowed_tags' => 'Дозволені теги',
        'allowed_tags_comment' => 'Список дозволених тегів.',
        'allowed_attributes' => 'Разрешенные атрибуты',
        'allowed_attributes_comment' => 'Список дозволених атрибутів.',
        'no_wrap' => 'Не обертати теги',
        'no_wrap_comment' => 'Список тегів, які не повинні бути обгорнуті в блокові елементи.',
        'remove_tags' => 'Видаляємі теги',
        'remove_tags_comment' => 'Теги які видаляються разом з їх вмістом.',
        'line_breaker_tags' => 'Теги з перенесенням рядку',
        'line_breaker_tags_comment' => 'Список тегів, в яких буде використовуватися тег перенесення рядку',
        'toolbar_options' => 'Опции панели инструментов',
        'toolbar_buttons' => 'Кнопки панелі інструментів',
        'toolbar_buttons_comment' => 'Кнопки панелі інструментів, які за замовчуванням відображаються в Rich Editor.',
        'toolbar_buttons_preset' => 'Вставити предустановленний набір кнопок панелі інструментів:',
        'toolbar_buttons_presets' => [
            'default' => 'За замовчуванням',
            'minimal' => 'Мінімальний',
            'full' => 'Повний',
        ],
        'paragraph_formats' => 'Формати абзаців',
        'paragraph_formats_comment' => 'Опції що з\'являються у списку Формати абзаців.',
    ],
    'tooltips' => [
        'preview_website' => 'Перегляд сайту',
    ],
    'mysettings' => [
        'menu_label' => 'Мої налаштування',
        'menu_description' => 'Управління налаштуваннями облікового запису адміністратора',
    ],
    'myaccount' => [
        'menu_label' => 'Мій обліковий запис',
        'menu_description' => 'Управління особистою інформацією (ім\'я, пошта та пароль).',
        'menu_keywords' => 'безпека логін',
    ],
    'branding' => [
        'menu_label' => 'Персоналізація панелі керування',
        'menu_description' => 'Налаштування зовньошнього виду панелі керування (назва, кольори, логотип).',
        'brand' => 'Бренд',
        'logo' => 'Логотип',
        'logo_description' => 'Завантажте логотип для панелі керування.',
        'favicon' => 'Фавікон',
        'favicon_description' => 'Завантажте власний фавікон для бекенду',
        'app_name' => 'Назва додатку',
        'app_name_description' => 'Ця назва показується в заголовку панелі керування.',
        'app_tagline' => 'Девіз додатку',
        'app_tagline_description' => 'Ця назва показується на екрані входу до панелі керування.',
        'colors' => 'Кольори',
        'branding_colors' => 'Брендові кольори',
        'branding_colors_comment' => 'Ці кольори будуть використовуватись у всьому інтерфейсі Backend UI, щоб відповідати вашому бренду.',
        'default_colors' => 'Кольори за замовчуванням',
        'default_colors_comment' => 'Ці кольори будуть доступні як зразки у всіх палітрах кольорів, якщо вони не будуть перевизначені.',
        'add_default_color' => 'Додати колір за замовчуванням',
        'primary_color' => 'Основний колір',
        'secondary_color' => 'Вторинний колір',
        'accent_color' => 'Акцентний колір',
        'styles' => 'Стилі',
        'custom_stylesheet' => 'Власна таблиця стилів',
        'navigation' => 'Навігація',
        'menu_mode' => 'Cтиль меню',
        'menu_mode_inline' => 'В лінію',
        'menu_mode_inline_no_icons' => 'Рядковий (без іконок)',
        'menu_mode_tile' => 'Плитка',
        'menu_mode_collapsed' => 'Схлопнутий',
    ],
    'backend_preferences' => [
        'menu_label' => 'Налаштування back-end-у',
        'menu_description' => 'Керуйте своїми налаштуваннями облікового запису, як то бажана мова.',
        'region' => 'Область',
        'code_editor' => 'Редактор коду',
        'timezone' => 'Часовий пояс',
        'timezone_comment' => 'Виводити дати в обраному часовому поясі.',
        'locale' => 'Мова',
        'locale_comment' => 'Оберіть бажану мову для використання.',
    ],
    'access_log' => [
        'hint' => 'Цей журнал показує список успішних спроб входу адміністраторів. Записи зберігаються :days днів.',
        'menu_label' => 'Журнал доступу',
        'menu_description' => 'Переглянути список успішних входів користувачів back-end-у.',
        'id' => 'ID',
        'created_at' => 'Дата та час',
        'type' => 'Тип',
        'login' => 'Ім\'я користувача',
        'ip_address' => 'IP-адреса',
        'first_name' => 'Ім\'я',
        'last_name' => 'Прізвище',
        'email' => 'Електронна адреса',
    ],
    'filter' => [
        'all' => 'всі',
        'options_method_not_exists' => "Модель класу :model повинна містити метод :method() який повертає значення для поля ':filter'.",
        'date_all' => 'весь період',
        'number_all' => 'всі числа',
    ],
    'import_export' => [
        'upload_csv_file' => '1. Завантажити CSV-файл',
        'import_file' => 'Імпортувати файл',
        'row' => 'Рядок :row',
        'first_row_contains_titles' => 'Перший рядок містить назви колонок',
        'first_row_contains_titles_desc' => 'Залиште це відміченим якщо перший рядок CSV використовується для назв колонок.',
        'match_columns' => '2. Віднести колонки файлу до полів бази даних',
        'file_columns' => 'Колонки файлу',
        'database_fields' => 'Поля бази даних',
        'set_import_options' => '3. Встановити опції імпорту',
        'export_output_format' => '1. Експортувати формат виводу',
        'file_format' => 'Формат файлу',
        'standard_format' => 'Стандартний формат',
        'custom_format' => 'Власний формат',
        'delimiter_char' => 'Розділювач',
        'enclosure_char' => 'Огортувач',
        'escape_char' => 'Символ екранування',
        'select_columns' => '2. Оберіть колонки до експорту',
        'column' => 'Колонка',
        'columns' => 'Колонки',
        'set_export_options' => '3. Встановіть опції експорту',
        'show_ignored_columns' => 'Показати ігноровані колонки',
        'auto_match_columns' => 'Автовіднесення колонок',
        'created' => 'Створено',
        'updated' => 'Оновлено',
        'skipped' => 'Пропущено',
        'warnings' => 'Попереджень',
        'errors' => 'Помилок',
        'skipped_rows' => 'Пропущені рядки',
        'import_progress' => 'Прогрес імпорту',
        'processing' => 'Обробка',
        'import_error' => 'Помилка імпорту',
        'upload_valid_csv' => 'Будь ласка, завантажте правильний CSV-файл.',
        'drop_column_here' => 'Перетягніть колонку сюди…',
        'ignore_this_column' => 'Ігнорувати цю колонку',
        'processing_successful_line1' => 'Процес експорту файлу було успішно завершено!',
        'processing_successful_line2' => 'Тепер браузер має автоматично перенаправити до завантаження файлу.',
        'export_progress' => 'Прогрес експорту',
        'export_error' => 'Помилка експорту',
        'column_preview' => 'Попередній перегляд колонки',
        'file_not_found_error' => 'Файл не знайдено',
        'empty_error' => 'Не вказано даних для експорту',
        'empty_import_columns_error' => 'Please specify some columns to import.',
        'match_some_column_error' => 'Please match some columns first.',
        'required_match_column_error' => 'Please specify a match for the required field :label.',
        'empty_export_columns_error' => 'Будь ласка, вкажіть деякі стовпці для експорту.',
        'behavior_missing_uselist_error' => 'Необхідно реалізувати поведінку контролера ListController з експортом "useList".',
        'missing_model_class_error' => 'Будь ласка, вкажіть властивість modelClass для типу :type',
        'missing_column_id_error' => 'Відсутній ідентифікатор стовпця',
        'unknown_column_error' => 'Невідомий стовпець',
        'encoding_not_supported_error' => 'Кодування вихідного файлу не розпізнається. Будь ласка, оберіть відповідний формать кодування для імпорту файлу.',
        'encoding_format' => 'Кодування файлу',
        'encodings' => [
            'utf_8' => 'UTF-8',
            'us_ascii' => 'US-ASCII',
            'iso_8859_1' => 'ISO-8859-1 (Latin-1, Western European)',
            'iso_8859_2' => 'ISO-8859-2 (Latin-2, Central European)',
            'iso_8859_3' => 'ISO-8859-3 (Latin-3, South European)',
            'iso_8859_4' => 'ISO-8859-4 (Latin-4, North European)',
            'iso_8859_5' => 'ISO-8859-5 (Latin, Cyrillic)',
            'iso_8859_6' => 'ISO-8859-6 (Latin, Arabic)',
            'iso_8859_7' => 'ISO-8859-7 (Latin, Greek)',
            'iso_8859_8' => 'ISO-8859-8 (Latin, Hebrew)',
            'iso_8859_9' => 'ISO-8859-9 (Latin-5, Turkish)',
            'iso_8859_10' => 'ISO-8859-10 (Latin-6, Nordic)',
            'iso_8859_11' => 'ISO-8859-11 (Latin, Thai)',
            'iso_8859_13' => 'ISO-8859-13 (Latin-7, Baltic Rim)',
            'iso_8859_14' => 'ISO-8859-14 (Latin-8, Celtic)',
            'iso_8859_15' => 'ISO-8859-15 (Latin-9, Western European revision with euro sign)',
            'windows_1250' => 'Windows-1250 (CP1250, Central and Eastern European)',
            'windows_1251' => 'Windows-1251 (CP1251)',
            'windows_1252' => 'Windows-1252 (CP1252)',
        ],
    ],
    'permissions' => [
        'manage_media' => 'Завантаження та керування медіаконтентом - зображеннями, відео, звуками, документами',
        'allow_unsafe_markdown' => 'Використовувати небезпечний Markdown (може включати Javascript)',
    ],
    'mediafinder' => [
        'label' => 'Пошук медіа',
        'default_prompt' => 'Натисніть на кнопку %s, щоб знайти медіафайл',
        'no_image' => 'Не вдалося знайти зображення',
    ],
    'media' => [
        'menu_label' => 'Медіафайли',
        'upload' => 'Завантажити',
        'move' => 'Перемістити',
        'delete' => 'Видалити',
        'add_folder' => 'Створити папку',
        'search' => 'Пошук',
        'display' => 'Показати',
        'filter_everything' => 'Всі файли',
        'filter_images' => 'Зображення',
        'filter_video' => 'Відео',
        'filter_audio' => 'Музика',
        'filter_documents' => 'Документи',
        'library' => 'Бібліотека',
        'size' => 'Розмір',
        'title' => 'Ім\'я',
        'last_modified' => 'Остання зміна',
        'public_url' => 'Публічна адреса',
        'click_here' => 'Натисніть тут',
        'thumbnail_error' => 'Помилка створення мініатюри.',
        'return_to_parent' => 'Повернутися до батьківської папки',
        'return_to_parent_label' => 'Піднятися на рівень вище...',
        'nothing_selected' => 'Нічого не обрано.',
        'multiple_selected' => 'Обрано кілька об\'єктів.',
        'uploading_file_num' => 'Завантаження файлів: :number',
        'uploading_complete' => 'Завантаження файлів завершено!',
        'uploading_error' => 'Помилка завантаження',
        'type_blocked' => 'Тип файлу, який використовується заблокований з міркувань безпеки.',
        'order_by' => 'Сортувати за',
        'direction' => 'Напрямок сортування',
        'direction_asc' => 'За зростанням',
        'direction_desc' => 'За зменшенням',
        'folder' => 'Папка',
        'no_files_found' => 'Жоден з файлів не задовольняє вашому запиту.',
        'delete_empty' => 'Будь ласка, оберіть об\'єкти для видалення.',
        'delete_confirm' => 'Ви дійсно хочете видалити вибрані об\'єкти?',
        'error_renaming_file' => 'Помилка зміни імені файлу.',
        'new_folder_title' => 'Нова папка',
        'folder_name' => 'Назва папки',
        'error_creating_folder' => 'Помилка створення папки',
        'folder_or_file_exist' => 'Папка або файл з таким ім\'ям вже існує.',
        'move_empty' => 'Будь ласка, оберіть об\'єкти для переміщення.',
        'move_popup_title' => 'Переміщення файлів або папок',
        'move_destination' => 'Папка призначення',
        'please_select_move_dest' => 'Будь ласка, оберіть папку призначення для переміщення.',
        'move_dest_src_match' => 'Будь ласка, оберіть іншу папку.',
        'empty_library' => 'Бібліотека медіафайлів порожня. Для початку завантажте файли або створіть папки.',
        'insert' => 'Вставити',
        'crop_and_insert' => 'Обрізати і вставити',
        'select_single_image' => 'Будь ласка, оберіть одне зображення.',
        'selection_not_image' => 'Обраний елемент не є зображенням.',
        'restore' => 'Скасувати всі зміни',
        'resize' => 'Зміна розміру...',
        'selection_mode_normal' => 'Нормальний',
        'selection_mode_fixed_ratio' => 'Фіксоване співвідношення',
        'selection_mode_fixed_size' => 'Фіксований розмір',
        'height' => 'Висота',
        'width' => 'Ширина',
        'selection_mode' => 'Режим виділення',
        'resize_image' => 'Зміна розміру зображення',
        'image_size' => 'Розмір зображення:',
        'selected_size' => 'Обрано:',
        'rename_popup_title' => 'Перейменувати',
        'rename_new_name' => 'Нове ім\'я',
        'move_please_select' => 'будь ласка, оберіть директорію',
        'move_button' => 'Перемістити',
    ],
];
