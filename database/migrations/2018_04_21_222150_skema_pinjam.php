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
                    $table->string('transaction_id')->primary();
                    $table->string('user_lender');
                    $table->string('user_booker')->nullable();
                    $table->string('book_id');
                    $table->integer('status')->nullable();
                    $table->date('tanggal_pinjam');
                    $table->date('tanggal_kembali');
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
