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
        Schema::create('sell_asks', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone_number')->nullable();
            $table->unsignedBigInteger('type_device_id');
            $table->foreign('type_device_id')->references('id')->on('type_devices')->onDelete('cascade');
            $table->unsignedBigInteger('brand_device_id');
            $table->foreign('brand_device_id')->references('id')->on('brand_devices')->onDelete('cascade');
            $table->unsignedBigInteger('model_brand_id');
            $table->foreign('model_brand_id')->references('id')->on('model_brands')->onDelete('cascade');
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
        Schema::dropIfExists('sell_asks');
    }
};
