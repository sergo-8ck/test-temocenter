<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
    protected $table = 'freelancers';

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