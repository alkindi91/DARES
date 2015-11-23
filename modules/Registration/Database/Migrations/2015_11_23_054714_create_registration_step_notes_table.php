<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationStepNotesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_step_notes', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('registration_step_id')
                  ->unsigned()
                  ->nullable();

            $table->text('content');

            $table->foreign('registration_step_id')
                  ->references('id')
                  ->on('registration_steps')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->integer('created_by')
                  ->unsigned()
                  ->nullable();

            $table->foreign('created_by')
                  ->references('id')
                  ->on('users')
                  ->onDelete('SET NULL')
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
        Schema::drop('registration_step_notes');
    }

}
