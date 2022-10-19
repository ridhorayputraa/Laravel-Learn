<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('categories',[
            //    Disini kita akan mengembalikan data 
            // Yang akan kita kirim ke View nya
            'title' => 'Post Categories',
            // ngambil dari model category
            'categories' => Category::all(),
        ]);
    }

};

