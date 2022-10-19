<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    //  Untuk menjalan method up
    // php artisan migrate


    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            // php artisan migrate:fresh
            // apabila ada table yang tidak di butuhkan kemudian ingin me refresh ulang table
            // tersebut tanpa masuk ke mysql 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    //  Untuk menjalankan method down
    // php artisan migrate:rollback

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
