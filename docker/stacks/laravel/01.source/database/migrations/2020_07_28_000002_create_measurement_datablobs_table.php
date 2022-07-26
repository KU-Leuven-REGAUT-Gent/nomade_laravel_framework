<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasurementDatablobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurement_datablobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('measurement_dataset_id')->constrained();
            $table->foreignId('instrument_id')->constrained();

            $table->binary('data');

            $table->unsignedTinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('measurement_datablobs');
    }
}
