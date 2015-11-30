<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTermTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academystructure_terms', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('year_id')->unsigned()->nullable();
            $table->foreign('year_id')->references('id')->on('academystructure_years');

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
        Schema::drop('academystructure_terms');
    }

}
