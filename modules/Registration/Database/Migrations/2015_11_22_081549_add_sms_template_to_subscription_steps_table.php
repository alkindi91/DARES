<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSmsTemplateToSubscriptionStepsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscription_steps', function(Blueprint $table)
        {
            $table->text('sms_template')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscription_steps', function(Blueprint $table)
        {
            $table->dropColumn('sms_template');
        });
    }

}
