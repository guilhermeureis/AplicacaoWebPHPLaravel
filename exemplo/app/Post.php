<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = [
        'title','content'
    ];
    protected $dates = [
        'delete_at'
    ];
}
