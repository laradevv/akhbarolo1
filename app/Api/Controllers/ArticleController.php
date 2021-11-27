<?php

namespace App\Api\Controllers;

use App\Api\Transformers\ArticleTransformer;
use App\Models\Article;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

class ArticleController
{
    use Helpers;

//    public function index()
//    {
//        $articles = Article::all();
//        return $this->collection($articles, new ArticleTransformer());
//    }
//
//    public function show($id)
//    {
//        return Article::findOrFail($id);
//    }

    /**
     * @param  Request $request
     * @return mixed
     */
    public function search(Request $request)
    {
        $error = ['error' => 'try different keywords'];

        if($request->has('q')) {

            $articles = Article::search($request->get('q'))->get();

            return $articles->count() ? $articles : $error;

        }
        return $error;
    }
}
