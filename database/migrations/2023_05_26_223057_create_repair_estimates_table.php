<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_estimates', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('type_device_id');
            $table->foreign('type_device_id')->references('id')->on('type_devices')->onDelete('cascade');

            $table->unsignedBigInteger('brand_device_id');
            $table->foreign('brand_device_id')->references('id')->on('brand_devices')->onDelete('cascade');

            $table->unsignedBigInteger('model_brand_id');
            $table->foreign('model_brand_id')->references('id')->on('model_brands')->onDelete('cascade');

            $table->unsignedBigInteger('store_device_id');
            $table->foreign('store_device_id')->references('id')->on('store_devices')->onDelete('cascade');

            $table->unsignedBigInteger('shedule_store_id');
            $table->foreign('shedule_store_id')->references('id')->on('shedule_stores')->onDelete('cascade');

            $table->time('hour_coming');

            $table->string('gender');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('email');
            $table->string('phone');
            $table->string('zip_code');

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
        Schema::dropIfExists('repair_estimates');
    }
};
