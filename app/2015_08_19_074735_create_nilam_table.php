<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilams', function (Blueprint $table) {
            $table->increments('studentid')->unsigned();
            $table->string('isbn');
            $table->string('title');
            $table->text('synopsis');
            $table->text('teachercomment');
            $table->string('author');
            $table->date('yearpub');
            $table->string('publisher');
            $table->integer('ms');
            $table->string('source');
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
        Schema::drop('nilams');
    }
}
