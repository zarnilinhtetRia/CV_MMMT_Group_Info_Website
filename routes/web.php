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
use App\Http\Controllers\BreakingNewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServiceController;
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
Route::get('/allnews', [BlogPostController::class, 'allnews'])->name('allnews');

//all courses
Route::get('/all_courses', [BlogController::class, 'all_courses'])->name('all_courses');


//Service
Route::get('/service', [ServiceController::class, 'service']);
Route::post('/servicestore', [ServiceController::class, 'servicestore'])->name('contact.submit');
Route::get('service_edit/{id}', [ServiceController::class, 'service_edit']);
Route::post('service_update/{id}', [ServiceController::class, 'service_update']);

Route::get('/service_delete/{id}', [ServiceController::class, 'service_delete'])->name('service.delete');

//News
Route::get('/news', [NewsController::class, 'news']);
Route::post('/newsstore', [NewsController::class, 'newsstore'])->name('contact.submit');
Route::get('new_edit/{id}', [NewsController::class, 'new_edit']);
Route::post('new_update/{id}', [NewsController::class, 'new_update']);

Route::get('/new_delete/{id}', [NewsController::class, 'new_delete']);
//About
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

//Contact Us
Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact/submit', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('message', [ContactController::class, 'message']);


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

    // Breaking News
    Route::resource('breakingnews', BreakingNewsController::class);

    //User
    Route::resource('users', UserController::class);

    //Blog
    Route::resource('blogs', BlogController::class);
});

//Blog Detail
// Route::get('/blog_upcoming', [BlogController::class, 'blog_upcoming'])->name('blogs_detail');

// Route::get('/blogs_detail', [BlogController::class, 'blogs_detail'])->name('blogs_detail');
Route::get('/hero', [BlogController::class, 'hero'])->name('blogs_detail');

Route::get('/about_us', [BlogController::class, 'about_us'])->name('about_us');
require __DIR__ . '/auth.php';
