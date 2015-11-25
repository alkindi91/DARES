<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration {

    /**
     * Run the migrations.
     * create a governortates table
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists_states', function(Blueprint $table)
        {
            $table->increments('id');
            /** the states name */
			$table->string('name');

            /** the city id which the governorate belongs to */
			$table->integer('city_id')->unsigned()->nullable();
            $table->foreign('city_id')
                  ->references('id')
                  ->on('lists_cities')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            /** the id of the user who created the governorate */
			$table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            /** the time stamps of creation and update of the governorate */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * delete the states table
     * @return void
     */
    public function down()
    {
        Schema::drop('lists_states');
    }

}
