<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademycycleSemestereventTypesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academycycle_semesterevent_types', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
			$table->string('category');
			$table->text('note');
			$table->boolean('show')->default(0)->comment = "show in academy calender";

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
        Schema::drop('academycycle_semesterevent_types');
    }

}
