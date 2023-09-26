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
        Schema::create('merge_model_failures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('failure_device_id');
            $table->foreign('failure_device_id')->references('id')->on('failure_devices')->onDelete('cascade');
            $table->string('price');

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
        Schema::dropIfExists('merge_model_failures');
    }
};
