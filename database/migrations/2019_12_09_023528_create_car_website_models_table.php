<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarWebsiteModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_website_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            //$table->string('u_name')->references('name')->on('users')->onDelete('cascade');
            $table->string('u_name')->nullable();
            $table->string('type');
            $table->string('fuel');
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->integer('Likes')->nullable('true');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('car_website_models');
    }
}
