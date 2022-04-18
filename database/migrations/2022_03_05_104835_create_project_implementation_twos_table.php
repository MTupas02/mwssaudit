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
        Schema::create('project_implementation_twos', function (Blueprint $table) {
            $table->id();
            $table->string('user_id_update')->nullable();
            $table->string('pimt_project_id')->nullable();
            $table->string('pimt_con_cs_targ_2017_phyprogress')->nullable();
            $table->string('pimt_con_cs_targ_2018_phyprogress')->nullable();
            $table->string('pimt_con_cs_targ_2019_phyprogress')->nullable();
            $table->string('pimt_con_cs_targ_2020_phyprogress')->nullable();
            $table->string('pimt_con_cs_targ_2021_phyprogress')->nullable();
            $table->string('pimt_con_cs_actu_2017_phyprogress')->nullable();
            $table->string('pimt_con_cs_actu_2018_phyprogress')->nullable();
            $table->string('pimt_con_cs_actu_2019_phyprogress')->nullable();
            $table->string('pimt_con_cs_actu_2020_phyprogress')->nullable();
            $table->string('pimt_con_cs_actu_2021_phyprogress')->nullable();
            $table->string('pimt_con_cs_2017_disprogress')->nullable();
            $table->string('pimt_con_cs_2018_disprogress')->nullable();
            $table->string('pimt_con_cs_2019_disprogress')->nullable();
            $table->string('pimt_con_cs_2020_disprogress')->nullable();
            $table->string('pimt_con_cs_2021_disprogress')->nullable();
            $table->string('pimt_con_cs_startdate')->nullable();
            $table->string('pimt_con_cs_originalend')->nullable();
            $table->string('pimt_con_cs_ate')->nullable();
            $table->string('pimt_con_cs_actualend')->nullable();
            $table->string('pimt_om_targ_2017_phyprogress')->nullable();
            $table->string('pimt_om_targ_2018_phyprogress')->nullable();
            $table->string('pimt_om_targ_2019_phyprogress')->nullable();
            $table->string('pimt_om_targ_2020_phyprogress')->nullable();
            $table->string('pimt_om_targ_2021_phyprogress')->nullable();
            $table->string('pimt_om_actu_2017_phyprogress')->nullable();
            $table->string('pimt_om_actu_2018_phyprogress')->nullable();
            $table->string('pimt_om_actu_2019_phyprogress')->nullable();
            $table->string('pimt_om_actu_2020_phyprogress')->nullable();
            $table->string('pimt_om_actu_2021_phyprogress')->nullable();
            $table->string('pimt_om_2017_disprogress')->nullable();
            $table->string('pimt_om_2018_disprogress')->nullable();
            $table->string('pimt_om_2019_disprogress')->nullable();
            $table->string('pimt_om_2020_disprogress')->nullable();
            $table->string('pimt_om_2021_disprogress')->nullable();
            $table->string('pimt_om_startdate')->nullable();
            $table->string('pimt_om_originalend')->nullable();
            $table->string('pimt_om_ate')->nullable();
            $table->string('pimt_om_actualend')->nullable();
            $table->string('pimt_dnb_targ_2017_phyprogress')->nullable();
            $table->string('pimt_dnb_targ_2018_phyprogress')->nullable();
            $table->string('pimt_dnb_targ_2019_phyprogress')->nullable();
            $table->string('pimt_dnb_targ_2020_phyprogress')->nullable();
            $table->string('pimt_dnb_targ_2021_phyprogress')->nullable();
            $table->string('pimt_dnb_actu_2017_phyprogress')->nullable();
            $table->string('pimt_dnb_actu_2018_phyprogress')->nullable();
            $table->string('pimt_dnb_actu_2019_phyprogress')->nullable();
            $table->string('pimt_dnb_actu_2020_phyprogress')->nullable();
            $table->string('pimt_dnb_actu_2021_phyprogress')->nullable();
            $table->string('pimt_dnb_2017_disprogress')->nullable();
            $table->string('pimt_dnb_2018_disprogress')->nullable();
            $table->string('pimt_dnb_2019_disprogress')->nullable();
            $table->string('pimt_dnb_2020_disprogress')->nullable();
            $table->string('pimt_dnb_2021_disprogress')->nullable();
            $table->string('pimt_dnb_startdate')->nullable();
            $table->string('pimt_dnb_originalend')->nullable();
            $table->string('pimt_dnb_ate')->nullable();
            $table->string('pimt_dnb_actualend')->nullable();
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
        Schema::dropIfExists('project_implementation_twos');
    }
};
