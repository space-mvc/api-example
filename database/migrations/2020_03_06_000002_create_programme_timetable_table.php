<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateProgrammeTimetableTable
 */
class CreateProgrammeTimetableTable extends Migration
{
    /**
     * up.
     */
    public function up()
    {
        Schema::create('programme_timetable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('programme_name');
            $table->timestamp('start_time')->useCurrent();
            $table->timestamp('end_time')->useCurrent();
            $table->integer('duration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programme_timetable');
    }
}
