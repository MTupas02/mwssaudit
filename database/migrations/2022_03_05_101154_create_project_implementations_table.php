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
        Schema::create('project_implementations', function (Blueprint $table) {
            $table->id();
            $table->string('user_id_update')->nullable();
            $table->string('pimo_project_id')->nullable();
            $table->string('pimo_fs_targ_2017_phyprogress')->nullable();
            $table->string('pimo_fs_targ_2018_phyprogress')->nullable();
            $table->string('pimo_fs_targ_2019_phyprogress')->nullable();
            $table->string('pimo_fs_targ_2020_phyprogress')->nullable();
            $table->string('pimo_fs_targ_2021_phyprogress')->nullable();
            $table->string('pimo_fs_actu_2017_phyprogress')->nullable();
            $table->string('pimo_fs_actu_2018_phyprogress')->nullable();
            $table->string('pimo_fs_actu_2019_phyprogress')->nullable();
            $table->string('pimo_fs_actu_2020_phyprogress')->nullable();
            $table->string('pimo_fs_actu_2021_phyprogress')->nullable();
            $table->string('pimo_fs_2017_disprogress')->nullable();
            $table->string('pimo_fs_2018_disprogress')->nullable();
            $table->string('pimo_fs_2019_disprogress')->nullable();
            $table->string('pimo_fs_2020_disprogress')->nullable();
            $table->string('pimo_fs_2021_disprogress')->nullable();
            $table->string('pimo_fs_startdate')->nullable();
            $table->string('pimo_fs_originalend')->nullable();
            $table->string('pimo_fs_ate')->nullable();
            $table->string('pimo_fs_actualend')->nullable();
            $table->string('pimo_bc_targ_2017_phyprogress')->nullable();
            $table->string('pimo_bc_targ_2018_phyprogress')->nullable();
            $table->string('pimo_bc_targ_2019_phyprogress')->nullable();
            $table->string('pimo_bc_targ_2020_phyprogress')->nullable();
            $table->string('pimo_bc_targ_2021_phyprogress')->nullable();
            $table->string('pimo_bc_actu_2017_phyprogress')->nullable();
            $table->string('pimo_bc_actu_2018_phyprogress')->nullable();
            $table->string('pimo_bc_actu_2019_phyprogress')->nullable();
            $table->string('pimo_bc_actu_2020_phyprogress')->nullable();
            $table->string('pimo_bc_actu_2021_phyprogress')->nullable();
            $table->string('pimo_bc_2017_disprogress')->nullable();
            $table->string('pimo_bc_2018_disprogress')->nullable();
            $table->string('pimo_bc_2019_disprogress')->nullable();
            $table->string('pimo_bc_2020_disprogress')->nullable();
            $table->string('pimo_bc_2021_disprogress')->nullable();
            $table->string('pimo_bc_startdate')->nullable();
            $table->string('pimo_bc_originalend')->nullable();
            $table->string('pimo_bc_ate')->nullable();
            $table->string('pimo_bc_actualend')->nullable();
            $table->string('pimo_ded_targ_2017_phyprogress')->nullable();
            $table->string('pimo_ded_targ_2018_phyprogress')->nullable();
            $table->string('pimo_ded_targ_2019_phyprogress')->nullable();
            $table->string('pimo_ded_targ_2020_phyprogress')->nullable();
            $table->string('pimo_ded_targ_2021_phyprogress')->nullable();
            $table->string('pimo_ded_actu_2017_phyprogress')->nullable();
            $table->string('pimo_ded_actu_2018_phyprogress')->nullable();
            $table->string('pimo_ded_actu_2019_phyprogress')->nullable();
            $table->string('pimo_ded_actu_2020_phyprogress')->nullable();
            $table->string('pimo_ded_actu_2021_phyprogress')->nullable();
            $table->string('pimo_ded_2017_disprogress')->nullable();
            $table->string('pimo_ded_2018_disprogress')->nullable();
            $table->string('pimo_ded_2019_disprogress')->nullable();
            $table->string('pimo_ded_2020_disprogress')->nullable();
            $table->string('pimo_ded_2021_disprogress')->nullable();
            $table->string('pimo_ded_startdate')->nullable();
            $table->string('pimo_ded_originalend')->nullable();
            $table->string('pimo_ded_ate')->nullable();
            $table->string('pimo_ded_actualend')->nullable();
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
        Schema::dropIfExists('project_implementations');
    }
};