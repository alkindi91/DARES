<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationDegreesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_degrees', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('type');

            $table->string('speciality');

            $table->string('institution');

            $table->date('graduation_year');

            $table->integer('score');

            $table->integer('country_id')->unsigned()->nullable();

            $table->foreign('country_id')->references('id')->on('lists_countries')->onDelete('SET NULL')->onUpdate('CASCADE');

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
        Schema::drop('registration_degrees');
    }

}
