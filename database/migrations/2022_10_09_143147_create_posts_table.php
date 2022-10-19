<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // Membuat foreign Key agar Bisa Relation antar table
            $table->foreignId('category_id');
            // supaya table post ini punya foregin_key ke table user
            $table->foreignId('user_id');
            
            // Membuat table atau migration disini
            $table->string('title');
            // unique agar tidak ada yang sama
            $table->string('slug')->unique();
            // Excerpt => untuk menyimpan sebagian kecil dari tulisan
            // yang ada di dalem body blog kita
            $table->text('excerpt');
            $table->text('body');
            // timestamp tanpa 'S' => tipe data
            $table->timestamp('published_at')->nullable();
            // timestamps adalah method untuk membuat created ADD dan Updated ADD
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
