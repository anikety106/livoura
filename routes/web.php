<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Route::get('/category', function () {
//    return view('category');
//})->name('category');

Route::view('dashboard', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::get('/blog',  [BlogController::class, 'index'])->name('blog');
Route::post('/blogpost', [BlogPostController::class, 'store'])->name('blogpost.form');
Route::get('/blogpost', function () {
    return view('blogpost.form');
})->middleware(['auth', 'verified'])->name('blogpost');



Route::get('/category', [CategoryController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoryController::class, 'store'])->name('category.form');
Route::get('/categories', function () {
    return view('categories.form'); 
})->middleware(['auth', 'verified'])->name('categories');



Route::post('/enquiry-submit', [EnquiryController::class, 'submit'])->name('enquiry.submit');



Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

require __DIR__ . '/auth.php';
