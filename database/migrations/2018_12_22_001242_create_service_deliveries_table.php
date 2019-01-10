<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_deliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyName');
            $table->string('name');
            $table->string('surnames');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('packages')->nullable();
            $table->string('description');
            $table->integer('orden');
            $table->unsignedInteger('services_id');
            $table->foreign('services_id')
                ->references('id')
                ->on('services')
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
        Schema::dropIfExists('service_deliveries');
    }
}
