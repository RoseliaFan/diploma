<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'number',
        'yymm', 
        'cvv',
        'name',
      ];
}
