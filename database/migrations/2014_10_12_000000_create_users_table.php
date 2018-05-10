<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();

            // Profile
            $table->string('complete_name')->nullable();
            $table->string('nim')->nullable();
            $table->string('address')->nullable();
            $table->string('line_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('user_image')->default('images/no-cover.jpeg');
            $table->string('fav_book')->nullable();
            $table->longText('about_me')->nullable();
            $table->integer('banned')->default(0);
            
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
        Schema::dropIfExists('users');
    }
}
