<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 

{
    // Property statis untuk sementara
   private static $blog_post = [
    // ARRAY NUMERIC YANG DI DALAMNYA RRAY ASSOSATIVE
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Ridho Ray Putra',
             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio saepe quia natus non harum, aut possimus cum quos ex itaque, sunt placeat atque. Dolorum, sint distinctio? Maxime voluptatibus quae modi cum blanditiis inventore voluptas pariatur voluptatum perferendis perspiciatis, odit eaque architecto impedit repudiandae. Odio, quis alias praesentium, consequuntur laudantium veritatis quisquam possimus in non natus nostrum ipsum dicta eveniet quod laborum veniam. Rerum voluptatem velit autem nobis facere architecto possimus, pariatur in, iure corrupti blanditiis officiis molestias officia maiores quisquam.',
            
            ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Ray kedua',
             'body' => '
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam ex commodi ipsam possimus recusandae laborum ipsa quo! Sapiente quam porro vitae tenetur aut doloremque delectus ex iusto non error iste, molestias provident blanditiis repellat perspiciatis architecto cum, praesentium modi quas officiis magni deserunt officia? Quisquam autem veniam temporibus culpa minima aut laudantium quod facere, ut architecto nemo nobis dignissimos incidunt blanditiis doloremque, vel deleniti fugiat recusandae hic, vero assumenda. Velit voluptate quaerat facilis aspernatur dignissimos, consequatur repellendus perspiciatis nam asperiores delectus, veritatis saepe quasi debitis vero fugit amet culpa distinctio quam ea, quos nostrum numquam quidem assumenda sit. Obcaecati, tempore.',
        ]
        ];
    

        // membuat method Post yang akan di kirim kle routes

        public static function all(){
            // Karena property static kita aakan menggunakan self::
            // JIka property biasa bisa menggunakan $this->

        // membungkus array dengan collection
            return collect(self::$blog_post);
        }

        public static function find($slug){

            // self untuk PROPERTY static
            // static untuk METHOD static
            $posts = static::all();
    //             $post = [];
    // foreach($posts as $p){
    //     // Jika slug yang ada di data $blog post 
    //     // sama dengan slug parameter Maka:
    //     if($p['slug'] === $slug ){
    //          $post = $p;
    //     }
    // }


    
    // Ambil satu data yang pertama kali di temukan => dimana slugnya
    // itu sama dengan(pake koma) $slug
    return $posts->firstWhere('slug',$slug);

    
}
}
