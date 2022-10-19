<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Post::factory(20)->create();
        // Melakuk an seeding secara manual
        // User::create([
        // 'name' => 'Ridho Ray',
        // 'email' => 'ridho@gmail.com',
        // 'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Doddy',
        //     'email' => 'Doddy@gmail.com',
        //     'password' => bcrypt('1234567')
        //     ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
             ]);


             Category::create([
                'name' => 'Web Desgin',
                'slug' => 'web-design',
                 ]);
    



    //    Post::create([

    //     'title' => 'Judul Pertama',
    //     'category_id' => 1,
    //     'user_id' => 1,
    //     'slug' => 'judul-pertama',
    //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit perspiciatis',
    //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit perspiciatis consequatur sequi suscipit dignissimos quae dolores ab mollitia nostrum soluta rem nisi facere doloribus accusamus maxime ipsam porro corporis tempora ut,</p><p> sed ducimus ratione dolorem. Animi sequi ipsa minima voluptate enim pariatur corrupti nihil deleniti ab, distinctio suscipit, quibusdam architecto hic iure sed vero illum reprehenderit, aspernatur iste error quo. Eligendi reprehenderit amet, soluta voluptatibus officiis ipsam id, quasi sit a quod unde numquam ullam aliquid? Tempore inven tore, velit atque iure aliquam a nobis earum</p><p> corrupti eos, culpa nisi? Culpa, sint expedita autem similique quaerat tempora doloribus perspiciatis voluptates placeat sunt asperiores sequi amet. Perspiciatis vero blanditiis omnis, cumque at quisquam adipisci dolorum aut eum beatae error aperiam obcaecati quae cum, impedit deleniti sint inventore tenetur. Quod recusandae, maxime veniam harum perferendis rerum possimus hic ut ad ipsum tenetur optio, laboriosam dolor accusamus doloremque. Vero aliquid quidem sint harum velit.</p>'
        
    //    ]);     

    //    Post::create([

    //     'title' => 'Judul Kedua',
    //     'category_id' => 1,
    //     'user_id' => 1,
    //     'slug' => 'judul-Kedua',
    //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit perspiciatis',
    //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit perspiciatis consequatur sequi suscipit dignissimos quae dolores ab mollitia nostrum soluta rem nisi facere doloribus accusamus maxime ipsam porro corporis tempora ut,</p><p> sed ducimus ratione dolorem. Animi sequi ipsa minima voluptate enim pariatur corrupti nihil deleniti ab, distinctio suscipit, quibusdam architecto hic iure sed vero illum reprehenderit, aspernatur iste error quo. Eligendi reprehenderit amet, soluta voluptatibus officiis ipsam id, quasi sit a quod unde numquam ullam aliquid? Tempore inven tore, velit atque iure aliquam a nobis earum</p><p> corrupti eos, culpa nisi? Culpa, sint expedita autem similique quaerat tempora doloribus perspiciatis voluptates placeat sunt asperiores sequi amet. Perspiciatis vero blanditiis omnis, cumque at quisquam adipisci dolorum aut eum beatae error aperiam obcaecati quae cum, impedit deleniti sint inventore tenetur. Quod recusandae, maxime veniam harum perferendis rerum possimus hic ut ad ipsum tenetur optio, laboriosam dolor accusamus doloremque. Vero aliquid quidem sint harum velit.</p>'
        
    //    ]);

    //    Post::create([

    //     'title' => 'Judul Ketiga',
    //     'category_id' => 2,
    //     'user_id' => 2,
    //     'slug' => 'judul-ketiga',
    //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit perspiciatis',
    //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit perspiciatis consequatur sequi suscipit dignissimos quae dolores ab mollitia nostrum soluta rem nisi facere doloribus accusamus maxime ipsam porro corporis tempora ut,</p><p> sed ducimus ratione dolorem. Animi sequi ipsa minima voluptate enim pariatur corrupti nihil deleniti ab, distinctio suscipit, quibusdam architecto hic iure sed vero illum reprehenderit, aspernatur iste error quo. Eligendi reprehenderit amet, soluta voluptatibus officiis ipsam id, quasi sit a quod unde numquam ullam aliquid? Tempore inven tore, velit atque iure aliquam a nobis earum</p><p> corrupti eos, culpa nisi? Culpa, sint expedita autem similique quaerat tempora doloribus perspiciatis voluptates placeat sunt asperiores sequi amet. Perspiciatis vero blanditiis omnis, cumque at quisquam adipisci dolorum aut eum beatae error aperiam obcaecati quae cum, impedit deleniti sint inventore tenetur. Quod recusandae, maxime veniam harum perferendis rerum possimus hic ut ad ipsum tenetur optio, laboriosam dolor accusamus doloremque. Vero aliquid quidem sint harum velit.</p>'
        
    //    ]);


    }
}
