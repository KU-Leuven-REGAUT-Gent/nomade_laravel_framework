<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('measurement_category_id')->default(1)->constrained();
            $table->foreignId('setup_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->string('name_en');
            $table->string('name_nl')->nullable();
            $table->string('name_fr')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_nl')->nullable();
            $table->text('description_fr')->nullable();

            $table->unsignedBigInteger('max')->nullable();
            $table->unsignedBigInteger('count')->nullable();

            $table->timestamp('started_at',3)->nullable();
            $table->timestamp('stopped_at',3)->nullable();

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
        Schema::dropIfExists('measurements');
    }
}
