<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateProgrammeInformationTable
 */
class CreateProgrammeInformationTable extends Migration
{
    /**
     * up.
     */
    public function up()
    {
        Schema::create('programme_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('programme_name');
            $table->text('programme_description');
            $table->string('programme_thumbnail');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->integer('duration');

            $table->unsignedInteger('channel');
            $table->foreign('channel')->references('id')->on('channels');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programme_information');
    }
}
