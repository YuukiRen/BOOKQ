<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
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
            $table->integer('isbn')->unique();
            $table->string('author');
            $table->string('title');
            $table->string('synopsis');
            $table->integer('year');
            $table->string('publisher');
            $table->longText('description');
            // $table->string('cover')->default('no-cover.jpg');//uncomment kalo mau ada gambar
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
        Schema::dropIfExists('books');
    }
}
