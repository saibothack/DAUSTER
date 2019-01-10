<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->float('distance');
            $table->float('time');
            $table->float('subtotal');
            $table->float('total');
            $table->integer('paymentMethods_id');
            $table->unsignedInteger('vehicles_id');
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('users_id_driver')->nullable();
            $table->timestamps();
            $table->foreign('vehicles_id')
                ->references('id')
                ->on('vehicles')
                ->onDelete('cascade');
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('users_id_driver')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
