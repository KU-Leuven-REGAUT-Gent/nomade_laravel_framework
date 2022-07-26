<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('questionnaire_category_id')->default(1)->constrained();
            $table->foreignId('questionnaire_group_id')->constrained();

            $table->text('name_en');
            $table->text('name_nl')->nullable();
            $table->text('name_fr')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_nl')->nullable();
            $table->text('description_fr')->nullable();

            $table->unsignedInteger('version')->default(1);
            $table->boolean('draft')->default(true);
            $table->unsignedSmallInteger('editable')->default(0);

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
        Schema::dropIfExists('questionnaires');
    }
}
