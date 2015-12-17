<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademycycleSemestereventsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academycycle_semesterevents', function(Blueprint $table)
        {
            $table->increments('id');
			
            $table->integer('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on('academycycle_semesterevent_types');
			
            $table->integer('semester_id')->unsigned()->nullable();
            $table->foreign('semester_id')->references('id')->on('academycycle_semesters');
			
            $table->date('start_at');
            $table->date('finish_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('academycycle_semesterevents');
    }

}
