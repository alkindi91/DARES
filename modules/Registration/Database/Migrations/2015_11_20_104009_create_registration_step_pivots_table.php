<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationStepPivotsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_step_pivots', function(Blueprint $table)
        {
            $table->increments('id');

           $table->integer('parent_id')->unsigned()->nullable();
           $table->integer('child_id')->unsigned()->nullable();

           $table->foreign('parent_id')
                 ->references('id')
                 ->on('registration_steps')
                 ->onDelete('CASCADE')
                 ->onUpdate('CASCADE');

           $table->foreign('child_id')
                 ->references('id')
                 ->on('registration_steps')
                 ->onDelete('CASCADE')
                 ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registration_step_pivots');
    }

}
