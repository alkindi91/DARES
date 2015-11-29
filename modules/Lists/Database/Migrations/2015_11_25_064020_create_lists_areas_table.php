<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListsAreasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists_areas', function(Blueprint $table)
        {
            $table->increments('id');
			$table->string('name');
			
                  /** the state id which the area belongs to */
            $table->integer('state_id')->unsigned()->nullable();
            $table->foreign('state_id')
                  ->references('id')
                  ->on('lists_states')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            /** the id of the user who created the area */
            $table->integer('created_by')->unsigned()->nullable();
            $table->foreign('created_by')
                  ->references('id')
                  ->on('users')
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
        Schema::drop('lists_areas');
    }

}
