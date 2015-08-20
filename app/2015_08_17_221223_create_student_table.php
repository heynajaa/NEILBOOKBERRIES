<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('studentid');
            $table->string('ic');
            $table->char('typeid',1);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('contactNo');
            $table->char('gender',1);
            $table->string('class');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *v.v
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
