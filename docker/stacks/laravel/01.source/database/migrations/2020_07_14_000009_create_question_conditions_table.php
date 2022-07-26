<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_conditions', function (Blueprint $table) {
            $table->foreignId('question_id')->constrained();
            $table->foreignId('condition_question_id')->constrained('questions');
            $table->foreignId('condition_answer_id')->constrained('answers');

            $table->timestamps(3);
            $table->timestamp('deleted_at',3)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_conditions');
    }
}
