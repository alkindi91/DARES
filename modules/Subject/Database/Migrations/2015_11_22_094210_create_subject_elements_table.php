<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectElementsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_elements', function(Blueprint $table)
        {
           $table->increments('id');
           $table->string('title');
           
           $table->integer('subject_lesson_id')->unsigned()->nullable();
           $table->foreign('subject_lesson_id')
                  ->references("id")
                  ->on('subject_lessons')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('element_order');
            $table->string('type');
            $table->integer('state');
            $table->text('value');


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
        Schema::drop('subject_elements');
    }

}
