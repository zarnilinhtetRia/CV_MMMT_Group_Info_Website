<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Providers\AppServiceProvider;

// Route::get('/login', function () {
//     // return view('welcome');
//     return view('auth.login');
// });

Route::get('/adminlogin', function () {
    return view('auth.login', ['role' => 'admin']);
});

Route::get('/userlogin', function () {
    return view('auth.login', ['role' => 'user']);
});

// Route::get('/login', function () {
//     if (Auth::check()) {
//         return redirect()->route('dashboard'); // Redirect to dashboard if already logged in
//     }
//     return view('auth.login');
// })->name('login');

//Blog_post
Route::get('/', [BlogPostController::class, 'blog_post'])->name('blog_post.index');
Route::get('blog_post/{id}', [BlogPostController::class, 'blog_post_detail'])->name('blog_post.detail');
Route::get('/blog-search', [BlogPostController::class, 'searchBlog'])->name('blog.search');
Route::post('/comments/store', [BlogPostController::class, 'storeComment'])->name('comments.store');
Route::get('/comments/{comment}/edit', [BlogPostController::class, 'editComment'])->name('comments.edit');
Route::put('/comments/{comment}', [BlogPostController::class, 'updateComment'])->name('comments.update');
Route::delete('/comments/{comment}', [BlogPostController::class, 'deleteComment'])->name('comments.destroy');



//About
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

//Contact Us
Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact/submit', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::resource('blogs', BlogController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Category
    Route::resource('categories', CategoryController::class);

    //Type
    Route::resource('types', TypeController::class);

    //User
    Route::resource('users', UserController::class);

    //Blog
    Route::resource('blogs', BlogController::class);
});


require __DIR__ . '/auth.php';
