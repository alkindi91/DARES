<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFileToSubjectElementsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subject_elements', function(Blueprint $table)
        {
            $table->string('file_file_name')->nullable();
            $table->integer('file_file_size')->nullable()->after('file_file_name');
            $table->string('file_content_type')->nullable()->after('file_file_size');
            $table->timestamp('file_updated_at')->nullable()->after('file_content_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subject_elements', function(Blueprint $table)
        {
            $table->dropColumn('file_file_name');
            $table->dropColumn('file_file_size');
            $table->dropColumn('file_content_type');
            $table->dropColumn('file_updated_at');
        });
    }

}
