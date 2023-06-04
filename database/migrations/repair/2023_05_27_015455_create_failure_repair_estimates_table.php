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
        Schema::create('failure_repair_estimates', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('model_failure_id');
            $table->foreign('model_failure_id')->references('id')->on('merge_model_failures')->onDelete('cascade');

            $table->unsignedBigInteger('repair_estimate_id');
            $table->foreign('repair_estimate_id')->references('id')->on('repair_estimates')->onDelete('cascade');

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
        Schema::dropIfExists('failure_repair_estimates');
    }
};
