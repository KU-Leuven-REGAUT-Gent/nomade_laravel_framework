<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UniqueInstrumentParameterTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instrument_parameter', function (Blueprint $table) {
            $table->unique(['instrument_id', 'parameter_id']);
        });
    }

}
