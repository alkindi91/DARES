<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedByToFacultiesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faculties', function(Blueprint $table)
        {
            $table->integer('created_by')->nullable()->unsigned();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faculties', function(Blueprint $table)
        {
            $table->dropForeign('faculties_created_by_foreign');
            $table->dropColumn('created_by');
        });
    }

}
