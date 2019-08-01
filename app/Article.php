<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'article_id',
        'name',
        'announce',
        'description'
    ];

    protected $visible = [
        'article_id',
        'name',
        'announce',
        'description'
    ];
}