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
        Schema::create('operations_monitoring_administrations', function (Blueprint $table) {
            $table->id();
            $table->string('user_id_update')->nullable();
            $table->string('oma_project_id')->nullable();
            $table->string('oma_in_place_features')->nullable();
            $table->string('oma_major_hazard')->nullable();
            $table->string('oma_major_loss_life_reported')->nullable();
            $table->string('oma_major_accident_reported')->nullable();
            $table->string('oma_major_damage_prop_reported')->nullable();
            $table->string('oma_minor_hazard')->nullable();
            $table->string('oma_minor_accident_reported')->nullable();
            $table->string('oma_minor_damage_reported')->nullable();
            $table->string('oma_incentives')->nullable();
            $table->string('oma_disincentives')->nullable();
            $table->string('oma_cost_incurred')->nullable();
            $table->string('oma_utilization')->nullable();
            $table->string('oma_salwag_2017_opex')->nullable();
            $table->string('oma_salwag_2018_opex')->nullable();
            $table->string('oma_salwag_2019_opex')->nullable();
            $table->string('oma_salwag_2020_opex')->nullable();
            $table->string('oma_salwag_2021_opex')->nullable();
            $table->string('oma_powlight_2017_opex')->nullable();
            $table->string('oma_powlight_2018_opex')->nullable();
            $table->string('oma_powlight_2019_opex')->nullable();
            $table->string('oma_powlight_2020_opex')->nullable();
            $table->string('oma_powlight_2021_opex')->nullable();
            $table->string('oma_repmain_2017_opex')->nullable();
            $table->string('oma_repmain_2018_opex')->nullable();
            $table->string('oma_repmain_2019_opex')->nullable();
            $table->string('oma_repmain_2020_opex')->nullable();
            $table->string('oma_repmain_2021_opex')->nullable();
            $table->string('oma_conservice_2017_opex')->nullable();
            $table->string('oma_conservice_2018_opex')->nullable();
            $table->string('oma_conservice_2019_opex')->nullable();
            $table->string('oma_conservice_2020_opex')->nullable();
            $table->string('oma_conservice_2021_opex')->nullable();
            $table->string('oma_treatcost_2017_opex')->nullable();
            $table->string('oma_treatcost_2018_opex')->nullable();
            $table->string('oma_treatcost_2019_opex')->nullable();
            $table->string('oma_treatcost_2020_opex')->nullable();
            $table->string('oma_treatcost_2021_opex')->nullable();
            $table->string('oma_concharge_2017_opex')->nullable();
            $table->string('oma_concharge_2018_opex')->nullable();
            $table->string('oma_concharge_2019_opex')->nullable();
            $table->string('oma_concharge_2020_opex')->nullable();
            $table->string('oma_concharge_2021_opex')->nullable();
            $table->string('oma_regcost_2017_opex')->nullable();
            $table->string('oma_regcost_2018_opex')->nullable();
            $table->string('oma_regcost_2019_opex')->nullable();
            $table->string('oma_regcost_2020_opex')->nullable();
            $table->string('oma_regcost_2021_opex')->nullable();
            $table->string('oma_others_2017_opex')->nullable();
            $table->string('oma_others_2018_opex')->nullable();
            $table->string('oma_others_2019_opex')->nullable();
            $table->string('oma_others_2020_opex')->nullable();
            $table->string('oma_others_2021_opex')->nullable();
            $table->string('arm_audit_obeservation_highlights')->nullable();
            $table->string('arm_audit_response')->nullable();
            $table->string('arm_attachment')->nullable();
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
        Schema::dropIfExists('operations_monitoring_administrations');
    }
};
