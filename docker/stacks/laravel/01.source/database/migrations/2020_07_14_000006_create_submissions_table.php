<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('questionnaire_id')->constrained();
            $table->foreignId('user_id')->constrained();; // ID of the user to which this submission applies
            $table->foreignId('prev_submission_id')->nullable()->constrained('submissions'); // ID of the previous submission before editing
            $table->foreignId('next_submission_id')->nullable()->constrained('submissions'); // ID of the next submission after editing

            $table->timestamp('started_at',3)->nullable();
            $table->timestamp('finished_at',3)->nullable();

            $table->timestamps(3);
            $table->timestamp('deleted_at',3)->nullable();
            $table->unsignedBigInteger('created_by')->nullable(); // ID of the user that created this submission
            $table->unsignedBigInteger('updated_by')->nullable(); // ID of the user that updated this submission
            $table->unsignedBigInteger('deleted_by')->nullable(); // ID of the user that updated this submission
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submission_answers');
        Schema::dropIfExists('submissions');
        Schema::dropIfExists('questionnaires');
    }
}
