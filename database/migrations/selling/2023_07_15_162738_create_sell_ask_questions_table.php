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
        Schema::create('sell_ask_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sell_ask_id');
            $table->foreign('sell_ask_id')->references('id')->on('sell_asks')->onDelete('cascade');
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
        Schema::dropIfExists('sell_ask_questions');
    }
};
