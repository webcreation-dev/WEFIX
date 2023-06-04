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
        Schema::create('shedule_stores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('store_device_id');
            $table->string('day');
            $table->time('hour_open');
            $table->time('hour_close');
            $table->foreign('store_device_id')->references('id')->on('store_devices')->onDelete('cascade');
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
        Schema::dropIfExists('shedule_stores');
    }
};
