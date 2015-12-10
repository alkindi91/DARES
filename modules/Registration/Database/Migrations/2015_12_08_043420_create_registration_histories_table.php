<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationHistoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_histories', function(Blueprint $table)
        {
            $table->increments('id');
            
            $table->string('comment', 1000);

            $table->integer('registration_id')->unsigned()->nullable();
            $table->foreign('registration_id')->references('id')->on('registrations')->onDelete('CASCADE')->onUpdate('CASCADE');

            $table->integer('registration_step_id')->unsigned()->nullable();
            $table->foreign('registration_step_id')
                  ->references('id')
                  ->on('registration_steps')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
            
            $table->integer('registration_step_note_id')->unsigned()->nullable();
            $table->foreign('registration_step_note_id')
                  ->references('id')
                  ->on('registration_step_notes')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

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
        Schema::drop('registration_histories');
    }

}
