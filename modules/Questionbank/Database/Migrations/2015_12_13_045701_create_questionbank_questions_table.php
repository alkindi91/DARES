<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionbankQuestionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionbank_questions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('question');
            $table->enum('type', array_keys(config('questionbank.types')));
            $table->Integer('lesson_id')
                  ->unsigned()
                  ->nullable();
                  
            $table->foreign('lesson_id')
                  ->references("id")
                  ->on('subject_lessons');

            $table->tinyInteger('isactive');
            $table->enum('difficulty', array_keys(config('questionbank.difficulty')));
            $table->enum('level', array_keys(config('questionbank.level')));
         
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
        Schema::drop('questionbank_questions');
    }

}
