<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists_countries', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('name');

            $table->string('calling_code')->nullable();
            
            $table->boolean('status')->default(1);

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
        Schema::drop('lists_countries');
    }

}
