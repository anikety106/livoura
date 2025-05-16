<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        // if (!Storage::disk('public')->exists('uploads')) {
        //     Storage::disk('public')->makeDirectory('uploads');
        // }

        // $files = Storage::disk('public')->files('uploads');
        // $images = array_map(function ($file) {
        //     return Storage::url($file); 
        // }, $files);

        // return view('blogpost.blogs', compact('images'));



        $posts = BlogPost::latest()->get(); // Fetch all blog posts, latest first
        return view('blogpost.blogs', compact('posts'));
    }
}
