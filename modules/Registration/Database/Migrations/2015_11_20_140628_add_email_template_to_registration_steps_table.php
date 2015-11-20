<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailTemplateToRegistrationStepsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registration_steps', function(Blueprint $table)
        {
            $table->text('email_template')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registration_steps', function(Blueprint $table)
        {
            $table->dropColumn('email_template');
        });
    }

}
