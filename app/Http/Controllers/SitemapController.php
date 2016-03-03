<?php
namespace App\Http\Controllers;

use App\Article;

class SitemapController extends Controller
{
    /**
     * @var Article
     */
    private $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    public function xml()
    {
        $articles = $this->article->all();

        $view = view('sitemap.xml', compact('articles'));

        $response = response($view, 200);
        $response->header('Content-Type', 'text/xml');

        return $response;
    }
}
