<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // agar bisa menggunakan create::
    // 3 ini adalah property yang harus di isi
    // protected $fillable = ['title', 'excerpt', 'body'];



    // Kebalikan dari fillable
    // apanih yang mau di jagain
    protected $guarded = ['id'];
// Setap pengambilan query post nya author dan ctegory postnya kebawa 
protected $with = ['category', 'author'];





// QUERY SCOPES
public function scopeFilter($query, array $filters){
    // if(isset($filters['search'])? $filters['search'] : false ){
    //     // query pencarian biasanya menggunakan like
    //     // SELECT * FROM POSTS WHERE title LIKE % apa %
    //    return $query->where('title', 'like', '%' . $filters['search'] . '%')
    //     ->orWhere('body', 'like', '%' . $filters['search'] . '%');
    //     //untuk mencari apa yang ada di body => OrWhere 
    // }
    $query->when($filters['search']?? false, function($query, $search){
           // query pencarian biasanya menggunakan like
        // SELECT * FROM POSTS WHERE title LIKE % apa %
       return $query->where('title', 'like', '%' . $search . '%')
       ->orWhere('body', 'like', '%' . $search . '%');
       //untuk mencari apa yang ada di body => OrWhere 
    });

    $query->when($filters['category'] ?? false, function($query, $category){
        // WhereHas() => dimana query ini punya realtionship apa
        return $query->whereHas('category', function($query) use($category){
            $query->where('slug', $category); 
        });
    });



}









    // Untuk Menghubngkan Table Post ke Table Category
    // atau ingin menguhubungkan model Post ke Model Category
    // kita harus membuat method sesuai dengan nama model nya
    public function category(){
        // Mengembalikan relasi dari model post ini terhadap model category
    // kita ingin 1 postingan itu punya 1 category (One-to-One)    
        return $this->belongsTo(Category::class);
    }

    // Hubungkan model User
    // Kita bacanya dari post
    // 1 postingan hanya dimiliki oleh 1 user
    // jadi postingan tidak bisa dimikiliki 2 user
    // tetapi 1 user Boleh memilki banyak postingan
    public function author(){
        // memberikan alias/atau mengganti nama
        return $this->belongsTo(User::class, 'user_id');
    }



}
