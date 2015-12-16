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
      $stay_types = array_keys(config('registration.stay_types'));
      $social_status = array_keys(config('registration.social_status'));
        Schema::create('registrations', function(Blueprint $table) use ($stay_types, $social_status) {
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
              $table->enum("religion" ,['muslim', 'jew', 'christian'])->default('muslim')->comment = "The religion (I) for islam,(J) for jew and (C) for christian";
              $table->enum("stay_type",$stay_types)->default('work');
              $table->enum("social_status",$social_status)->default('single');
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
              $table->integer("degree_graduation_year");
              $table->string("social_job");
              $table->boolean('email_verified')->default(0)->comment = "check if the student verified his email (0) not verified ,(1) verified";
              $table->string('verification_token', 100)->comment = 'This used to store the code we use to verify the student email';
              $table->string("social_job_status");
              $table->date("social_job_start");
              $table->float("social_experience");
              $table->string("social_job_employer");
              // health status of registrar 0 for disabled and 1 for healthy
              $table->boolean("health_status")->default(0);
              $table->string("health_disabled_type");
              $table->string("health_disabled_size");

              $table->string("computer_skills")->nullable();
              $table->string("internet_skills")->nullable();
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

              $table->integer('degree_country_id')
                    ->unsigned()
                    ->nullable()
                    ->index();

              $table->foreign('degree_country_id')
                    ->references('id')
                    ->on('lists_countries')
                    ->onDelete('SET NULL')
                    ->onUpdate('SET NULL');

              $table->integer('birth_country_id')
                    ->unsigned()
                    ->nullable()
                    ->index();

              $table->foreign('birth_country_id')
                    ->references('id')
                    ->on('lists_countries')
                    ->onDelete('SET NULL')
                    ->onUpdate('SET NULL');

              $table->integer('nationality_city_id')
                    ->unsigned()
                    ->nullable()
                    ->index();

              $table->foreign('nationality_city_id')
                    ->references('id')
                    ->on('lists_cities')
                    ->onDelete('SET NULL')
                    ->onUpdate('SET NULL');

             $table->integer('nationality_state_id')
                                ->unsigned()
                                ->nullable()
                                ->index();

             $table->foreign('nationality_state_id')
                                ->references('id')
                                ->on('lists_states')
                                ->onDelete('SET NULL')
                                ->onUpdate('SET NULL');

               $table->integer('contact_country_id')
                    ->unsigned()
                    ->nullable()
                    ->index();

              $table->foreign('contact_country_id')
                    ->references('id')
                    ->on('lists_countries')
                    ->onDelete('SET NULL')
                    ->onUpdate('SET NULL');

              $table->integer('contact_city_id')
                    ->unsigned()
                    ->nullable()
                    ->index();

              $table->foreign('contact_city_id')
                    ->references('id')
                    ->on('lists_cities')
                    ->onDelete('SET NULL')
                    ->onUpdate('SET NULL');

             $table->integer('contact_state_id')
                                ->unsigned()
                                ->nullable()
                                ->index();

             $table->foreign('contact_state_id')
                                ->references('id')
                                ->on('lists_states')
                                ->onDelete('SET NULL')
                                ->onUpdate('SET NULL');

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
