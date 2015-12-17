<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDepIdToSubjectSubjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subject_subjects', function(Blueprint $table)
        {
           $table->integer('dep_id')
                 ->unsigned()
                 ->index()
                 ->nullable();

           $table->foreign('dep_id')
                  ->references("id")
                  ->on('academystructure_departments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subject_subjects', function(Blueprint $table)
        {
            $table->dropForeign('subject_subjects_dep_id_foreign');
            $table->dropColumn('dep_id');
        });
    }

}
