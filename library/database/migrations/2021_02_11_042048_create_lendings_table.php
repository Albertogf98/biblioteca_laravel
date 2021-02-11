<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lendings', function (Blueprint $table) {
          //  $table->increments('lendingId');
            $table->integer('user_id')->unsigned();
            $table->integer('copy_book_id')->unsigned();
            $table->date('lendingDate');
           // $table->primary(array('partnet_id', 'copy_book_id'));
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('copy_book_id')->references('id')->on('copy_books')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lendings');
    }
}
