<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

protected $fillable = ['category_type','image_url', 'title', 'description'];

    // protected $casts = [
    //     'gallery' => 'array',
    // ];
}
