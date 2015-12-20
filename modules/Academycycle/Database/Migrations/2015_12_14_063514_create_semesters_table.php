<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemestersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academycycle_semesters', function(Blueprint $table)
        {
            
            $table->increments('id');
            $table->string('name');
            $table->date('start_at');
            $table->date('finish_at');            
			
			$table->boolean('active')->default(1)->comment = "current semester";

            $table->integer('academycycle_year_id')->unsigned()->nullable();

            $table->foreign('academycycle_year_id')
                  ->references('id')
                  ->on('academycycle_years')
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
        Schema::drop('semesters');
    }

}
