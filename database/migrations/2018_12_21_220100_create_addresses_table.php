<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street');
            $table->string('exterior');
            $table->string('interior')->nullable();
            $table->string('cp');
            $table->string('location');
            $table->unsignedInteger('users_id');
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->unsignedInteger('countries_id');
            $table->foreign('countries_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');
            $table->unsignedInteger('states_id');
            $table->foreign('states_id')
                ->references('id')
                ->on('states')
                ->onDelete('cascade');
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
        Schema::dropIfExists('addresses');
    }
}
