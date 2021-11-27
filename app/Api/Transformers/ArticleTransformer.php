<?php

namespace App\Api\Transformers;

use App\Models\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{
    public function transform(Article $article)
    {
        return [
            'title'   => $article['title'],
            'author' => $article['author'],
            'text' => $article['text'],
            'image' => $article['image'],
        ];
    }
}
