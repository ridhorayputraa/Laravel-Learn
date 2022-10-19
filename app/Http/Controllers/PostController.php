<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // sebagai method default
    public function index(){
   
        // Request => Untuk menangkap yang diketikan di form
        // dd(request('search'));
        return view('posts', [ 
            'title' => 'All Posts',
            'active' => 'posts' ,
            // Ingin ngambil dari model sebuah method bernama all()
            // untuk mendapatkan data dari Model Post
            // 'posts' => Post::all()

            // Ingin mengambil dari yang terbaru

            // With => syntax untuk eager loading
            // kita sekalian ambil author dan category sehinnga pas looping dia nga query tapi
            // mengambil data yang ada di dalam post nya sekaligus
            'posts' => Post::latest()->filter(request(['search', 'category']))->get()

        ]);
    }


    public function show(Post $post){
        return view('post', [
            'title' => 'Single post',
            'active' => 'posts' ,
            'post' => $post,
            
        ]);
    }

}
