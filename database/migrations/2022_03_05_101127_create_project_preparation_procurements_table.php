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
        Schema::create('project_preparation_procurements', function (Blueprint $table) {
            $table->id();
            $table->string('user_id_update')->nullable();
            $table->string('ppp_project_id')->nullable();
            $table->string('ppp_approved_budget_contract')->nullable();
            $table->string('ppp_contract_type')->nullable();
            $table->string('ppp_contract_type_others')->nullable();
            $table->string('ppp_mode_of_procurement')->nullable();
            $table->string('ppp_fs_awarded_contract')->nullable();
            $table->string('ppp_fs_revised_contract')->nullable();
            $table->string('ppp_bc_awarded_contract')->nullable();
            $table->string('ppp_bc_revised_contract')->nullable();
            $table->string('ppp_ded_awarded_contract')->nullable();
            $table->string('ppp_ded_revised_contract')->nullable();
            $table->string('ppp_con_cs_awarded_contract')->nullable();
            $table->string('ppp_con_cs_revised_contract')->nullable();
            $table->string('ppp_om_awarded_contract')->nullable();
            $table->string('ppp_om_revised_contract')->nullable();
            $table->string('ppp_dnb_awarded_contract')->nullable();
            $table->string('ppp_dnb_revised_contract')->nullable();
            $table->string('ppp_dbo_awarded_contract')->nullable();
            $table->string('ppp_dbo_revised_contract')->nullable();
            $table->string('ppp_others_awarded_contract')->nullable();
            $table->string('ppp_others_revised_contract')->nullable();
            $table->string('ppp_procurement_threshold')->nullable();
            $table->string('ppp_procure_docs')->nullable();
            $table->string('ppp_risk_assessment')->nullable();
            $table->string('ppp_remarks')->nullable();
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
        Schema::dropIfExists('project_preparation_procurements');
    }
};
