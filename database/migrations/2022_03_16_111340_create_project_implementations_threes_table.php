<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_implementations_threes', function (Blueprint $table) {
            $table->id();
            $table->string('user_id_update')->nullable();
            $table->string('pimr_project_id')->nullable();
            $table->string('pimr_dbo_targ_2017_phyprogress')->nullable();
            $table->string('pimr_dbo_targ_2018_phyprogress')->nullable();
            $table->string('pimr_dbo_targ_2019_phyprogress')->nullable();
            $table->string('pimr_dbo_targ_2020_phyprogress')->nullable();
            $table->string('pimr_dbo_targ_2021_phyprogress')->nullable();
            $table->string('pimr_dbo_actu_2017_phyprogress')->nullable();
            $table->string('pimr_dbo_actu_2018_phyprogress')->nullable();
            $table->string('pimr_dbo_actu_2019_phyprogress')->nullable();
            $table->string('pimr_dbo_actu_2020_phyprogress')->nullable();
            $table->string('pimr_dbo_actu_2021_phyprogress')->nullable();
            $table->string('pimr_dbo_2017_disprogress')->nullable();
            $table->string('pimr_dbo_2018_disprogress')->nullable();
            $table->string('pimr_dbo_2019_disprogress')->nullable();
            $table->string('pimr_dbo_2020_disprogress')->nullable();
            $table->string('pimr_dbo_2021_disprogress')->nullable();
            $table->string('pimr_dbo_startdate')->nullable();
            $table->string('pimr_dbo_originalend')->nullable();
            $table->string('pimr_dbo_ate')->nullable();
            $table->string('pimr_dbo_actualend')->nullable();
            $table->string('pimr_others_targ_2017_phyprogress')->nullable();
            $table->string('pimr_others_targ_2018_phyprogress')->nullable();
            $table->string('pimr_others_targ_2019_phyprogress')->nullable();
            $table->string('pimr_others_targ_2020_phyprogress')->nullable();
            $table->string('pimr_others_targ_2021_phyprogress')->nullable();
            $table->string('pimr_others_actu_2017_phyprogress')->nullable();
            $table->string('pimr_others_actu_2018_phyprogress')->nullable();
            $table->string('pimr_others_actu_2019_phyprogress')->nullable();
            $table->string('pimr_others_actu_2020_phyprogress')->nullable();
            $table->string('pimr_others_actu_2021_phyprogress')->nullable();
            $table->string('pimr_others_2017_disprogress')->nullable();
            $table->string('pimr_others_2018_disprogress')->nullable();
            $table->string('pimr_others_2019_disprogress')->nullable();
            $table->string('pimr_others_2020_disprogress')->nullable();
            $table->string('pimr_others_2021_disprogress')->nullable();
            $table->string('pimr_others_startdate')->nullable();
            $table->string('pimr_others_originalend')->nullable();
            $table->string('pimr_others_ate')->nullable();
            $table->string('pimr_others_actualend')->nullable();
            $table->string('pimr_current_project_status')->nullable();
            $table->string('pimr_days_suspended')->nullable();
            $table->string('pimr_test_to_perform')->nullable();
            $table->string('pimr_other_test_to_perform')->nullable();
            $table->string('pimr_audit_coverage')->nullable();
            $table->string('pimr_cause_of_delay')->nullable();
            $table->string('pimr_cause_of_delay_others')->nullable();
            $table->string('pimr_cost_analysis')->nullable();
            $table->string('pimr_variation_ref_num')->nullable();
            $table->string('pimr_variation_desc')->nullable();
            $table->string('pimr_variation_cost')->nullable();
            $table->string('pimr_approved_date')->nullable();
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
        Schema::dropIfExists('project_implementations_threes');
    }
};
