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

            $table->integer('academycycle_year_id')
                  ->unsigned()
                  ->nullable();

            $table->foreign('academycycle_year_id')
                  ->references('id')
                  ->on('academycycle_years')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');


            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
            

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
