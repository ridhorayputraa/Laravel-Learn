<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Kitas juga harus menghubungkan model post ke category
    // 1 kategory memilki banyak Post

    // posts adalah dapat dari posts route webp
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
