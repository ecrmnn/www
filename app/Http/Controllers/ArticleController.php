<?php
namespace App\Http\Controllers;

use App\Article;
use Exception;

class ArticleController extends Controller
{
    /**
     * @var Article
     */
    private $article;

    /**
     * ArticleController constructor.
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $articles = $this->article->all();

        return view('article.index', compact('articles'));
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($slug)
    {
        try {
            $article = $this->article->whereSlug($slug)->firstOrFail();
        } catch (Exception $e) {
            return redirect()->route('home.index');
        }

        return view('article.show', compact('article'));
    }
}
