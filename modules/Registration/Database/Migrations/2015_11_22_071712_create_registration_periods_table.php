<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationPeriodsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration_periods', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->date('start_at');
            $table->date('finish_at');

            $table->boolean('active')->default(1);

            $table->integer('registration_year_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('registration_year_id')
                  ->references('id')
                  ->on('registration_years')
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
        Schema::drop('registration_periods');
    }

}