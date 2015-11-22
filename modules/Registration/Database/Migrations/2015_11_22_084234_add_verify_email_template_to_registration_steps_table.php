<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVerifyEmailTemplateToRegistrationStepsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registration_steps', function(Blueprint $table)
        {
			$table->boolean('verify_email')->default(0);

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
			$table->dropColumn('verify_email');

        });
    }

}
