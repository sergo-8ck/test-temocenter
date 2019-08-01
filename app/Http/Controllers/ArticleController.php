<?php

namespace App\Http\Controllers;


use App\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends ApiControllers
{
    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    /**
     * @param ArticleRequest $request
     * @return mixed
     */
    public function createArticle(ArticleRequest $request) {

        return $this->create($request);
    }

    public function updateArticle(int $entityId, ArticleRequest $request) {

        return parent::update($entityId, $request);
    }
}