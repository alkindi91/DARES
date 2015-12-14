<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationFilesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $types = array_keys(config('registration.files.types'));

        Schema::create('registration_files', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('registration_id')->index()->unsigned()->nullable();
            $table->foreign('registration_id')
                  ->references('id')
                  ->on('registration')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');

            $table->enum('type', $types)->default($types[0]);
            $table->string('file_file_name')->nullable();
            $table->integer('file_file_size')->nullable()->after('file_file_name');
            $table->string('file_content_type')->nullable()->after('file_file_size');
            $table->timestamp('file_updated_at')->nullable()->after('file_content_type');

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
        Schema::drop('registration_files');
    }

}
