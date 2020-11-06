<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId')->unsigned();
            $table->string('pjt_name');
            $table->longText('pjt_desc');
            $table->string('areYourRegistred');
            $table->string('registrationProof')->nullable();
            $table->string('havingATeam');
            $table->longText('teamContacts')->nullable();
            $table->string('position')->nullable();
            $table->foreign('userId')->references('id')->on('users');
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
        Schema::dropIfExists('register_businesses');
    }
}
