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

        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('travelMode')->default('DRIVE');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        Schema::create('charges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('charge');
            $table->integer('default')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->unsignedInteger('vehicles_id');
            $table->foreign('vehicles_id')
                ->references('id')
                ->on('vehicles')
                ->onDelete('cascade');
        });

        Schema::create('service_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('start_coordinates');
            $table->string('end_coordinates');
            $table->string('kilometers')->nullable();
            $table->string('time')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        Schema::create('service_charges', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('charges_id');
            $table->unsignedInteger('service_details_id');
            $table->float('costs');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign('charges_id')
                ->references('id')
                ->on('charges')
                ->onDelete('cascade');
            $table->foreign('service_details_id')
                ->references('id')
                ->on('service_details')
                ->onDelete('cascade');
        });

        Schema::create('service_charges_others', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('service_details_id');
            $table->string('description');
            $table->float('costs');
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign('service_details_id')
                ->references('id')
                ->on('service_details')
                ->onDelete('cascade');
        });

        Schema::create('service_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('status')->default(1);
            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('service_statuses_id');
            $table->integer('start_service_details_id');
            $table->integer('end_service_details_id');
            $table->timestamps();
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('service_statuses_id')
                ->references('id')
                ->on('service_statuses')
                ->onDelete('cascade');
        });

        Schema::create('service_status_trackings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('services_id');
            $table->unsignedInteger('service_statuses_id');
            $table->string('notes');
            $table->timestamps();
            $table->foreign('services_id')
                ->references('id')
                ->on('services')
                ->onDelete('cascade');
            $table->foreign('service_statuses_id')
                ->references('id')
                ->on('service_statuses')
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
        Schema::dropIfExists('service_charges');
        Schema::dropIfExists('charges');
        Schema::dropIfExists('vehicles');
        Schema::dropIfExists('service_charges_others');
        Schema::dropIfExists('service_details');
        Schema::dropIfExists('service_status_trackings');
        Schema::dropIfExists('services');
        Schema::dropIfExists('service_statuses');
    }
}
