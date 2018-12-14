<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use laravel\Scout\Searchable;


class Post extends Model
{
   protected $table = "post_panel";
   protected $fillable = ['title', 'post'];
}
