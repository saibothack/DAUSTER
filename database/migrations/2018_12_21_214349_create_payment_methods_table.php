<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('card');
            $table->string('token');
            $table->bigInteger('month')->nullable();
            $table->bigInteger('year')->nullable();
            $table->unsignedInteger('type_cards_id')->nullable();
            $table->foreign('type_cards_id')
                ->references('id')
                ->on('type_cards')
                ->onDelete('cascade');
            $table->unsignedInteger('users_id')->nullable();
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('payment_methods');
    }
}
