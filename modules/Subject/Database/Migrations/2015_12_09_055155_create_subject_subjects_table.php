<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectSubjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_subjects', function(Blueprint $table)
        {
           
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('hour');
            $table->string('code');
            $table->longText('description');
            $table->enum('type', array_keys(config('subject.types')));

            $table->Integer('pre_request')
                  ->unsigned()
                  ->nullable();
                  
            $table->foreign('pre_request')
                  ->references("id")
                  ->on('subject_subjects');
            


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
        Schema::drop('subject_subjects');
    }

}
