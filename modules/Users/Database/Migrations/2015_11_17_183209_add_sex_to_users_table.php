<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSexToUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
        {
            // add birthday column to store the user birthday
            $table->date('birthday')->nullable();
            // add a column to store the user gender ( f ) is for female and ( m ) is for male
            $table->enum('sex' ,['f' ,'m'])->default("m");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn(['sex' ,'birthday']);
        });
    }

}
