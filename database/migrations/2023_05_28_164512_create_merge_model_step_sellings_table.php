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
        Schema::create('merge_model_step_sellings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('step_selling_id');
            $table->foreign('step_selling_id')->references('id')->on('step_sellings')->onDelete('cascade');
            $table->unsignedBigInteger('model_brand_id');
            $table->foreign('model_brand_id')->references('id')->on('model_brands')->onDelete('cascade');
            $table->string('order');
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
        Schema::dropIfExists('merge_model_step_sellings');
    }
};
