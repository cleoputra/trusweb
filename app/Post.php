<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use laravel\Scout\Searchable;


class Post extends Model
{
    protected $fillable = [
        'title', 'author', 'content', 'photo',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'author');
    }
}
