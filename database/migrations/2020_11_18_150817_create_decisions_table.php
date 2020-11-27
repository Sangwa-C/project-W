<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decisions', function (Blueprint $table) {
            $table->id();
            $table->integer('sectors_Id')->unsigned();
            $table->foreign('sectors_Id')->references('id')->on('sectors');
            $table->integer('Enterpnuer_Id')->unsigned();
            $table->foreign('Enterpnuer_Id')->references('id')->on('users');
            $table->integer('Investors_id')->unsigned();
            $table->foreign('Investors_id')->references('id')->on('users');
            $table->integer('userId')->unsigned();
            $table->foreign('userId')->references('id')->on('users');
            $table->longText('plane');
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
        Schema::dropIfExists('decisions');
    }
}
