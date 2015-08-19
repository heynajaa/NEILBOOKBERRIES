<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bookdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookdetails', function (Blueprint $table) {
            $table->increments('id');
           // $table->string('title'); book type
            $table->string('title');
            $table->string('author');
            $table->string('isbn');
            $table->string('publisher');
            $table->string('published_date');
            $table->string('price');
            $table->text('desc');
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
        Schema::drop('bookdetails');
    }
}
