<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrationStepsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_steps', function(Blueprint $table)
        {
            // a primary autoincrement step
            $table->increments('id');
            // name of the step
            $table->string('name');
            // boolean field to check if user can edit registration form on this step or not ( 0 for NO | 1 is for yes)
            $table->boolean('edit_form')->default(0);
            // boolean field to check if user can uplaod files on this step ( 0 for No | 1 for yes)
            $table->boolean('upload_files')->default(0);
            // field to track the user that created this step
            $table->integer('created_by')->unsigned()->nullable();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
            // time stamps to track the history of creation and update of this step
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
        Schema::drop('registration_steps');
    }

}
