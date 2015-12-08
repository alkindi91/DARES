<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function(Blueprint $table)
        {
            $table->increments('id');

              $table->string("first_name");
              $table->string("second_name");
              $table->string("third_name");
              $table->string("fourth_name")->nullable();
              $table->string("last_name");
              $table->string("last_name_latin");
              $table->string("fourth_name_latin")->nullable();
              $table->string("third_name_latin");
              $table->string("second_name_latin");
              $table->string("first_name_latin");
              // accept values ( f for female ,m for male)
              $table->enum("gender", ['f', "m"])->nullable();
              // accept value date eg : 2015-05-05
              $table->date("birthday");
              // accept values : (O for omani , E for non omani)
              $table->string("nationality_type");
              $table->string("passeport_number");
              // accept value date eg : 2015-05-05
              $table->date("passeport_issued");
               // accept value date eg : 2015-05-05
              $table->date("passeport_expire");
               // accept value date eg : 2015-05-05
              $table->string("stay_expire");
              $table->string("national_id");
               // accept value date eg : 2015-05-05
              $table->enum("religion" ,['I', 'J', 'C'])->default('I');
              $table->string("contact_region");
              $table->string("contact_postalbox");
              $table->string("contact_street");
              $table->string("contact_home_number");
              $table->string("contact_email");
              $table->integer("contact_mobile");
              $table->integer("contact_phone");
              $table->integer("contact_fax");
              $table->string("degree_speciality");
              $table->string("degree_institution");
              $table->integer("degree_score");
              $table->string("social_job");
              $table->string("social_job_status");
              $table->date("social_job_start");
              $table->float("social_experience");
              $table->string("social_job_employer");
              $table->boolean("health_status")->default(0);
              $table->string("health_disabled_type");
              $table->string("health_disabled_size");
              $table->string("internet_link");
              $table->string("cyber_cafe");
              $table->string("computer_availability");
              $table->string("reference");
              $table->string("reference_other");
              $table->integer('registration_period_id')->unsigned()->nullable();
              $table->foreign('registration_period_id')->references('id')->on('registration_periods')->onDelete('CASCADE')->onUpdate('CASCADE');
              
              $table->integer('registration_step_id')->unsigned()->nullable();
              $table->foreign('registration_step_id')->references('id')->on('registration_steps')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::drop('registrations');
    }

}
