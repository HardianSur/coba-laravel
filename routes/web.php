<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::resource('dashboard/posts', DashboardPostController::class) ->middleware('auth');

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