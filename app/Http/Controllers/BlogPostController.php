<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:5000',
            'author_name' => 'required|string|max:255',
            'author_position' => 'required|string|max:255',
        ]);

        try {
            $path = $request->file('image')->store('uploads/blogs', 'public');
            $url = asset('storage/storage/' . $path);

            BlogPost::create([
                'image_url' => $url,
                'title' => $request->title,
                'description' => $request->description,
                'author_name' => $request->author_name,
                'author_position' => $request->author_position,
            ]);

            return redirect()->route('blogpost.form')->with('success', 'Blog uploaded!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to upload Blog: ' . $e->getMessage());
        }
    }
}
