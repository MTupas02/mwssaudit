<?php

namespace App\Http\Controllers;

use App\Models\AuditTest;
use App\Models\Projects;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use Gate;
use Carbon\Carbon;

class AuditTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('audittest');
    }

    public function create()
    {
        //
    }

    public function store($id)
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

        //PROJECT PREPARATION & PROCUREMENT
        $projaudt = new AuditTest();
        $projaudt->audit_project_id = $projects->project_id;
        $projaudt->audit_project_code = $request->project_code;
        $projaudt->audit_type_of_test = $request->test_to_perform;
        // $projaudt->audit_pru_relevance_to_service = $request->pru_relevance_obligation;
        // $projaudt->audit_pru_res_relevance_to_service = $request->pru_results_relevance;
        // $projaudt->audit_pru_adequate_planning = $request->pru_adequate_planning;
        // $projaudt->audit_pru_res_adequate_planning = $request->pru_results_adequate;
        // $projaudt->audit_pru_risk_mitigation = $request->pru_risk_assessment_mitigation;
        // $projaudt->audit_pru_res_risk_mitigation = $request->pru_results_risk;
        // $projaudt->audit_pru_procurement_process = $request->pru_procurement_process;
        // $projaudt->audit_pru_res_procurement_process = $request->pru_results_procurement;
        // $projaudt->audit_pru_cost_benchmark = $request->pru_cost_within_benchmark;
        // $projaudt->audit_pru_res_cost_benchmark = $request->pru_results_cost;
        $projaudt->audit_relevance_to_service = $request->relevance_obligation;
        $projaudt->audit_res_relevance_to_service = $request->results_relevance;
        $projaudt->audit_adequate_planning = $request->adequate_planning;
        $projaudt->audit_res_adequate_planning = $request->results_adequate;
        $projaudt->audit_risk_mitigation = $request->risk_assessment_mitigation;
        $projaudt->audit_res_risk_mitigation = $request->results_risk;
        $projaudt->audit_procurement_process = $request->procurement_process;
        $projaudt->audit_res_procurement_process = $request->results_procurement;
        $projaudt->audit_cost_benchmark = $request->cost_within_benchmark;
        $projaudt->audit_res_cost_benchmark = $request->results_cost;
        $projaudt->audit_timeliness = $request->timeliness;
        $projaudt->audit_res_timeliness = $request->results_timeliness;
        $projaudt->audit_safety = $request->safety;
        $projaudt->audit_res_safety = $request->results_safety;
        $projaudt->audit_specifications = $request->specifications;
        $projaudt->audit_res_specifications = $request->results_specifications;
        $projaudt->audit_final_cost = $request->final_costs;
        $projaudt->audit_res_final_cost = $request->results_final_costs;
        $projaudt->audit_pru_total_rating = $request->pru_total_score;
        $projaudt->audit_total_rating = $request->total_score;
        $projaudt->save();

        return response()->json(['success' => "New Record Added Successfully!"]);
    }

    public function show($id)
    {
        $data = AuditTest::with('projects')->findOrFail($id);
        $date = Carbon::parse($data->created_at)->format('mdY');
        return view('shows.audittest_show', compact('data'));
    }

    public function edit(AuditTest $auditTest)
    {
        //
    }

    public function update(Request $request, AuditTest $auditTest)
    {
        //
    }

    public function destroy(AuditTest $auditTest)
    {
        //
    }
}
