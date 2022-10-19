<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


// Hubungkan model ke routes menggunakan Use
use App\Models\Post;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // menacari nama file 'welcome' di folder View
    // return view('welcome');\


    return view('home', [
        'title' => 'home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    // menacari nama file 'welcome' di folder View
    // return view('welcome');\

    return view('about', [
        // BIsa mengirimkan data berupa assosative array
        'title' => 'about',
        'active' => 'about',
        'name' => 'Ridho Ray Putra',
        "email" => "ridhoray@gmail.com",
        "image" => 'ridho.PNG'
    ]);
});


// Ceritanya kita mempunya data dari database
// berupa array assosiative




Route::get('/posts', [PostController::class, 'index']);


// Halaman single posts
// Detail
// wild card untuk mengambil apapun dari slash nya
Route::get('posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function () {
    return view('categories', [
        //    Disini kita akan mengembalikan data 
        // Yang akan kita kirim ke View nya
        'title' => 'Post Categories',
        'active' => 'categories' ,
        // ngambil dari model category
        'categories' => Category::all(),


    ]);
});


Route::get('/categories/{category:slug}', function (category $category) {
    return view('posts', [
        'active' => 'categories' ,
        //    Disini kita akan mengembalikan data 
        // Yang akan kita kirim ke View nya
        'title' => "post by Category : $category->name",
        // disini kita menambhakan eager lazy loading
        'posts' => $category->posts->load('author', 'category'),
    ]);
});

// Agara yang dikirim user name nya maka :
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        // disini kita menambhakan eager lazy loading
        'posts' => $author->posts->load('category', 'author'),
         'active' => 'active'   
    ]);
});
