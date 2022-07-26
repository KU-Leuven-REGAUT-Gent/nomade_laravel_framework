<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstrumentTypeParameterTable extends Migration
{
    /**
     * Run the migrations.  (`id`, `name`, `description`, `level`, `datatype`, `mainboard`, `min`, `max`, `default`) VALUES
     *
     * @return void
     */
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrument_type_parameter', function (Blueprint $table) {
            $table->foreignId('instrument_type_id')->constrained();
            $table->foreignId('parameter_id')->constrained();

            $table->double('value')->nullable();
            $table->double('min')->nullable();
            $table->double('max')->nullable();

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
        Schema::dropIfExists('instrument_type_parameter');
    }
}
