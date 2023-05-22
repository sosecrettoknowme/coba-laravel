<?php


use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;







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
        "active" => "home",
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "active" => "about",
        "title" => "About",
        "name" => "Muhammad Afdal",
        "email" => "afdal@gmail.com",
        "image" => "1.jpg"
    ]);
});



Route::get('/posts',[PostController::class, 'index']);

// Singel Post
Route::get('/posts/{post:slug}',[PostController::class, 'show']) ;



Route::get('/categories', function(){
    return view('categories', [
        "active" => "categories",
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); //artinya kita ngasih tahu ini hanya boleh diakses oleh user yang belum di autetikasi
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth'); //hanya bole diakses oleh orang yang suda login


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class. 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');



// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         "active" => "categories",
//         'title' =>  "Post By Category : $category->name",
//         'posts' => $category->posts->load('category', 'author')
//     ]); 
// });




// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         "active" => "posts",
//         'title' =>  "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author')

//     ]); 
// });


