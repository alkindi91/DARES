<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportprogramsApplicationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supportprograms_applications', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('comment');
            $table->string('program_link');
            $table->string('guide_link');
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
        Schema::drop('supportprograms_applications');
    }

}
