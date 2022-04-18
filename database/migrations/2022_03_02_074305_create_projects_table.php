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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('user_id_update')->nullable();
            $table->string('pin_name_of_project')->nullable();
            $table->string('pin_contract_number')->nullable();
            $table->string('pin_project_origin')->nullable();
            $table->string('pin_project_code')->nullable();
            $table->string('pin_name_of_concessionaire')->nullable();
            $table->string('pin_concession_zone')->nullable();
            $table->string('pin_name_of_lgu')->nullable();
            $table->string('pin_name_of_brgy_street')->nullable();
            $table->string('pin_lati_geographical_coordinates')->nullable();
            $table->string('pin_long_geographical_coordinates')->nullable();
            $table->string('pin_capex_classification')->nullable();
            $table->string('pin_capex_subclass')->nullable();
            $table->string('pin_project_more_than')->nullable();
            $table->string('pin_project_year')->nullable();
            $table->string('pin_project_size')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
