<?php

namespace App\Http\Controllers;


class ArticleController extends ApiControllers
{
    public function __construct(Article $model)
    {
        $this->model = $model;
    }
}