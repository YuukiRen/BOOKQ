<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooks extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('author');
            $table->string('title');
            $table->string('review')->nullable();
            $table->integer('year');
            $table->string('publisher');
            $table->longText('description')->nullable();
            $table->string('category');
            $table->string('tag')->nullable();
            $table->integer('report')->default(0);
            $table->integer('banned')->default(0);
            $table->string('image')->default('images/no-cover.jpeg');//uncomment kalo mau ada gambar
            $table->timestamps();
            $table->integer('show')->default('1');
            
        });
    }

    /**
     * Reverse the migrations.
     **  *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
