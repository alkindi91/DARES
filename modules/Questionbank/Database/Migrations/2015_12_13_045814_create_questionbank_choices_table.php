<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionbankChoicesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionbank_choices', function(Blueprint $table)
        {
            $table->increments('id');

            $table->text('choice');
           
            $table->Integer('question_id')
                  ->unsigned()
                  ->nullable();
                  
            $table->foreign('question_id')
                  ->references("id")
                  ->on('questionbank_questions');

            $table->tinyInteger('isactive');
           
         
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
        Schema::drop('questionbank_choices');
    }

}
