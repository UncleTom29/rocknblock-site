<?php namespace Amaryfilo\Blog\Components;

use Cms\Classes\ComponentBase;
use Amaryfilo\Blog\Models\Article;
use Amaryfilo\Blog\Models\Category;

class ArticleAll extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Статьи - все',
            'description' => 'Выводит все статьи'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function ViewCategories() {
        return Category::orderBy('id', 'desc')->where('show', true)->get();
    }

    public function ViewArticlesAll() {
        return Article::orderBy('id', 'desc')->where('is_active', true)->get();
    }

    public function onArticles() {
        $id = post('id');
        $atricles = $id ? Category::orderBy('id', 'desc')->where('show', true)->where('id', $id)->first()->articles_in()->get() : Article::orderBy('id', 'desc')->where('is_active', true)->get();

        if (!$atricles) {
            $this->controller->setStatusCode(404);
            return $this->controller->run('404');
        } $this->page['articles'] = $atricles;

        return ['#articles' => $this->renderPartial('@articles')];
    }

    // public function onChangeCategory()
    // {
    //     $cat_id = post('cat_id');

    //     $this->page['articles'] = Article::whereHas('article_category', function($filter) use ($cat_id) {
    //         $filter->where('category_id', '=', $cat_id);
    //     })->where('is_active', '=', 1)->get();

    //     return [
    //             '#articles' => $this->renderPartial('articles'),
    //         ];
    // }
}
