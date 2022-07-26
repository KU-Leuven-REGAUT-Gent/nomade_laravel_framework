<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrument_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('instrument_type_category_id')->constrained();

            $table->string('name_en');
            $table->string('name_nl')->nullable();
            $table->string('name_fr')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_nl')->nullable();
            $table->text('description_fr')->nullable();


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
        Schema::dropIfExists('instrument_type_categories');
        Schema::dropIfExists('instrument_types');
    }
}
