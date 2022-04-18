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
        Schema::create('audit_tests', function (Blueprint $table) {
            $table->id();
            $table->string('user_id_update')->nullable();
            $table->string('audit_project_id')->nullable();
            $table->string('audit_status')->nullable();
            $table->string('audit_relevance_to_service')->nullable();
            $table->string('audit_res_relevance_to_service')->nullable();
            $table->string('audit_adequate_planning')->nullable();
            $table->string('audit_res_adequate_planning')->nullable();
            $table->string('audit_risk_mitigation')->nullable();
            $table->string('audit_res_risk_mitigation')->nullable();
            $table->string('audit_procurement_process')->nullable();
            $table->string('audit_res_procurement_process')->nullable();
            $table->string('audit_cost_benchmark')->nullable();
            $table->string('audit_res_cost_benchmark')->nullable();
            $table->string('audit_timeliness')->nullable();
            $table->string('audit_timelinessb')->nullable();
            $table->string('audit_res_timeliness')->nullable();
            $table->string('audit_safety')->nullable();
            $table->string('audit_safetyb')->nullable();
            $table->string('audit_safetyc')->nullable();
            $table->string('audit_res_safety')->nullable();
            $table->string('audit_quality_control')->nullable();
            $table->string('audit_quality_controlb')->nullable();
            $table->string('audit_quality_controlc')->nullable();
            $table->string('audit_res_quality_control')->nullable();
            $table->string('audit_specifications')->nullable();
            $table->string('audit_specificationsb')->nullable();
            $table->string('audit_specificationsc')->nullable();
            $table->string('audit_res_specifications')->nullable();
            $table->string('audit_final_cost')->nullable();
            $table->string('audit_final_costb')->nullable();
            $table->string('audit_res_final_cost')->nullable();
            $table->string('audit_utilization')->nullable();
            $table->string('audit_res_utilization')->nullable();
            $table->string('audit_usefulness')->nullable();
            $table->string('audit_res_usefulness')->nullable();
            $table->string('audit_pru_total_rating')->nullable();
            $table->string('audit_total_rating')->nullable();
            $table->string('audit_note')->nullable();
            $table->string('audit_remarks')->nullable();
            $table->binary('audit_attachment')->nullable();
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
        Schema::dropIfExists('audit_tests');
    }
};
