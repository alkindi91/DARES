<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectLessonsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_lessons', function(Blueprint $table)
        {
           $table->increments('id');
            $table->string('name');
            $table->integer('academystructure_subject_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('academystructure_subject_id')
                  ->references("id")
                  ->on('academystructure_subjects')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            
            $table->integer('order');
            $table->integer('type');
            $table->integer('state');
        
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
        Schema::drop('subject_lessons');
    }

}
