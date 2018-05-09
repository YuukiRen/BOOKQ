<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages_ts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('signature');
            $table->integer('from');
            $table->integer('to');
            $table->integer('read_from')->default(0); // 0 -> not read; 1 -> read
            $table->integer('read_to')->default(0) ; // 0 -> not read; 1 -> read
            $table->longText('messages');
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
        Schema::dropIfExists('messages_ts');
    }

}
