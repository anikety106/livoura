<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // ✅ Missing use statement added
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $posts = Category::latest()->get(); 
        return view('categories.index', compact('posts'));
    }
    public function store(Request $request)
{
    $request->validate([
        'category_type' => 'required|string|max:255',
        'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
    ]);

    try {
        // Store the uploaded image in the 'public/uploads/categories' directory
        $path = $request->file('image_url')->store('uploads/categories', 'public');
      echo  $image_url = asset('storage/storage/' . $path);

        // Create a new category record
        Category::create([
            'category_type' => $request->category_type,
            'image_url' => $image_url,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('category.form')->with('success', 'Image uploaded!');
    } catch (\Exception $e) {
        return back()->with('error', 'Failed to upload image: ' . $e->getMessage());
    }
}

}
