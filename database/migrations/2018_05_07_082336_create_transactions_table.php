<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('id_lender');
                $table->unsignedInteger('id_booker');
                $table->unsignedInteger('book_id');
                $table->integer('status')->nullable();//0= requesting, 1=accepted, 2=returned
                $table->dateTime('request_date')->nullable();
                $table->dateTime('lend_date')->nullable();
                $table->dateTime('return_date')->nullable();//{{ date('Y-m-d H:i:s') }}
                $table->timestamps();
                $table->foreign('id_lender')->references('id')->on('users');
                
                $table->foreign('id_booker')->references('id')->on('users');
                
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
        Schema::dropIfExists('transactions');
    }
}
