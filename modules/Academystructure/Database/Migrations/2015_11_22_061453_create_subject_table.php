<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration {

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
            $table->string('name');
            $table->integer('term_id')->unsigned()->nullable();
            $table->foreign('term_id')->references('id')->on('academystructure_terms');

            $table->smallInteger('hour');
            $table->string('code');
            $table->longText('description');
            $table->enum('type', ['شفوى', 'نظرى', 'عملى']);

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
