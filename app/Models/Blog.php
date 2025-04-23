<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
  protected $fillable = [
    'title',
    'excerpt',
    'content',
    'image',
    'author',
    'published_at'
  ];
}
