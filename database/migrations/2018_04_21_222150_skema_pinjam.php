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
            Schema::create('transaksi', function (Blueprint $table) {
                    $table->string('id_transaksi')->primary();
                    $table->string('user_lender');
                    $table->string('user_booker');
                    $table->string('id_buku');
                    $table->int('status');
                    $table->date('tanggal_pinjam');
                    $table->date('tanggal_kembali');
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
        Schema::dropIfExists('transaksi');
    }
}
