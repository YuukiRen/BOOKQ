<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SkemaPinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
                $table->increments('id');
                $table->string('transaction_id');
                $table->unsignedInteger('user_lender');
                $table->unsignedInteger('user_booker')->nullable();
                $table->string('book_id');
                $table->integer('status')->nullable();
                $table->date('tanggal_pinjam');
                $table->date('tanggal_kembali');
                // $table->foreign('user_lender')->references('id')->on('users');
                
                // $table->foreign('user_booker')->references('id')->on('users');
                
                // $table->foreign('book_id')->references('book_id')->on('books');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
