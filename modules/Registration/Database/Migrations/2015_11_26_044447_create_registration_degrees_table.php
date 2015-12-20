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

            $table->string('degree_name');

            $table->string('degree_speciality');

            $table->string('degree_institution');

            $table->smallInteger('degree_graduation_year');

            $table->integer('degree_score');

            $table->integer('registration_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('registration_id')
                  ->references('id')
                  ->on('registrations')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->integer('degree_country_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('degree_country_id')
                  ->references('id')
                  ->on('lists_countries')
                  ->onDelete('SET NULL')
                  ->onUpdate('CASCADE');

            // $table->timestamps();
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
