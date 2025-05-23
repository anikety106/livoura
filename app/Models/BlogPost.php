<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $fillable = ['image_url', 'description','title','author_name','author_position','created_at'];
}
