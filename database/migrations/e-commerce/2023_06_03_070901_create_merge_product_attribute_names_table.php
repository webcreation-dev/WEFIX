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
        Schema::create('merge_product_attribute_names', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('price');
            $table->string('reduction_price');
            $table->foreign('product_id')->references('id')->on('products');
            $table->unsignedBigInteger('attribute_name_id');
            $table->foreign('attribute_name_id')->references('id')->on('attribute_names');
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
        Schema::dropIfExists('merge_product_attribute_names');
    }
};
