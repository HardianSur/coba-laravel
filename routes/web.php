<?php


use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active"=> "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Mr. Waduh",
        "email" => "aduhai@gmail.com",
        "image" => "prof.png",
        "title" => "About",
        "active"=> "About"
    ]);
});



Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => "Post Categories",
        "active" => "Categories",
        'categories' => Category::all()
    ]);
});

//lazyEager load
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post by Category :  $category->name",
//         "active" => "Categories",
//         'posts' => $category->posts->load('category','author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post by Author : $author->name",
//         "active" => "Posts",
//         'posts' => $author->posts->load('category','author'),
//     ]);
// });