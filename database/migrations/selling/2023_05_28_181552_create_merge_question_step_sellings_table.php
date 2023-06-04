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
        Schema::create('merge_question_step_sellings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('step_selling_id');
            $table->foreign('step_selling_id')->references('id')->on('step_sellings')->onDelete('cascade');
            $table->unsignedBigInteger('question_step_selling_id');
            $table->foreign('question_step_selling_id')->references('id')->on('question_step_sellings')->onDelete('cascade');
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
        Schema::dropIfExists('merge_question_step_sellings');
    }
};
