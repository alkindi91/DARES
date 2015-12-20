<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademystructureSubjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academystructure_subjects', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('dep_id')
                   ->unsigned()
                   ->nullable();
            $table->foreign('dep_id')
                  ->references('id')
                  ->on('academystructure_departments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
                  
            $table->integer('sub_id')
                  ->unsigned()
                  ->nullable();
            $table->foreign('sub_id')
                  ->references('id')
                  ->on('subject_subjects')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

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
        Schema::drop('academystructure_subjects');
    }

}
