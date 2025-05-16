<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        try {
            $path = $request->file('image')->store('uploads', 'public');
            $url = asset('storage/' . $path);

            BlogPost::create([
                'image_url' => $url,
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return redirect()->route('blogpost.form')->with('success', 'Image uploaded!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to upload image: ' . $e->getMessage());
        }
    }
}
