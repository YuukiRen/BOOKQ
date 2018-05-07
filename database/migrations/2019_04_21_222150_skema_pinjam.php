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
        Schema::create('skema', function (Blueprint $table) {
                $table->increments('id');
                $table->string('transaction_id');
                $table->unsignedInteger('user_lender');
                $table->unsignedInteger('user_booker');
                $table->unsignedInteger('book_id');
                $table->integer('status')->nullable();//0= requesting, 1=accepted, 2=returned
                $table->date('tanggal_pinjam');
                $table->date('tanggal_kembali')->nullable();//{{ date('Y-m-d H:i:s') }}
                
                $table->foreign('user_lender')->references('id')->on('users');
                
                $table->foreign('user_booker')->references('id')->on('users');
                
                $table->foreign('book_id')->references('id')->on('books');
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
