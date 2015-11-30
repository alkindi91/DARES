<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academystructure_departments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('term_id')->unsigned()->nullable();
            $table->foreign('term_id')->references('id')->on('academystructure_terms');

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
        Schema::drop('academystructure_departments');
    }

}
