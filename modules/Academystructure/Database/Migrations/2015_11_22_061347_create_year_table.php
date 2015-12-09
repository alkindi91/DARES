<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academystructure_years', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');

            $table->integer('faculty_id')->unsigned()->nullable();
            $table->foreign('faculty_id')->references('id')->on('academystructure_faculties');

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
        Schema::drop('academystructure_years');
    }

}
