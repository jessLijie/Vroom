<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('role');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Insert users
        DB::table('users')->insert([
            ['username' => 'Admin', 'role' => 'admin', 'email' => 'admin@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 1', 'role' => 'customer', 'email' => 'user1@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 2', 'role' => 'customer', 'email' => 'user2@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 3', 'role' => 'customer', 'email' => 'user3@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 4', 'role' => 'customer', 'email' => 'user4@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 5', 'role' => 'customer', 'email' => 'user5@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 6', 'role' => 'customer', 'email' => 'user6@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 7', 'role' => 'customer', 'email' => 'user7@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 8', 'role' => 'customer', 'email' => 'user8@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 9', 'role' => 'customer', 'email' => 'user9@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 10', 'role' => 'customer', 'email' => 'user10@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 11', 'role' => 'customer', 'email' => 'user11@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 12', 'role' => 'customer', 'email' => 'user12@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 13', 'role' => 'customer', 'email' => 'user13@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 14', 'role' => 'customer', 'email' => 'user14@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 15', 'role' => 'customer', 'email' => 'user15@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 16', 'role' => 'customer', 'email' => 'user16@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 17', 'role' => 'customer', 'email' => 'user17@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 18', 'role' => 'customer', 'email' => 'user18@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 19', 'role' => 'customer', 'email' => 'user19@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],
            ['username' => 'User 20', 'role' => 'customer', 'email' => 'user20@gmail.com', 'password' => '$2y$10$D3K9X0XSjxJb7S9t9U69F.oyBQfX1Pwsg2uoRz6XLpxpF01K/d2VW'],

        ]);
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
