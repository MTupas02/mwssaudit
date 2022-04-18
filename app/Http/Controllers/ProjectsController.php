<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\OperationsMonitoringAdministration;
use App\Models\ProjectImplementation;
use App\Models\ProjectImplementationTwo;
use App\Models\ProjectImplementationsThree;
use App\Models\ProjectPreparationProcurement;
use App\Models\AuditTest;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use Gate;
use Carbon\Carbon;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $rules = array(
            // 'file' => 'required',
            // 'file.*' => 'mimes:jpeg,png,jpg,gif,svg,doc,docx,xls,xlsx,ppt,pptx,csv,pdf|required',
            // 'related_image' => 'required',
            // 'related_image.*' => 'mimes:jpeg,png,jpg,gif,svg,doc,docx,xls,xlsx,ppt,pptx,csv,pdf|required',
            // "project_code" => "required",
            // "borehole_id" => "required",
            // "phase_of_the_study" => "required",
            // "field_investigation" => "required",
            // "type_of_structure" => "required"
        );

        if(request()->hasFile('file')){
            $files = request()->file('file');
            $paths = [];
            foreach ($files as $file) {
                $filenameWithExt = $file->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                $paths[] = $file->storeAs('public/images', $fileNameToStore);
                $fileName[] = $filename.'_'.time().'.'.$extension;
            }
        }

        $error = Validator::make($request->all(), $rules);

        if($error->fails()){
            return response()->json(['errors' => $error->errors()->all()]);
        }
        //PROJECT INFORMATION
        $projects = new Projects();
        $projects->pin_name_of_project = $request->name_of_project;
        $projects->pin_contract_number = $request->contract_number;
        $projects->pin_project_origin = $request->project_origin;
        $projects->pin_project_code = $request->project_code;
        $projects->pin_name_of_concessionaire = $request->name_of_concessionaire;
        $projects->pin_concession_zone = $request->concession_zone;
        $projects->pin_name_of_lgu = $request->name_of_lgu;
        $projects->pin_name_of_brgy_street = $request->name_of_brgy_street;
        $projects->pin_lati_geographical_coordinates = $request->latitude;
        $projects->pin_long_geographical_coordinates = $request->longitude;
        $projects->pin_capex_classification = $request->capex_classification;
        $projects->pin_capex_subclass = $request->capex_subclass;
        $projects->pin_project_more_than = $request->project_million;
        $projects->pin_project_year = $request->project_year;
        $projects->pin_project_size = $request->project_size;
        $projects->save();

        //PROJECT PREPARATION & PROCUREMENT
        $projprep = new ProjectPreparationProcurement();
        $projprep->ppp_project_id = $projects->id;
        $projprep->ppp_approved_budget_contract = $request->approved_budget_contract;
        $projprep->ppp_contract_type = $request->contract_type;
        $projprep->ppp_contract_type_others = $request->other_contract;
        $projprep->ppp_mode_of_procurement = $request->mode_of_procurement;
        $projprep->ppp_fs_awarded_contract = $request->fs_awarded_contract;
        $projprep->ppp_fs_revised_contract = $request->fs_revised_contract;
        $projprep->ppp_bc_awarded_contract = $request->bc_awarded_contract;
        $projprep->ppp_bc_revised_contract = $request->bc_revised_contract;
        $projprep->ppp_ded_awarded_contract = $request->ded_awarded_contract;
        $projprep->ppp_ded_revised_contract = $request->ded_revised_contract;
        $projprep->ppp_con_cs_awarded_contract = $request->con_cs_awarded_contract;
        $projprep->ppp_con_cs_revised_contract = $request->con_cs_revised_contract;
        $projprep->ppp_om_awarded_contract = $request->om_awarded_contract;
        $projprep->ppp_om_revised_contract = $request->om_revised_contract;
        $projprep->ppp_dnb_awarded_contract = $request->dnb_awarded_contract;
        $projprep->ppp_dnb_revised_contract = $request->dnb_revised_contract;
        $projprep->ppp_dbo_awarded_contract = $request->dbo_awarded;
        $projprep->ppp_dbo_revised_contract = $request->dbo_revised_contract;
        $projprep->ppp_others_awarded_contract = $request->others_awarded_contract;
        $projprep->ppp_others_revised_contract = $request->others_revised_contract;
        $projprep->ppp_procurement_threshold = $request->procurement_threshold;
        $projprep->ppp_procure_docs = $request->procurement_documents;
        $projprep->ppp_risk_assessment = $request->risk_assessment;
        $projprep->ppp_remarks = $request->remarks;
        $projprep->save();

        //PROJECT IMPLEMENTATION ONE
        $projimpo = new ProjectImplementation();
        $projimpo->pimo_project_id = $projects->id;
        $projimpo->pimo_fs_targ_2017_phyprogress = $request->fs_2017_targ_phyprogress;
        $projimpo->pimo_fs_targ_2018_phyprogress = $request->fs_2018_targ_phyprogress;
        $projimpo->pimo_fs_targ_2019_phyprogress = $request->fs_2019_targ_phyprogress;
        $projimpo->pimo_fs_targ_2020_phyprogress = $request->fs_2020_targ_phyprogress;
        $projimpo->pimo_fs_targ_2021_phyprogress = $request->fs_2021_targ_phyprogress;
        $projimpo->pimo_fs_actu_2017_phyprogress = $request->fs_2017_actu_phyprogress;
        $projimpo->pimo_fs_actu_2018_phyprogress = $request->fs_2018_actu_phyprogress;
        $projimpo->pimo_fs_actu_2019_phyprogress = $request->fs_2019_actu_phyprogress;
        $projimpo->pimo_fs_actu_2020_phyprogress = $request->fs_2020_actu_phyprogress;
        $projimpo->pimo_fs_actu_2021_phyprogress = $request->fs_2021_actu_phyprogress;
        $projimpo->pimo_fs_2017_disprogress = $request->fs_2017_disprogress;
        $projimpo->pimo_fs_2018_disprogress = $request->fs_2018_disprogress;
        $projimpo->pimo_fs_2019_disprogress = $request->fs_2019_disprogress;
        $projimpo->pimo_fs_2020_disprogress = $request->fs_2020_disprogress;
        $projimpo->pimo_fs_2021_disprogress = $request->fs_2021_disprogress;
        $projimpo->pimo_fs_startdate = $request->fs_startdate;
        $projimpo->pimo_fs_originalend = $request->fs_originalend;
        $projimpo->pimo_fs_ate = $request->fs_ate;
        $projimpo->pimo_fs_actualend = $request->fs_actualend;
        $projimpo->pimo_bc_targ_2017_phyprogress = $request->bc_2017_targ_phyprogress;
        $projimpo->pimo_bc_targ_2018_phyprogress = $request->bc_2018_targ_phyprogress;
        $projimpo->pimo_bc_targ_2019_phyprogress = $request->bc_2019_targ_phyprogress;
        $projimpo->pimo_bc_targ_2020_phyprogress = $request->bc_2020_targ_phyprogress;
        $projimpo->pimo_bc_targ_2021_phyprogress = $request->bc_2021_targ_phyprogress;
        $projimpo->pimo_bc_actu_2017_phyprogress = $request->bc_2017_actu_phyprogress;
        $projimpo->pimo_bc_actu_2018_phyprogress = $request->bc_2018_actu_phyprogress;
        $projimpo->pimo_bc_actu_2019_phyprogress = $request->bc_2019_actu_phyprogress;
        $projimpo->pimo_bc_actu_2020_phyprogress = $request->bc_2020_actu_phyprogress;
        $projimpo->pimo_bc_actu_2021_phyprogress = $request->bc_2021_actu_phyprogress;
        $projimpo->pimo_bc_2017_disprogress = $request->bc_2017_disprogress;
        $projimpo->pimo_bc_2018_disprogress = $request->bc_2018_disprogress;
        $projimpo->pimo_bc_2019_disprogress = $request->bc_2019_disprogress;
        $projimpo->pimo_bc_2020_disprogress = $request->bc_2020_disprogress;
        $projimpo->pimo_bc_2021_disprogress = $request->bc_2021_disprogress;
        $projimpo->pimo_bc_startdate = $request->bc_startdate;
        $projimpo->pimo_bc_originalend = $request->bc_originalend;
        $projimpo->pimo_bc_ate = $request->bc_ate;
        $projimpo->pimo_bc_actualend = $request->bc_actualend;
        $projimpo->pimo_ded_targ_2017_phyprogress = $request->ded_2017_targ_phyprogress;
        $projimpo->pimo_ded_targ_2018_phyprogress = $request->ded_2018_targ_phyprogress;
        $projimpo->pimo_ded_targ_2019_phyprogress = $request->ded_2019_targ_phyprogress;
        $projimpo->pimo_ded_targ_2020_phyprogress = $request->ded_2020_targ_phyprogress;
        $projimpo->pimo_ded_targ_2021_phyprogress = $request->ded_2021_targ_phyprogress;
        $projimpo->pimo_ded_actu_2017_phyprogress = $request->ded_2017_actu_phyprogress;
        $projimpo->pimo_ded_actu_2018_phyprogress = $request->ded_2018_actu_phyprogress;
        $projimpo->pimo_ded_actu_2019_phyprogress = $request->ded_2019_actu_phyprogress;
        $projimpo->pimo_ded_actu_2020_phyprogress = $request->ded_2020_actu_phyprogress;
        $projimpo->pimo_ded_actu_2021_phyprogress = $request->ded_2021_actu_phyprogress;
        $projimpo->pimo_ded_2017_disprogress = $request->ded_2017_disprogress;
        $projimpo->pimo_ded_2018_disprogress = $request->ded_2018_disprogress;
        $projimpo->pimo_ded_2019_disprogress = $request->ded_2019_disprogress;
        $projimpo->pimo_ded_2020_disprogress = $request->ded_2020_disprogress;
        $projimpo->pimo_ded_2021_disprogress = $request->ded_2021_disprogress;
        $projimpo->pimo_ded_startdate = $request->ded_startdate;
        $projimpo->pimo_ded_originalend = $request->ded_originalend;
        $projimpo->pimo_ded_ate = $request->ded_ate;
        $projimpo->pimo_ded_actualend = $request->ded_actualend;
        $projimpo->save();


        //PROJECT IMPLEMENTATION TWO
        $projimpt = new ProjectImplementationTwo();
        $projimpt->pimt_project_id = $projects->id;
        $projimpt->pimt_con_cs_targ_2017_phyprogress = $request->con_cs_2017_targ_phyprogress;
        $projimpt->pimt_con_cs_targ_2018_phyprogress = $request->con_cs_2018_targ_phyprogress;
        $projimpt->pimt_con_cs_targ_2019_phyprogress = $request->con_cs_2019_targ_phyprogress;
        $projimpt->pimt_con_cs_targ_2020_phyprogress = $request->con_cs_2020_targ_phyprogress;
        $projimpt->pimt_con_cs_targ_2021_phyprogress = $request->con_cs_2021_targ_phyprogress;
        $projimpt->pimt_con_cs_actu_2017_phyprogress = $request->con_cs_2017_actu_phyprogress;
        $projimpt->pimt_con_cs_actu_2018_phyprogress = $request->con_cs_2018_actu_phyprogress;
        $projimpt->pimt_con_cs_actu_2019_phyprogress = $request->con_cs_2019_actu_phyprogress;
        $projimpt->pimt_con_cs_actu_2020_phyprogress = $request->con_cs_2020_actu_phyprogress;
        $projimpt->pimt_con_cs_actu_2021_phyprogress = $request->con_cs_2021_actu_phyprogress;
        $projimpt->pimt_con_cs_2017_disprogress = $request->con_cs_2017_disprogress;
        $projimpt->pimt_con_cs_2018_disprogress = $request->con_cs_2018_disprogress;
        $projimpt->pimt_con_cs_2019_disprogress = $request->con_cs_2019_disprogress;
        $projimpt->pimt_con_cs_2020_disprogress = $request->con_cs_2020_disprogress;
        $projimpt->pimt_con_cs_2021_disprogress = $request->con_cs_2021_disprogress;
        $projimpt->pimt_con_cs_startdate = $request->con_cs_startdate;
        $projimpt->pimt_con_cs_originalend = $request->con_cs_originalend;
        $projimpt->pimt_con_cs_ate = $request->con_cs_ate;
        $projimpt->pimt_con_cs_actualend = $request->con_cs_actualend;
        $projimpt->pimt_om_targ_2017_phyprogress = $request->om_2017_targ_phyprogress;
        $projimpt->pimt_om_targ_2018_phyprogress = $request->om_2018_targ_phyprogress;
        $projimpt->pimt_om_targ_2019_phyprogress = $request->om_2019_targ_phyprogress;
        $projimpt->pimt_om_targ_2020_phyprogress = $request->om_2020_targ_phyprogress;
        $projimpt->pimt_om_targ_2021_phyprogress = $request->om_2021_targ_phyprogress;
        $projimpt->pimt_om_actu_2017_phyprogress = $request->om_2017_actu_phyprogress;
        $projimpt->pimt_om_actu_2018_phyprogress = $request->om_2018_actu_phyprogress;
        $projimpt->pimt_om_actu_2019_phyprogress = $request->om_2019_actu_phyprogress;
        $projimpt->pimt_om_actu_2020_phyprogress = $request->om_2020_actu_phyprogress;
        $projimpt->pimt_om_actu_2021_phyprogress = $request->om_2021_actu_phyprogress;
        $projimpt->pimt_om_2017_disprogress = $request->om_2017_disprogress;
        $projimpt->pimt_om_2018_disprogress = $request->om_2018_disprogress;
        $projimpt->pimt_om_2019_disprogress = $request->om_2019_disprogress;
        $projimpt->pimt_om_2020_disprogress = $request->om_2020_disprogress;
        $projimpt->pimt_om_2021_disprogress = $request->om_2021_disprogress;
        $projimpt->pimt_om_startdate = $request->om_startdate;
        $projimpt->pimt_om_originalend = $request->om_originalend;
        $projimpt->pimt_om_ate = $request->om_ate;
        $projimpt->pimt_om_actualend = $request->om_actualend;
        $projimpt->pimt_dnb_targ_2017_phyprogress = $request->dnb_2017_targ_phyprogress;
        $projimpt->pimt_dnb_targ_2018_phyprogress = $request->dnb_2018_targ_phyprogress;
        $projimpt->pimt_dnb_targ_2019_phyprogress = $request->dnb_2019_targ_phyprogress;
        $projimpt->pimt_dnb_targ_2020_phyprogress = $request->dnb_2020_targ_phyprogress;
        $projimpt->pimt_dnb_targ_2021_phyprogress = $request->dnb_2021_targ_phyprogress;
        $projimpt->pimt_dnb_actu_2017_phyprogress = $request->dnb_2017_actu_phyprogress;
        $projimpt->pimt_dnb_actu_2018_phyprogress = $request->dnb_2018_actu_phyprogress;
        $projimpt->pimt_dnb_actu_2019_phyprogress = $request->dnb_2019_actu_phyprogress;
        $projimpt->pimt_dnb_actu_2020_phyprogress = $request->dnb_2020_actu_phyprogress;
        $projimpt->pimt_dnb_actu_2021_phyprogress = $request->dnb_2021_actu_phyprogress;
        $projimpt->pimt_dnb_2017_disprogress = $request->dnb_2017_disprogress;
        $projimpt->pimt_dnb_2018_disprogress = $request->dnb_2018_disprogress;
        $projimpt->pimt_dnb_2019_disprogress = $request->dnb_2019_disprogress;
        $projimpt->pimt_dnb_2020_disprogress = $request->dnb_2020_disprogress;
        $projimpt->pimt_dnb_2021_disprogress = $request->dnb_2021_disprogress;
        $projimpt->pimt_dnb_startdate = $request->dnb_startdate;
        $projimpt->pimt_dnb_originalend = $request->dnb_originalend;
        $projimpt->pimt_dnb_ate = $request->dnb_ate;
        $projimpt->pimt_dnb_actualend = $request->dnb_actualend;
        $projimpt->save();

        $projimpr = new ProjectImplementationsThree();
        $projimpr->pimr_project_id = $projects->id;
        $projimpr->pimr_dbo_targ_2017_phyprogress = $request->dbo_2017_targ_phyprogress;
        $projimpr->pimr_dbo_targ_2018_phyprogress = $request->dbo_2018_targ_phyprogress;
        $projimpr->pimr_dbo_targ_2019_phyprogress = $request->dbo_2019_targ_phyprogress;
        $projimpr->pimr_dbo_targ_2020_phyprogress = $request->dbo_2020_targ_phyprogress;
        $projimpr->pimr_dbo_targ_2021_phyprogress = $request->dbo_2021_targ_phyprogress;
        $projimpr->pimr_dbo_actu_2017_phyprogress = $request->dbo_2017_actu_phyprogress;
        $projimpr->pimr_dbo_actu_2018_phyprogress = $request->dbo_2018_actu_phyprogress;
        $projimpr->pimr_dbo_actu_2019_phyprogress = $request->dbo_2019_actu_phyprogress;
        $projimpr->pimr_dbo_actu_2020_phyprogress = $request->dbo_2020_actu_phyprogress;
        $projimpr->pimr_dbo_actu_2021_phyprogress = $request->dbo_2021_actu_phyprogress;
        $projimpr->pimr_dbo_2017_disprogress = $request->dbo_2017_disprogress;
        $projimpr->pimr_dbo_2018_disprogress = $request->dbo_2018_disprogress;
        $projimpr->pimr_dbo_2019_disprogress = $request->dbo_2019_disprogress;
        $projimpr->pimr_dbo_2020_disprogress = $request->dbo_2020_disprogress;
        $projimpr->pimr_dbo_2021_disprogress = $request->dbo_2021_disprogress;
        $projimpr->pimr_dbo_startdate = $request->dbo_startdate;
        $projimpr->pimr_dbo_originalend = $request->dbo_originalend;
        $projimpr->pimr_dbo_ate = $request->dbo_ate;
        $projimpr->pimr_dbo_actualend = $request->dbo_actualend;
        $projimpr->pimr_others_targ_2017_phyprogress = $request->others_2017_targ_phyprogress;
        $projimpr->pimr_others_targ_2018_phyprogress = $request->others_2018_targ_phyprogress;
        $projimpr->pimr_others_targ_2019_phyprogress = $request->others_2019_targ_phyprogress;
        $projimpr->pimr_others_targ_2020_phyprogress = $request->others_2020_targ_phyprogress;
        $projimpr->pimr_others_targ_2021_phyprogress = $request->others_2021_targ_phyprogress;
        $projimpr->pimr_others_actu_2017_phyprogress = $request->others_2017_actu_phyprogress;
        $projimpr->pimr_others_actu_2018_phyprogress = $request->others_2018_actu_phyprogress;
        $projimpr->pimr_others_actu_2019_phyprogress = $request->others_2019_actu_phyprogress;
        $projimpr->pimr_others_actu_2020_phyprogress = $request->others_2020_actu_phyprogress;
        $projimpr->pimr_others_actu_2021_phyprogress = $request->others_2021_actu_phyprogress;
        $projimpr->pimr_others_2017_disprogress = $request->others_2017_disprogress;
        $projimpr->pimr_others_2018_disprogress = $request->others_2018_disprogress;
        $projimpr->pimr_others_2019_disprogress = $request->others_2019_disprogress;
        $projimpr->pimr_others_2020_disprogress = $request->others_2020_disprogress;
        $projimpr->pimr_others_2021_disprogress = $request->others_2021_disprogress;
        $projimpr->pimr_others_startdate = $request->others_startdate;
        $projimpr->pimr_others_originalend = $request->others_originalend;
        $projimpr->pimr_others_ate = $request->others_ate;
        $projimpr->pimr_others_actualend = $request->others_actualend;
        $projimpr->pimr_current_project_status = $request->current_project_status;
        $projimpr->pimr_test_to_perform = $request->test_to_perform;
        $projimpr->pimr_other_test_to_perform = $request->other_test_perform; //SLIPPAGE PERCENTAGE
        $projimpr->pimr_days_suspended = $request->days_suspended;
        $projimpr->pimr_audit_coverage = $request->audit_coverage;
        $projimpr->pimr_cause_of_delay = implode(',' , $request->cause_of_delay);
        $projimpr->pimr_cause_of_delay_others = $request->other_cause;
        $projimpr->pimr_cost_analysis = $request->cost_analysis;
        $projimpr->pimr_variation_ref_num = $request->variation_ref_no;
        $projimpr->pimr_variation_desc = $request->variation_description;
        $projimpr->pimr_variation_cost = $request->variation_cost;
        $projimpr->pimr_approved_date = $request->variation_approved_date;
        $projimpr->save();

        //AUDIT TEST
        $projaudt = new AuditTest();
        $projaudt->audit_project_id = $projects->id;       
        $projaudt->audit_relevance_to_service = $request->relevance_obligation;
        $projaudt->audit_res_relevance_to_service = $request->results_relevance;
        $projaudt->audit_adequate_planning = $request->adequate_planning;
        $projaudt->audit_res_adequate_planning = $request->results_adequate;
        $projaudt->audit_risk_mitigation = $request->risk_assessment_mitigation;
        $projaudt->audit_res_risk_mitigation = $request->results_risk;
        $projaudt->audit_procurement_process = $request->cost_within_benchmark_procurement;
        $projaudt->audit_cost_benchmark = $request->cost_within_benchmark;
        $projaudt->audit_res_cost_benchmark = $request->results_cost;
        $projaudt->audit_utilization = $request->effective_utilization;
        $projaudt->audit_res_utilization = $request->results_effect;
        $projaudt->audit_timeliness = $request->timeliness;
        $projaudt->audit_timelinessb = $request->timelinessb;
        $projaudt->audit_res_timeliness = $request->results_timeliness;
        $projaudt->audit_safety = $request->safety;
        $projaudt->audit_safetyb = $request->safetyb;
        $projaudt->audit_safetyc = $request->safetyc;
        $projaudt->audit_res_safety = $request->results_safety;
        // $projaudt->audit_specifications = $request->specifications;
        $projaudt->audit_quality_control = $request->quality_control;
        $projaudt->audit_quality_controlb = $request->quality_controlb;
        $projaudt->audit_quality_controlc = $request->quality_controlc;
        $projaudt->audit_res_quality_control = $request->results_quality;
        $projaudt->audit_specifications = $request->specifications;
        $projaudt->audit_specificationsb = $request->specificationsb;
        $projaudt->audit_specificationsc = $request->specificationsc;
        $projaudt->audit_res_specifications = $request->results_specifications;
        $projaudt->audit_final_cost = $request->final_costs;
        $projaudt->audit_final_costb = $request->final_costsb;
        $projaudt->audit_res_final_cost = $request->results_final_costs;
        $projaudt->audit_usefulness = $request->usefulness_utilization;
        $projaudt->audit_res_usefulness = $request->results_usefulness;
        $projaudt->audit_total_rating = $request->total_score;
        $projaudt->save();

        //PROJECT OPEX
        $projopex = new OperationsMonitoringAdministration();        
        $projopex->oma_project_id = $projects->id;
        $projopex->oma_in_place_features = $request->in_place_features;

        $projopex->oma_major_hazard = implode(',' , $request->major_hazard_desc);        
        $projopex->oma_major_loss_life_reported = $request->total_number_reported_loss;
        $projopex->oma_major_accident_reported = $request->total_number_reported_accident;
        $projopex->oma_major_damage_prop_reported = $request->total_number_reported_damage;
        $projopex->oma_minor_hazard = implode(',' , $request->minor_hazard_desc);
        $projopex->oma_minor_accident_reported = $request->total_number_reported_minor_acc;
        $projopex->oma_minor_damage_reported = $request->total_number_reported_minor_dam;
        // $projopex->oma_minor_damage_reported = $request->total_number_reported_minor_dam;
        $projopex->oma_incentives = $request->incentives;
        $projopex->oma_disincentives = $request->disincentives;
        $projopex->oma_utilization = $request->utilization;
        $projopex->oma_salwag_2017_opex = $request->salwag_2017_opex;
        $projopex->oma_salwag_2018_opex = $request->salwag_2018_opex;
        $projopex->oma_salwag_2019_opex = $request->salwag_2019_opex;
        $projopex->oma_salwag_2020_opex = $request->salwag_2020_opex;
        $projopex->oma_salwag_2021_opex = $request->salwag_2021_opex;
        $projopex->oma_powlight_2017_opex = $request->powlight_2017_opex;
        $projopex->oma_powlight_2018_opex = $request->powlight_2018_opex;
        $projopex->oma_powlight_2019_opex = $request->powlight_2019_opex;
        $projopex->oma_powlight_2020_opex = $request->powlight_2020_opex;
        $projopex->oma_powlight_2021_opex = $request->powlight_2021_opex;
        $projopex->oma_repmain_2017_opex = $request->repmain_2017_opex;
        $projopex->oma_repmain_2018_opex = $request->repmain_2018_opex;
        $projopex->oma_repmain_2019_opex = $request->repmain_2019_opex;
        $projopex->oma_repmain_2020_opex = $request->repmain_2020_opex;
        $projopex->oma_repmain_2021_opex = $request->repmain_2021_opex;
        $projopex->oma_conservice_2017_opex = $request->conservice_2017_opex;
        $projopex->oma_conservice_2018_opex = $request->conservice_2018_opex;
        $projopex->oma_conservice_2019_opex = $request->conservice_2019_opex;
        $projopex->oma_conservice_2020_opex = $request->conservice_2020_opex;
        $projopex->oma_conservice_2021_opex = $request->conservice_2021_opex;
        $projopex->oma_treatcost_2017_opex = $request->treatcost_2017_opex;
        $projopex->oma_treatcost_2018_opex = $request->treatcost_2018_opex;
        $projopex->oma_treatcost_2019_opex = $request->treatcost_2019_opex;
        $projopex->oma_treatcost_2020_opex = $request->treatcost_2020_opex;
        $projopex->oma_treatcost_2021_opex = $request->treatcost_2021_opex;
        $projopex->oma_concharge_2017_opex = $request->concharge_2017_opex;
        $projopex->oma_concharge_2018_opex = $request->concharge_2018_opex;
        $projopex->oma_concharge_2019_opex = $request->concharge_2019_opex;
        $projopex->oma_concharge_2020_opex = $request->concharge_2020_opex;
        $projopex->oma_concharge_2021_opex = $request->concharge_2021_opex;
        $projopex->oma_regcost_2017_opex = $request->regcost_2017_opex;
        $projopex->oma_regcost_2018_opex = $request->regcost_2018_opex;
        $projopex->oma_regcost_2019_opex = $request->regcost_2019_opex;
        $projopex->oma_regcost_2020_opex = $request->regcost_2020_opex;
        $projopex->oma_regcost_2021_opex = $request->regcost_2021_opex;
        $projopex->oma_others_2017_opex = $request->others_2017_opex;
        $projopex->oma_others_2018_opex = $request->others_2018_opex;
        $projopex->oma_others_2019_opex = $request->others_2019_opex;
        $projopex->oma_others_2020_opex = $request->others_2020_opex;
        $projopex->oma_others_2021_opex = $request->others_2021_opex;
        $projopex->arm_audit_obeservation_highlights = $request->audit_obsevation_highlights;
        $projopex->arm_audit_response = $request->audit_response;
        $projopex->arm_audit_obeservation_highlights = $request->others_2021_opex;

        if(request()->hasFile('file')){
            $projopex->arm_attachment = json_encode($fileName);
        }
        $projopex->save();

        return response()->json(['success' => "New Record Added Successfully!"]);
    }

    
    public function show($id)
    {
        $data = Projects::with('projprep', 'projimplemone', 'projimplemtwo','projimthree', 'projopex', 'audit')->findOrFail($id);
        $date = Carbon::parse($data->created_at)->format('mdY');
        if ($data->projimthree->pimr_cause_of_delay) {
            $cause_of_delay = explode(', ',$data->projimthree->pimr_cause_of_delay);
        } else {
            $cause_of_delay = '';
        }
        return view('shows.projects_show', compact('data', 'cause_of_delay'));
    }

    
    public function edit($id)
    {
        if(request()->ajax()) {
            $data = Projects::with('projprep', 'projimplemone', 'projimplemtwo','projimthree', 'projopex', 'audit')->findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }

    
    public function update(Request $request, Projects $projects)
    {

        $project_form_data = array(
            'pin_name_of_project' => $request->name_of_project,
            'pin_contract_number' => $request->contract_number,
            'pin_project_origin' => $request->project_origin,
            'pin_project_code' => $request->project_code,
            'pin_name_of_concessionaire' => $request->name_of_concessionaire,
            'pin_concession_zone' => $request->concession_zone,    
            'pin_name_of_lgu' => $request->name_of_lgu,
            'pin_name_of_brgy_street' => $request->name_of_brgy_street,
            'pin_lati_geographical_coordinates' => $request->latitude,
            'pin_long_geographical_coordinates' => $request->longitude,
            'pin_capex_classification' => $request->capex_classification,
            'pin_capex_subclass' => $request->capex_subclass,
            'pin_project_more_than' => $request->project_million,
            'pin_project_year' => $request->project_year,
            'pin_project_size' => $request->project_size,
            // 'user_id_update' => auth()->id(),
            'updated_at' => now(),
        );

        Projects::find($request->hidden_id)->update($project_form_data);

        $prep_form_data = array(
            'ppp_approved_budget_contract' => $request->approved_budget_contract,
            'ppp_contract_type' => $request->contract_type,
            'ppp_contract_type_others' => $request->other_contract,
            'ppp_mode_of_procurement' => $request->mode_of_procurement,
            'ppp_fs_awarded_contract' => $request->fs_awarded_contract,
            'ppp_fs_revised_contract' => $request->fs_revised_contract,    
            'ppp_bc_awarded_contract' => $request->bc_awarded_contract,
            'ppp_bc_revised_contract' => $request->bc_revised_contract,
            'ppp_ded_awarded_contract' => $request->ded_awarded_contract,
            'ppp_ded_revised_contract' => $request->ded_revised_contract,
            'ppp_con_cs_awarded_contract' => $request->con_cs_awarded_contract,
            'ppp_con_cs_revised_contract' => $request->con_cs_revised_contract,
            'ppp_om_awarded_contract' => $request->om_awarded_contract,
            'ppp_om_revised_contract' => $request->om_revised_contract,
            'ppp_dnb_awarded_contract' => $request->dnb_awarded_contract,
            'ppp_dnb_revised_contract' => $request->dnb_revised_contract,
            'ppp_dbo_awarded_contract' => $request->dbo_awarded,
            'ppp_dbo_revised_contract' => $request->dbo_revised_contract,
            'ppp_others_awarded_contract' => $request->others_awarded_contract,
            'ppp_others_revised_contract' => $request->others_revised_contract,
            'ppp_procurement_threshold' => $request->procurement_threshold,
            'ppp_procure_docs' => $request->procure_docs,
            'ppp_risk_assessment' => $request->risk_assessment,
            // 'ppp_remarks' => $request->tatoo,
            // 'user_id_update' => auth()->id(),
            'updated_at' => now(),
        );

        ProjectPreparationProcurement::find($request->hidden_id)->update($prep_form_data);

        $project_impleo_form_data = array(
            'pimo_fs_targ_2017_phyprogress' => $request->fs_2017_targ_phyprogress,
            'pimo_fs_targ_2018_phyprogress' => $request->fs_2018_targ_phyprogress,
            'pimo_fs_targ_2019_phyprogress' => $request->fs_2019_targ_phyprogress,
            'pimo_fs_targ_2020_phyprogress' => $request->fs_2020_targ_phyprogress,
            'pimo_fs_targ_2021_phyprogress' => $request->fs_2021_targ_phyprogress,
            'pimo_fs_actu_2017_phyprogress' => $request->fs_2017_actu_phyprogress,    
            'pimo_fs_actu_2018_phyprogress' => $request->fs_2018_actu_phyprogress,
            'pimo_fs_actu_2019_phyprogress' => $request->fs_2019_actu_phyprogress,
            'pimo_fs_actu_2020_phyprogress' => $request->fs_2020_actu_phyprogress,
            'pimo_fs_actu_2021_phyprogress' => $request->fs_2021_actu_phyprogress,
            'pimo_fs_2017_disprogress' => $request->fs_2017_disprogress,
            'pimo_fs_2018_disprogress' => $request->fs_2018_disprogress,
            'pimo_fs_2019_disprogress' => $request->fs_2019_disprogress,
            'pimo_fs_2020_disprogress' => $request->fs_2020_disprogress,
            'pimo_fs_2021_disprogress' => $request->fs_2021_disprogress,
            'pimo_fs_startdate' => $request->fs_startdate,
            'pimo_fs_originalend' => $request->fs_originalend,
            'pimo_fs_ate' => $request->fs_ate,
            'pimo_fs_actualend' => $request->fs_actualend,
            'pimo_bc_targ_2017_phyprogress' => $request->bc_2017_targ_phyprogress,
            'pimo_bc_targ_2018_phyprogress' => $request->bc_2018_targ_phyprogress,
            'pimo_bc_targ_2019_phyprogress' => $request->bc_2019_targ_phyprogress,
            'pimo_bc_targ_2020_phyprogress' => $request->bc_2020_targ_phyprogress,
            'pimo_bc_targ_2021_phyprogress' => $request->bc_2021_targ_phyprogress,
            'pimo_bc_actu_2017_phyprogress' => $request->bc_2017_actu_phyprogress,    
            'pimo_bc_actu_2018_phyprogress' => $request->bc_2018_actu_phyprogress,
            'pimo_bc_actu_2019_phyprogress' => $request->bc_2019_actu_phyprogress,
            'pimo_bc_actu_2020_phyprogress' => $request->bc_2020_actu_phyprogress,
            'pimo_bc_actu_2021_phyprogress' => $request->bc_2021_actu_phyprogress,
            'pimo_bc_2017_disprogress' => $request->bc_2017_disprogress,
            'pimo_bc_2018_disprogress' => $request->bc_2018_disprogress,
            'pimo_bc_2019_disprogress' => $request->bc_2019_disprogress,
            'pimo_bc_2020_disprogress' => $request->bc_2020_disprogress,
            'pimo_bc_2021_disprogress' => $request->bc_2021_disprogress,
            'pimo_bc_startdate' => $request->bc_startdate,
            'pimo_bc_originalend' => $request->bc_originalend,
            'pimo_bc_ate' => $request->bc_ate,
            'pimo_bc_actualend' => $request->bc_actualend,
            'pimo_ded_targ_2017_phyprogress' => $request->ded_2017_targ_phyprogress,
            'pimo_ded_targ_2018_phyprogress' => $request->ded_2018_targ_phyprogress,
            'pimo_ded_targ_2019_phyprogress' => $request->ded_2019_targ_phyprogress,
            'pimo_ded_targ_2020_phyprogress' => $request->ded_2020_targ_phyprogress,
            'pimo_ded_targ_2021_phyprogress' => $request->ded_2021_targ_phyprogress,
            'pimo_ded_actu_2017_phyprogress' => $request->ded_2017_actu_phyprogress,    
            'pimo_ded_actu_2018_phyprogress' => $request->ded_2018_actu_phyprogress,
            'pimo_ded_actu_2019_phyprogress' => $request->ded_2019_actu_phyprogress,
            'pimo_ded_actu_2020_phyprogress' => $request->ded_2020_actu_phyprogress,
            'pimo_ded_actu_2021_phyprogress' => $request->ded_2021_actu_phyprogress,
            'pimo_ded_2017_disprogress' => $request->ded_2017_disprogress,
            'pimo_ded_2018_disprogress' => $request->ded_2017_disprogress,
            'pimo_ded_2019_disprogress' => $request->ded_2017_disprogress,
            'pimo_ded_2020_disprogress' => $request->ded_2017_disprogress,
            'pimo_ded_2021_disprogress' => $request->ded_2017_disprogress,
            'pimo_ded_startdate' => $request->ded_startdate,
            'pimo_ded_originalend' => $request->ded_originalend,
            'pimo_ded_ate' => $request->ded_ate,
            'pimo_ded_actualend' => $request->ded_actualend,
            // 'user_id_update' => auth()->id(),
            'updated_at' => now(),
        );

        ProjectImplementation::find($request->hidden_id)->update($project_impleo_form_data);

        $project_implet_form_data = array(
            'pimt_con_cs_targ_2017_phyprogress' => $request->con_cs_2017_targ_phyprogress,
            'pimt_con_cs_targ_2018_phyprogress' => $request->con_cs_2017_targ_phyprogress,
            'pimt_con_cs_targ_2019_phyprogress' => $request->con_cs_2017_targ_phyprogress,
            'pimt_con_cs_targ_2020_phyprogress' => $request->con_cs_2017_targ_phyprogress,
            'pimt_con_cs_targ_2021_phyprogress' => $request->con_cs_2017_targ_phyprogress,
            'pimt_con_cs_actu_2017_phyprogress' => $request->con_cs_2017_actu_phyprogress,    
            'pimt_con_cs_actu_2018_phyprogress' => $request->con_cs_2017_actu_phyprogress,
            'pimt_con_cs_actu_2019_phyprogress' => $request->con_cs_2017_actu_phyprogress,
            'pimt_con_cs_actu_2020_phyprogress' => $request->con_cs_2017_actu_phyprogress,
            'pimt_con_cs_actu_2021_phyprogress' => $request->con_cs_2017_actu_phyprogress,
            'pimt_con_cs_2017_disprogress' => $request->con_cs_2017_disprogress,
            'pimt_con_cs_2018_disprogress' => $request->con_cs_2018_disprogress,
            'pimt_con_cs_2019_disprogress' => $request->con_cs_2019_disprogress,
            'pimt_con_cs_2020_disprogress' => $request->con_cs_2020_disprogress,
            'pimt_con_cs_2021_disprogress' => $request->con_cs_2021_disprogress,
            'pimt_con_cs_startdate' => $request->con_cs_startdate,
            'pimt_con_cs_originalend' => $request->con_cs_originalend,
            'pimt_con_cs_ate' => $request->con_cs_ate,
            'pimt_con_cs_actualend' => $request->con_cs_actualend,
            'pimt_om_targ_2017_phyprogress' => $request->om_2017_targ_phyprogress,
            'pimt_om_targ_2018_phyprogress' => $request->om_2018_targ_phyprogress,
            'pimt_om_targ_2019_phyprogress' => $request->om_2019_targ_phyprogress,
            'pimt_om_targ_2020_phyprogress' => $request->om_2020_targ_phyprogress,
            'pimt_om_targ_2021_phyprogress' => $request->om_2021_targ_phyprogress,
            'pimt_om_actu_2017_phyprogress' => $request->om_2017_actu_phyprogress,    
            'pimt_om_actu_2018_phyprogress' => $request->om_2018_actu_phyprogress,
            'pimt_om_actu_2019_phyprogress' => $request->om_2019_actu_phyprogress,
            'pimt_om_actu_2020_phyprogress' => $request->om_2020_actu_phyprogress,
            'pimt_om_actu_2021_phyprogress' => $request->om_2021_actu_phyprogress,
            'pimt_om_2017_disprogress' => $request->om_2017_disprogress,
            'pimt_om_2018_disprogress' => $request->om_2018_disprogress,
            'pimt_om_2019_disprogress' => $request->om_2019_disprogress,
            'pimt_om_2020_disprogress' => $request->om_2020_disprogress,
            'pimt_om_2021_disprogress' => $request->om_2021_disprogress,
            'pimt_om_startdate' => $request->om_startdate,
            'pimt_om_originalend' => $request->om_originalend,
            'pimt_om_ate' => $request->om_ate,
            'pimt_om_actualend' => $request->om_actualend,
            'pimt_dnb_targ_2017_phyprogress' => $request->dnb_2017_targ_phyprogress,
            'pimt_dnb_targ_2018_phyprogress' => $request->dnb_2018_targ_phyprogress,
            'pimt_dnb_targ_2019_phyprogress' => $request->dnb_2019_targ_phyprogress,
            'pimt_dnb_targ_2020_phyprogress' => $request->dnb_2020_targ_phyprogress,
            'pimt_dnb_targ_2021_phyprogress' => $request->dnb_2021_targ_phyprogress,
            'pimt_dnb_actu_2017_phyprogress' => $request->dnb_2017_actu_phyprogress,    
            'pimt_dnb_actu_2018_phyprogress' => $request->dnb_2018_actu_phyprogress,
            'pimt_dnb_actu_2019_phyprogress' => $request->dnb_2019_actu_phyprogress,
            'pimt_dnb_actu_2020_phyprogress' => $request->dnb_2020_actu_phyprogress,
            'pimt_dnb_actu_2021_phyprogress' => $request->dnb_2021_actu_phyprogress,
            'pimt_dnb_2017_disprogress' => $request->dnb_2017_disprogress,
            'pimt_dnb_2018_disprogress' => $request->dnb_2018_disprogress,
            'pimt_dnb_2019_disprogress' => $request->dnb_2019_disprogress,
            'pimt_dnb_2020_disprogress' => $request->dnb_2020_disprogress,
            'pimt_dnb_2021_disprogress' => $request->dnb_2021_disprogress,
            'pimt_dnb_startdate' => $request->dnb_startdate,
            'pimt_dnb_originalend' => $request->dnb_originalend,
            'pimt_dnb_ate' => $request->dnb_ate,
            'pimt_dnb_actualend' => $request->dnb_actualend,
            // 'user_id_update' => auth()->id(),
            'updated_at' => now(),
        );

        ProjectImplementationTwo::find($request->hidden_id)->update($project_implet_form_data);

        $project_impler_form_data = array(
            'pimt_dbo_targ_2017_phyprogress' => $request->dbo_2017_targ_phyprogress,
            'pimt_dbo_targ_2018_phyprogress' => $request->dbo_2018_targ_phyprogress,
            'pimt_dbo_targ_2019_phyprogress' => $request->dbo_2019_targ_phyprogress,
            'pimt_dbo_targ_2020_phyprogress' => $request->dbo_2020_targ_phyprogress,
            'pimt_dbo_targ_2021_phyprogress' => $request->dbo_2021_targ_phyprogress,
            'pimt_dbo_actu_2017_phyprogress' => $request->dbo_2017_actu_phyprogress,    
            'pimt_dbo_actu_2018_phyprogress' => $request->dbo_2018_actu_phyprogress,
            'pimt_dbo_actu_2019_phyprogress' => $request->dbo_2019_actu_phyprogress,
            'pimt_dbo_actu_2020_phyprogress' => $request->dbo_2020_actu_phyprogress,
            'pimt_dbo_actu_2021_phyprogress' => $request->dbo_2021_actu_phyprogress,
            'pimt_dbo_2017_disprogress' => $request->dbo_2017_disprogress,
            'pimt_dbo_2018_disprogress' => $request->dbo_2018_disprogress,
            'pimt_dbo_2019_disprogress' => $request->dbo_2019_disprogress,
            'pimt_dbo_2020_disprogress' => $request->dbo_2020_disprogress,
            'pimt_dbo_2021_disprogress' => $request->dbo_2021_disprogress,
            'pimt_dbo_startdate' => $request->dbo_startdate,
            'pimt_dbo_originalend' => $request->dbo_originalend,
            'pimt_dbo_ate' => $request->dbo_ate,
            'pimt_dbo_actualend' => $request->dbo_actualend,
            'pimt_others_targ_2017_phyprogress' => $request->others_2017_targ_phyprogress,
            'pimt_others_targ_2018_phyprogress' => $request->others_2018_targ_phyprogress,
            'pimt_others_targ_2019_phyprogress' => $request->others_2019_targ_phyprogress,
            'pimt_others_targ_2020_phyprogress' => $request->others_2020_targ_phyprogress,
            'pimt_others_targ_2021_phyprogress' => $request->others_2021_targ_phyprogress,
            'pimt_others_actu_2017_phyprogress' => $request->others_2017_actu_phyprogress,    
            'pimt_others_actu_2018_phyprogress' => $request->others_2018_actu_phyprogress,
            'pimt_others_actu_2019_phyprogress' => $request->others_2019_actu_phyprogress,
            'pimt_others_actu_2020_phyprogress' => $request->others_2020_actu_phyprogress,
            'pimt_others_actu_2021_phyprogress' => $request->others_2021_actu_phyprogress,
            'pimt_others_2017_disprogress' => $request->others_2017_disprogress,
            'pimt_others_2018_disprogress' => $request->others_2018_disprogress,
            'pimt_others_2019_disprogress' => $request->others_2019_disprogress,
            'pimt_others_2020_disprogress' => $request->others_2020_disprogress,
            'pimt_others_2021_disprogress' => $request->others_2021_disprogress,
            'pimt_others_startdate' => $request->others_startdate,
            'pimt_others_originalend' => $request->others_originalend,
            'pimt_others_ate' => $request->others_ate,
            'pimt_others_actualend' => $request->others_actualend,
            'pimr_current_project_status' => $request->project_status,
            'pimr_test_to_perform' => $request->test_to_perform,
            'pimr_other_test_to_perform' => $request->other_test_perform, //SLIPPAGE
            'pimr_days_suspended' => $request->days_suspended,
            'pimr_audit_coverage' => $request->audit_coverage,
            'pimr_cause_of_delay' =>  implode(',' , $request->cause_of_delay),    
            'pimr_cause_of_delay_others' => $request->other_cause,
            'pimr_cost_analysis' => $request->cost_analysis,
            'pimr_variation_ref_num' => $request->variation_ref_no,
            'pimr_variation_desc' => $request->variation_description,
            'pimr_variation_cost' => $request->variation_cost,
            'pimr_approved_date' => $request->variation_approved_date,
            // 'user_id_update' => auth()->id(),
            'updated_at' => now(),
        );

        ProjectImplementationsThree::find($request->hidden_id)->update($project_impler_form_data);
        
        $project_audit_form_data = array(
            'audit_relevance_to_service' => $request->relevance_obligation,
            'audit_res_relevance_to_service' => $request->results_relevance,
            'audit_adequate_planning' => $request->adequate_planning,
            'audit_res_adequate_planning' => $request->results_adequate,
            'audit_risk_mitigation' => $request->risk_assessment_mitigation,
            'audit_res_risk_mitigation' => $request->results_risk,
            'audit_procurement_process' => $request->cost_within_benchmark_procurement,
            'audit_cost_benchmark' => $request->cost_within_benchmark,
            'audit_res_cost_benchmark' => $request->results_cost,
            'audit_utilization' => $request->effective_utilization,
            'audit_res_utilization' => $request->results_effect,
            'audit_timeliness' => $request->timeliness,
            'audit_timelinessb' => $request->timelinessb,
            'audit_res_timeliness' => $request->results_timeliness,
            'audit_safety' => $request->safety,
            'audit_safetyb' => $request->safetyb,
            'audit_safetyb' => $request->safetyc,
            'audit_res_safety' => $request->results_safety,
            'audit_quality_control' => $request->quality_control,
            'audit_quality_controlb' => $request->quality_controlb,
            'audit_quality_controlc' => $request->quality_controlc,
            'audit_res_quality_control' => $request->results_quality,
            'audit_specifications' => $request->specifications,
            'audit_specificationsb' => $request->specificationsb,
            'audit_specificationsc' => $request->specificationsc,
            'audit_res_specifications' => $request->results_specifications,
            'audit_final_cost' => $request->final_costs,
            'audit_final_costb' => $request->final_costsb,
            'audit_res_final_cost' => $request->results_final_costs,
            'audit_usefulness' => $request->usefulness_utilization,
            'audit_res_usefulness' => $request->results_usefulness,
            'audit_total_rating' => $request->total_score,
            'updated_at' => now(),

        );

        AuditTest::find($request->hidden_id)->update($project_audit_form_data);

        $project_opex_form_data = array(
            'oma_in_place_features' => $request->in_place_features,
            'oma_major_hazard' => implode(',' , $request->major_hazard_desc),
            'oma_major_loss_life_reported' => $request->total_number_reported_loss,
            'oma_major_accident_reported' => $request->total_number_reported_accident,
            'oma_major_damage_prop_reported' => $request->total_number_reported_damage,
            'oma_minor_hazard' => implode(',' , $request->minor_hazard_desc),
            'oma_minor_accident_reported' => $request->total_number_reported_minor_acc,
            'oma_minor_damage_reported' => $request->total_number_reported_minor_dam,
            // 'oma_incentives' => $request->in_place_features,
            // 'oma_disincentives' => $request->name_of_mother,
            'oma_utilization' => $request->contract_type,
            'oma_salwag_2017_opex' => $request->salwag_2017_opex,
            'oma_salwag_2018_opex' => $request->salwag_2018_opex,
            'oma_salwag_2019_opex' => $request->salwag_2019_opex,
            'oma_salwag_2020_opex' => $request->salwag_2020_opex,
            'oma_salwag_2021_opex' => $request->salwag_2021_opex,
            'oma_powlight_2017_opex' => $request->powlight_2017_opex,
            'oma_powlight_2018_opex' => $request->powlight_2018_opex,
            'oma_powlight_2019_opex' => $request->powlight_2019_opex,
            'oma_powlight_2020_opex' => $request->powlight_2020_opex,
            'oma_powlight_2021_opex' => $request->powlight_2021_opex,
            'oma_repmain_2017_opex' => $request->repmain_2017_opex,
            'oma_repmain_2018_opex' => $request->repmain_2018_opex,
            'oma_repmain_2019_opex' => $request->repmain_2019_opex,
            'oma_repmain_2020_opex' => $request->repmain_2020_opex,
            'oma_repmain_2021_opex' => $request->repmain_2021_opex,
            'oma_conservice_2017_opex' => $request->conservice_2017_opex,
            'oma_conservice_2018_opex' => $request->conservice_2018_opex,
            'oma_conservice_2019_opex' => $request->conservice_2019_opex,
            'oma_conservice_2020_opex' => $request->conservice_2020_opex,
            'oma_conservice_2021_opex' => $request->conservice_2021_opex,
            'oma_treatcost_2017_opex' => $request->treatcost_2017_opex,
            'oma_treatcost_2018_opex' => $request->treatcost_2018_opex,
            'oma_treatcost_2019_opex' => $request->treatcost_2019_opex,
            'oma_treatcost_2020_opex' => $request->treatcost_2020_opex,
            'oma_treatcost_2021_opex' => $request->treatcost_2021_opex,
            'oma_concharge_2017_opex' => $request->concharge_2017_opex,
            'oma_concharge_2018_opex' => $request->concharge_2018_opex,
            'oma_concharge_2019_opex' => $request->concharge_2019_opex,
            'oma_concharge_2020_opex' => $request->concharge_2020_opex,
            'oma_concharge_2021_opex' => $request->concharge_2021_opex,
            'oma_regcost_2017_opex' => $request->regcost_2017_opex,
            'oma_regcost_2018_opex' => $request->regcost_2018_opex,
            'oma_regcost_2019_opex' => $request->regcost_2019_opex,
            'oma_regcost_2020_opex' => $request->regcost_2020_opex,
            'oma_regcost_2021_opex' => $request->regcost_2021_opex,
            'oma_others_2017_opex' => $request->others_2017_opex,
            'oma_others_2018_opex' => $request->others_2018_opex,
            'oma_others_2019_opex' => $request->others_2019_opex,
            'oma_others_2020_opex' => $request->others_2020_opex,
            'oma_others_2021_opex' => $request->others_2021_opex,
            'arm_audit_obeservation_highlights' => $request->audit_obsevation_highlights,
            'arm_audit_response' => $request->audit_response,
            'updated_at' => now(),

        );

        OperationsMonitoringAdministration::find($request->hidden_id)->update($project_opex_form_data);

        return response()->json(['success' => "Record Updated Successfully!"]);
    }

   
    public function destroy(Projects $projects)
    {
        //
    }
    public function projects_data(){
        $projects_data = Projects::with('projprep', 'projimplemone', 'projimplemtwo','projimthree','projopex')->get();
        
        return Datatables::of($projects_data)       
        ->addColumn('actions', function($projects_data){
        
            $button = '<a href="/projects/'.$projects_data->id.'" class="btn py-0 px-2"><i class="fas fa-eye"></i></a>';

            return $button;
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
