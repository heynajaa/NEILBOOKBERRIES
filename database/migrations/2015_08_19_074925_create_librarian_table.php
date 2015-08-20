<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librarians', function (Blueprint $table) {
            $table->increments('librarianid'); 
            $table->string('ic');
            $table->char('typeid',1);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('contactNo');
            $table->char('gender',1);
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
        Schema::drop('librarians');
    }
}
