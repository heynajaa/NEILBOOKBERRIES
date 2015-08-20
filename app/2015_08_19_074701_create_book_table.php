<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('isbn');
            $table->string('title');
            $table->text('description');
            $table->string('author');
            $table->date('yearpub');
            $table->string('publisher');
            $table->integer('ms');
            $table->date('arrivedate');
            $table->integer('quantity');
            $table->string('category');
            $table->string('genre');
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
        Schema::drop('books');
    }
}
