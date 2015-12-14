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
              $table->enum("gender", ['f', "m"])->nullable()->comment = 'The gender of the student (m) for male and (f) for female';
              // 4 : slef paid ,5 with family
              $table->enum("housing_type", ['1', "2"])->default(1)->comment = "How the student pay for his housing ,4 he pays for it ,5 his familly pays";
              // who funds the student studies
              $table->enum("funding_type", ['1'])->default(1)->comment = "How the student fund his studies ,1 for himself";
              // the statu of the user in higher education
              $table->boolean('higher_education')->default(0)->comment = 'Does the student have a higher education 0 for no 1 for yes';
              // accept value date eg : 2015-05-05
              $table->date("birthday");
              // accept values : (O for omani , E for non omani)
              $table->string("nationality_type")->comment = "The nationality (O) for omani ,E for and an outsider";
              $table->string("passeport_number");
              // accept value date eg : 2015-05-05
              $table->date("passeport_issued");
               // accept value date eg : 2015-05-05
              $table->date("passeport_expire");
               // accept value date eg : 2015-05-05
              $table->date("stay_expire");
              $table->string("national_id");
               // accept value date eg : 2015-05-05
              $table->enum("religion" ,['I', 'J', 'C'])->default('I')->comment = "The religion (I) for islam,(J) for jew and (C) for christian";
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
              $table->boolean('email_verified')->default(0)->comment = "check if the student verified his email (0) not verified ,(1) verified";
              $table->string('verification_token', 100)->comment = 'This used to store the code we use to verify the student email';
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
              $table->char("username_prefix", 10)->nullable();
              $table->integer('registration_period_id')->unsigned()->nullable()->index();
              $table->foreign('registration_period_id')->references('id')->on('registration_periods')->onDelete('CASCADE')->onUpdate('CASCADE');
              $table->string('username')->nullable();
              $table->integer('registration_step_id')->unsigned()->nullable();
              $table->foreign('registration_step_id')->references('id')->on('registration_steps')->onDelete('CASCADE')->onUpdate('CASCADE');

             $table->integer('academystructure_specialty_id')->unsigned()->nullable()->index();
              $table->foreign('academystructure_specialty_id')
                    ->references('id')
                    ->on('academystructure_specialties')
                    ->onDelete('SET NULL')
                    ->onUpdate('SET NULL');

              $table->integer('registration_type_id')->unsigned()->nullable();
              $table->foreign('registration_type_id')
                    ->references('id')
                    ->on('registration_types')
                    ->onDelete('SET NULL')
                    ->onUpdate('SET NULL');

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
