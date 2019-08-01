<?php

namespace App\Http\Controllers;


use App\Article;

class ArticleController extends ApiControllers
{
    public function __construct(Article $model)
    {
        $this->model = $model;
    }
}