@extends('layouts.app')


@section('header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Project List</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="/geotechnical_planning">Project List</a></li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 p-1">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="add_new_project">Add new record</button>
            @include('modals.projects_modal')
        </div>
        <div class="col-md-12 p-1">
            <div class="card">
                <div class="card-body">
                    <table id="project_info_table" class="table table-striped table-bordered table-responsive" style="width:100%">
                        <thead>
                            <tr style="white-space: nowrap;">
                                <th width="10%">Action</th>
                                <th>Project Code</th>
                                <th>Project Name</th>
                                <th>Contract Number</th>
                                {{-- <th>Project Origin</th> --}}
                                <th>Name of Concessionaire</th>
                                <th>CAPEX Classification</th>
                                <th>CAPEX Subclass</th>
                                <th>Project Status</th>
                                <th>Test to Perform</th>
                                <th>Audit Coverage</th>
                                <th>Date Created</th>
                            </tr>
                        </thead>
                        <tbody style="white-space: nowrap;">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    {{-- @include('scripts.projects_scripts') --}}

    <script>
        
        function getVal(){
        var test = document.getElementById('test_to_perform').value;
        var year = document.getElementById('project_year').value;

        if(test == 'PRUDENCE' && year == '2020'){
            
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            // var effres = document.getElementById('results_effect').value;

            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            // var numeff = Number(effres);

            var resupr = numrel+numadq+numrsk+numcst;
            // // alert(resupr);
             document.getElementById("total_score").value = resupr;


        }else if(test == 'PRUDENCE AND EFFICIENCY' && year == '2020'){

            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            var tmlres = document.getElementById('results_timeliness').value;
            var sftres = document.getElementById('results_safety').value;
            var quares = document.getElementById('results_quality').value;
            var spcres = document.getElementById('results_specifications').value;
            var fcsres = document.getElementById('results_final_costs').value;
            var useres = document.getElementById('results_usefulness').value;
            
            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            var numtml = Number(tmlres);
            var numsft = Number(sftres);
            var numspc = Number(spcres);
            var numqua = Number(quares);
            var numfcs = Number(fcsres);
            var numuse = Number(useres);
           
            var total = numrel+numadq+numrsk+numuse+numcst+numtml+numsft+numspc+numqua+numfcs;
            var respre = total / 2;
            document.getElementById("total_score").value = respre;

        }else if(test == 'PRUDENCE' && year == '2021'){
            
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            // var effres = document.getElementById('results_effect').value;

            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            // var numeff = Number(effres);

            var resupr = numrel+numadq+numrsk+numcst;
            // // alert(resupr);
             document.getElementById("total_score").value = resupr;


        }else if(test == 'PRUDENCE AND EFFICIENCY' && year == '2021'){

            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            var tmlres = document.getElementById('results_timeliness').value;
            var sftres = document.getElementById('results_safety').value;
            var quares = document.getElementById('results_quality').value;
            var spcres = document.getElementById('results_specifications').value;
            var fcsres = document.getElementById('results_final_costs').value;
            var useres = document.getElementById('results_usefulness').value;
            
            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            var numtml = Number(tmlres);
            var numsft = Number(sftres);
            var numspc = Number(spcres);
            var numqua = Number(quares);
            var numfcs = Number(fcsres);
            var numuse = Number(useres);
           
            var total = numrel+numadq+numrsk+numuse+numcst+numtml+numsft+numspc+numqua+numfcs;
            var respre = total / 2;
            document.getElementById("total_score").value = respre;

        }else if(test == 'PRUDENCE' && year == '2017'){
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            var effres = document.getElementById('results_effect').value;

            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            var numeff = Number(effres);

            var resupr = numrel+numadq+numrsk+numcst+numeff;
            // // alert(resupr);
             document.getElementById("total_score").value = resupr;

        }else if(test == 'PRUDENCE AND EFFICIENCY' && year == '2017'){
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            var effres = document.getElementById('results_effect').value;
            var tmlres = document.getElementById('results_timeliness').value;
            var sftres = document.getElementById('results_safety').value;
            var quares = document.getElementById('results_quality').value;
            var spcres = document.getElementById('results_specifications').value;
            var fcsres = document.getElementById('results_final_costs').value;
            
            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            var numeff = Number(effres);
            var numtml = Number(tmlres);
            var numsft = Number(sftres);
            var numspc = Number(spcres);
            var numqua = Number(quares);
            var numfcs = Number(fcsres);
           
            var total = numrel+numadq+numrsk+numeff+numcst+numtml+numsft+numspc+numqua+numfcs;
            var respre = total / 2;
            document.getElementById("total_score").value = respre;

        }else if(test == 'PRUDENCE' && year == '2018'){
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            var effres = document.getElementById('results_effect').value;

            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            var numeff = Number(effres);

            var resupr = numrel+numadq+numrsk+numcst+numeff;
            // // alert(resupr);
             document.getElementById("total_score").value = resupr;

        }else if(test == 'PRUDENCE AND EFFICIENCY' && year == '2018'){
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            var effres = document.getElementById('results_effect').value;
            var tmlres = document.getElementById('results_timeliness').value;
            var sftres = document.getElementById('results_safety').value;
            var quares = document.getElementById('results_quality').value;
            var spcres = document.getElementById('results_specifications').value;
            var fcsres = document.getElementById('results_final_costs').value;
            
            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            var numeff = Number(effres);
            var numtml = Number(tmlres);
            var numsft = Number(sftres);
            var numspc = Number(spcres);
            var numqua = Number(quares);
            var numfcs = Number(fcsres);
           
            var total = numrel+numadq+numrsk+numeff+numcst+numtml+numsft+numspc+numqua+numfcs;
            var respre = total / 2;
            document.getElementById("total_score").value = respre;

        }else if(test == 'PRUDENCE' && year == '2019'){
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            var effres = document.getElementById('results_effect').value;

            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            var numeff = Number(effres);

            var resupr = numrel+numadq+numrsk+numcst+numeff;
            // // alert(resupr);
             document.getElementById("total_score").value = resupr;

        }else if(test == 'PRUDENCE AND EFFICIENCY' && year == '2019'){
            var relres = document.getElementById('results_relevance').value;
            var adqres = document.getElementById('results_adequate').value;
            var rskres = document.getElementById('results_risk').value;
            var cstres = document.getElementById('results_cost').value;
            var effres = document.getElementById('results_effect').value;
            var tmlres = document.getElementById('results_timeliness').value;
            var sftres = document.getElementById('results_safety').value;
            var quares = document.getElementById('results_quality').value;
            var spcres = document.getElementById('results_specifications').value;
            var fcsres = document.getElementById('results_final_costs').value;
            
            var numrel = Number(relres);
            var numadq = Number(adqres);
            var numrsk = Number(rskres);
            var numcst = Number(cstres);
            var numeff = Number(effres);
            var numtml = Number(tmlres);
            var numsft = Number(sftres);
            var numspc = Number(spcres);
            var numqua = Number(quares);
            var numfcs = Number(fcsres);
           
            var total = numrel+numadq+numrsk+numeff+numcst+numtml+numsft+numspc+numqua+numfcs;
            var respre = total / 2;
            document.getElementById("total_score").value = respre;
        }else{
            document.getElementById("total_score").value = 'NA';

        }
        
    }
        $(document).ready(function(){
            
            $("#other_contract_type").click(function () {
                if ($(this).is(":checked")) {
                    $("#other_contract").removeAttr("disabled");
                    $("#other_contract").focus();
                } else {
                    $("#other_contract").attr("disabled", "disabled");
                }
            });
            $("#other_cause_delay").click(function () {
                if ($(this).is(":checked")) {
                    $("#other_cause").removeAttr("disabled");
                    $("#other_cause").focus();
                } else {
                    $("#other_cause").attr("disabled", "disabled");
                }
            });
            $("#other_component").click(function () {
                if ($(this).is(":checked")) {
                    $("#other_test_perform").removeAttr("disabled");
                    $("#other_test_perform").focus();
                } else {
                    $("#other_test_perform").attr("disabled", "disabled");
                }
            });
            $("#number_days").click(function () {
                if ($(this).is(":checked")) {
                    $("#days_suspended").removeAttr("disabled");
                    $("#days_suspended").focus();
                } else {
                    $("#days_suspended").attr("disabled", "disabled");
                }
            });

            $('#name_of_concessionaire').on('change', function() {
                var concession = this.value;
                // console.log(risk);
                if (concession == 'MWCI'){
                    document.getElementById("concession_zone").value = 'East';
                }else if(concession == 'MWSI'){
                    document.getElementById("concession_zone").value = 'West';
                }else{

                }
            });
            $('#others_awarded_contract').on('keyup', function(){
                    $("#remarks").removeAttr("disabled");
                    // $("#remarks").focus();
                
            });

            $('#project_year').on('change', function() {
                var project_year = this.value;
                $('#project_million').on('change', function() {
                    var project_size = this.value;
                    if(project_size == 'Yes'){
                        document.getElementById('project_size').value = "Big";
                    }else if(project_size == 'No'){
                        document.getElementById('project_size').value = "Small";
                    }else{

                    }
                    $('#current_project_status').on('change', function() {
                        var project_status = this.value;
                         

                        // 2017 TCI BIG COMPLETED PROJECT
                        if(project_year == '2017' && project_size == 'Yes' && project_status == 'Completed'){
                            $('#relevance_label').show();
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_label').show();
                            $('#adequate_planning_tci_big').show();
                            $('#results_adequate_div').show();
                            $('#risk_label').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#utilization_label').show();
                            $('#effective_utilization_tci_ccb').show();
                            $('#results_effect_div').show();
                            $('#timeliness_label').show();
                            $('#business_plan_span').show();
                            $('#contract_period_span').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_label').show();
                            $('#incident_span').show();
                            $('#manual_span').show();
                            $('#provisions_span').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            $('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_label').show();
                            $('#construction_span').show();
                            $('#operating_span').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();


                            // 2017 TCI BIG CLOSED PROJECT
                        }else if(project_year == '2017' && project_size == 'Yes' && project_status == 'Closed'){

                            $('#relevance_label').show();
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_label').show();
                            $('#adequate_planning_tci_big').show();
                            $('#results_adequate_div').show();
                            $('#risk_label').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#utilization_label').show();
                            $('#effective_utilization_tci_ccb').show();
                            $('#results_effect_div').show();
                            $('#timeliness_label').show();
                            $('#business_plan_span').show();
                            $('#contract_period_span').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_label').show();
                            $('#incident_span').show();
                            $('#manual_span').show();
                            $('#provisions_span').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            $('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_label').show();
                            $('#construction_span').show();
                            $('#operating_span').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2017 TCI BIG ONGOING PROJECT
                        }else if(project_year == '2017' && project_size == 'Yes' && project_status == 'Ongoing'){
                            alert("Hello TCI ONGOING BIG PROJECT W/O EFFICIENCY");
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_big').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#effective_utilization_tci_onb').show();
                            $('#results_effect_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#utilization_label').show();
                            $('#results_adequate_div').show();

                            // 2017 TCI SMALL ONGOING PROJECT
                        }else if(project_year == '2017' && project_size == 'No' && project_status == 'Ongoing'){
                            alert("Hello TCI ONGOING SMALL PROJECT W/O EFFICIENCY");
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            
                            // 2017 TCI SMALL CLOSED PROJECT
                        }else if(project_year == '2017' && project_size == 'No' && project_status == 'Closed'){
                            alert("Hello TCI CLOSE SMALL PROJECT");
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            ('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2017 TCI SMALL COMPLETED PROJECT
                        }else if(project_year == '2017' && project_size == 'No' && project_status == 'Completed'){
                            alert("Hello TCI COMPLETED SMALL PROJECT");
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            ('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2018 TCI BIG COMPLETED PROJECT
                        }if(project_year == '2018' && project_size == 'Yes' && project_status == 'Completed'){                            
                            $('#relevance_label').show();
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_label').show();
                            $('#adequate_planning_tci_big').show();
                            $('#results_adequate_div').show();
                            $('#risk_label').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#utilization_label').show();
                            $('#effective_utilization_tci_ccb').show();
                            $('#results_effect_div').show();
                            $('#timeliness_label').show();
                            $('#business_plan_span').show();
                            $('#contract_period_span').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_label').show();
                            $('#incident_span').show();
                            $('#manual_span').show();
                            $('#provisions_span').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            $('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_label').show();
                            $('#construction_span').show();
                            $('#operating_span').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2018 TCI BIG CLOSED PROJECT
                        }else if(project_year == '2018' && project_size == 'Yes' && project_status == 'Closed'){                            
                            $('#relevance_label').show();
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_label').show();
                            $('#adequate_planning_tci_big').show();
                            $('#results_adequate_div').show();
                            $('#risk_label').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#utilization_label').show();
                            $('#effective_utilization_tci_ccb').show();
                            $('#results_effect_div').show();
                            $('#timeliness_label').show();
                            $('#business_plan_span').show();
                            $('#contract_period_span').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_label').show();
                            $('#incident_span').show();
                            $('#manual_span').show();
                            $('#provisions_span').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            $('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_label').show();
                            $('#construction_span').show();
                            $('#operating_span').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2018 TCI BIG ONGOING PROJECT
                        }else if(project_year == '2018' && project_size == 'Yes' && project_status == 'Ongoing'){
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_big').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#effective_utilization_tci_onb').show();
                            $('#results_effect_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#utilization_label').show();
                            $('#results_adequate_div').show();

                            // 2018 TCI SMALL ONGOING PROJECT
                        }else if(project_year == '2018' && project_size == 'No' && project_status == 'Ongoing'){
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            
                            // 2018 TCI SMALL CLOSED PROJECT
                        }else if(project_year == '2018' && project_size == 'No' && project_status == 'Closed'){
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            ('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2018 TCI SMALL CCOMPLETED PROJECT
                        }else if(project_year == '2018' && project_size == 'No' && project_status == 'Completed'){
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            ('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2019 TCI BIG COMPLETED PROJECT
                        }if(project_year == '2019' && project_size == 'Yes' && project_status == 'Completed'){
                            $('#relevance_label').show();
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_label').show();
                            $('#adequate_planning_tci_big').show();
                            $('#results_adequate_div').show();
                            $('#risk_label').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#utilization_label').show();
                            $('#effective_utilization_tci_ccb').show();
                            $('#results_effect_div').show();
                            $('#timeliness_label').show();
                            $('#business_plan_span').show();
                            $('#contract_period_span').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_label').show();
                            $('#incident_span').show();
                            $('#manual_span').show();
                            $('#provisions_span').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            $('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_label').show();
                            $('#construction_span').show();
                            $('#operating_span').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2019 TCI BIG CLOSED PROJECT
                        }else if(project_year == '2019' && project_size == 'Yes' && project_status == 'Closed'){
                            $('#relevance_label').show();
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_label').show();
                            $('#adequate_planning_tci_big').show();
                            $('#results_adequate_div').show();
                            $('#risk_label').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#utilization_label').show();
                            $('#effective_utilization_tci_ccb').show();
                            $('#results_effect_div').show();
                            $('#timeliness_label').show();
                            $('#business_plan_span').show();
                            $('#contract_period_span').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_label').show();
                            $('#incident_span').show();
                            $('#manual_span').show();
                            $('#provisions_span').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            $('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_label').show();
                            $('#construction_span').show();
                            $('#operating_span').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2019 TCI BIG ONGOING PROJECT
                        }else if(project_year == '2019' && project_size == 'Yes' && project_status == 'Ongoing'){
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_big').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#effective_utilization_tci_onb').show();
                            $('#results_effect_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#utilization_label').show();
                            $('#results_adequate_div').show();

                            // 2019 TCI SMALL ONGOING PROJECT
                        }else if(project_year == '2019' && project_size == 'No' && project_status == 'Ongoing'){                            
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            
                            // 2019 TCI SMALL CLOSED PROJECT
                        }else if(project_year == '2019' && project_size == 'No' && project_status == 'Closed'){
                            alert("Hello TCI CLOSE SMALL PROJECT");
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            ('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2019 TCI SMALL COMPLETED PROJECT
                        }else if(project_year == '2019' && project_size == 'No' && project_status == 'Completed'){
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            $('#timeliness_tcica').show();
                            $('#timeliness_tci_tcicb').show();
                            $('#result_timeliness_div').show();
                            $('#safety_tcica').show();
                            $('#safety_tcicb').show();
                            $('#safety_tcicc').show();
                            $('#results_safety_div').show();
                            ('#quality_control_div').show();
                            $('#results_quality_div').show();
                            $('#specifications_tcic').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_tcia').show();
                            $('#final_costs_tcib').show();
                            $('#results_final_costs_div').show();

                            // 2020 MWSS BIG COMPLETED PROJECT
                        }else if(project_year == '2020' && project_size == 'Yes' && project_status == 'Completed'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#timeliness_mwss').show();
                            $('#result_timeliness_div').show();
                            $('#safety_mwss').show();
                            $('#results_safety_div').show();
                            $('#quality_specifications_mwss').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_mwss').show();
                            $('#results_final_costs_div').show();
                            $('#utilization_div').show();
                            $('#results_utilization_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#timeliness_label').show();
                            $('#safety_label').show();
                            $('#final_label').show();

                            // 2020 MWSS BIG CLOSED PROJECT
                        }else if(project_year == '2020' && project_size == 'Yes' && project_status == 'Closed'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();    
                            $('#results_cost_div').show();
                            $('#timeliness_mwss').show();
                            $('#result_timeliness_div').show();
                            $('#safety_mwss').show();
                            $('#results_safety_div').show();
                            $('#quality_specifications_mwss').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_mwss').show();
                            $('#results_final_costs_div').show();
                            $('#utilization_div').show();
                            $('#results_utilization_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#timeliness_label').show();
                            $('#safety_label').show();
                            $('#final_label').show();

                            // 2020 MWSS BIG ONGOING PROJECT
                        }else if(project_year == '2020' && project_size == 'Yes' && project_status == 'Ongoing'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();

                            // 2020 MWSS SMALL ONGOING PROJECT
                        }else if(project_year == '2020' && project_size == 'No' && project_status == 'Ongoing'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();

                            // 2020 MWSS SMALL COMPLETED PROJECT
                        }else if(project_year == '2020' && project_size == 'No' && project_status == 'Completed'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#timeliness_mwss').show();
                            $('#result_timeliness_div').show();
                            $('#safety_mwss').show();
                            $('#results_safety_div').show();
                            $('#quality_specifications_mwss').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_mwss').show();
                            $('#results_final_costs_div').show();
                            $('#utilization_div').show();
                            $('#results_utilization_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#timeliness_label').show();
                            $('#safety_label').show();
                            $('#final_label').show();

                            // 2020 MWSS SMALL CLOSED PROJECT
                        }else if(project_year == '2020' && project_size == 'No' && project_status == 'Closed'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#timeliness_mwss').show();
                            $('#result_timeliness_div').show();
                            $('#safety_mwss').show();
                            $('#results_safety_div').show();
                            $('#quality_specifications_mwss').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_mwss').show();
                            $('#results_final_costs_div').show();
                            $('#utilization_div').show();
                            $('#results_utilization_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#timeliness_label').show();
                            $('#safety_label').show();
                            $('#final_label').show();

                            // 2021 MWSS BIG COMPLETED PROJECT
                        }else if(project_year == '2021' && project_size == 'Yes' && project_status == 'Completed'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#timeliness_mwss').show();
                            $('#result_timeliness_div').show();
                            $('#safety_mwss').show();
                            $('#results_safety_div').show();
                            $('#quality_specifications_mwss').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_mwss').show();
                            $('#results_final_costs_div').show();
                            $('#utilization_div').show();
                            $('#results_utilization_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#timeliness_label').show();
                            $('#safety_label').show();
                            $('#final_label').show();

                            // 2021 MWSS BIG CLOSED PROJECT
                        }else if(project_year == '2021' && project_size == 'Yes' && project_status == 'Closed'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();    
                            $('#results_cost_div').show();
                            $('#timeliness_mwss').show();
                            $('#result_timeliness_div').show();
                            $('#safety_mwss').show();
                            $('#results_safety_div').show();
                            $('#quality_specifications_mwss').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_mwss').show();
                            $('#results_final_costs_div').show();
                            $('#utilization_div').show();
                            $('#results_utilization_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#timeliness_label').show();
                            $('#safety_label').show();
                            $('#final_label').show();

                            // 2021 MWSS BIG ONGOING PROJECT
                        }else if(project_year == '2021' && project_size == 'Yes' && project_status == 'Ongoing'){                            
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();

                            // 2021 MWSS SMALL ONGOING PROJECT
                        }else if(project_year == '2021' && project_size == 'No' && project_status == 'Ongoing'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();

                            // 2021 MWSS SMALL COMPLETED PROJECT
                        }else if(project_year == '2021' && project_size == 'No' && project_status == 'Completed'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#timeliness_mwss').show();
                            $('#result_timeliness_div').show();
                            $('#safety_mwss').show();
                            $('#results_safety_div').show();
                            $('#quality_specifications_mwss').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_mwss').show();
                            $('#results_final_costs_div').show();
                            $('#utilization_div').show();
                            $('#results_utilization_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#timeliness_label').show();
                            $('#safety_label').show();
                            $('#final_label').show();

                            // 2021 MWSS SMALL CLOSED PROJECT
                        }else if(project_year == '2021' && project_size == 'No' && project_status == 'Closed'){
                            $('#relevance_obligation_mwss').show();
                            $('#results_relevance_div').show();
                            $('#adequate_planning_mwss').show();
                            $('#results_adequate_div').show();
                            $('#risk_assessment_mitigation_mwss').show();
                            $('#results_risk_div').show();
                            $('#cost_within_benchmark_mwss').show();
                            $('#results_cost_div').show();
                            $('#timeliness_mwss').show();
                            $('#result_timeliness_div').show();
                            $('#safety_mwss').show();
                            $('#results_safety_div').show();
                            $('#quality_specifications_mwss').show();
                            $('#results_specifications_div').show();
                            $('#final_costs_mwss').show();
                            $('#results_final_costs_div').show();
                            $('#utilization_div').show();
                            $('#results_utilization_div').show();
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#timeliness_label').show();
                            $('#safety_label').show();
                            $('#final_label').show();
                        }else{
                            alert("Please refresh this page and insert the correct inputs.");
                        }

                    
                
                    });
                });

                // console.log(risk);
                console.log(project_year);
            });
            
            $('#current_project_status').on('change', function() {
                var stage = this.value;
                // console.log(stage);
                if (stage == 'Ongoing'){
                    // console.log("Prudence")
                    document.getElementById("test_to_perform").value = 'PRUDENCE';
                    document.getElementById("audit_coverage").value = 'PARTIAL AUDIT';
                    // $('#prudence').show();
                    // $('#effciency').hide();
                    // $('#total_score_div').show();
                    $('#computebutton_div').show();
                    $("#days_suspended").attr("disabled", "disabled");


                }else if(stage == 'Completed'){
                    document.getElementById("test_to_perform").value = 'PRUDENCE AND EFFICIENCY';
                    document.getElementById("audit_coverage").value = 'FULL AUDIT';
                    // $('#prudence').show();
                    // $('#effciency').show();
                    $('#total_score_div').show();
                    $('#computebutton_div').show();
                    $("#days_suspended").attr("disabled", "disabled");


                }else if(stage == 'Closed'){
                    document.getElementById("test_to_perform").value = 'PRUDENCE AND EFFICIENCY';
                    document.getElementById("audit_coverage").value = 'FULL AUDIT';
                    // $('#prudence').show();
                    // $('#effciency').show();
                    $('#total_score_div').show();
                    $('#computebutton_div').show();
                    $("#days_suspended").attr("disabled", "disabled");


                }else if(stage == 'Suspended'){
                    document.getElementById("test_to_perform").value = 'NOT APPLICABLE';
                    document.getElementById("audit_coverage").value = 'NOT APPLICABLE';
                    // $('#effciency').hide();
                    // $('#prudence').hide();
                    $('#total_score_div').hide();
                    $('#computebutton_div').hide();
                    $("#days_suspended").removeAttr("disabled");


                }else{

                }
            });


            // INSERT VALUE FOR RELEVANCE RESULT MWSS
            $('#relevance_obligation_mwss').on('change', function() {
                var relevance = this.value;
                // console.log(relevance);
                if (relevance == 'ABP'){
                    document.getElementById("results_relevance").value = '30';
                }else if(relevance == 'CSP'){
                    document.getElementById("results_relevance").value = '30';
                }else if(relevance == 'SOB'){
                    document.getElementById("results_relevance").value = '30';
                }else if(relevance == 'DRE'){
                    document.getElementById("results_relevance").value = '40';
                }else if(relevance == 'LRE'){
                    document.getElementById("results_relevance").value = '20';
                }else if(relevance == 'NRL'){
                    document.getElementById("results_relevance").value = '0';
                }else if(relevance == 'NRE'){
                    document.getElementById("results_relevance").value = 'Recovery disallowed/Audit discontinued';
                }else{

                }
            });
        
        // INSERT VALUE FOR RELEVANCE RESULT TCI
            $('#relevance_obligation_tci').on('change', function() {
                var relevance = this.value;
                // console.log(relevance);
                if(relevance == 'DRE'){
                    document.getElementById("results_relevance").value = '40';
                }else if(relevance == 'LRE'){
                    document.getElementById("results_relevance").value = '20';
                }else if(relevance == 'NRL'){
                    document.getElementById("results_relevance").value = '0';
                }else{

                }
            });
            
            // INSERT VALUE FOR ADEQUATE PLANNING RESULT MWSS
            $('#adequate_planning_mwss').on('change', function() {
                var adequate= this.value;
                // console.log(adequate;
                if (adequate== 'AVS'){
                    document.getElementById("results_adequate").value = '10';
                }else if(adequate== 'PPL'){
                    document.getElementById("results_adequate").value = '0';
                }else{

                }
            });
            // INSERT VALUE FOR ADEQUATE PLANNING RESULTS TCI BIG PROJECT
            $('#adequate_planning_tci_big').on('change', function() {
                var adequate= this.value;
                // console.log(adequate;
                if (adequate== 'FSB'){
                    document.getElementById("results_adequate").value = '15';
                }else if(adequate== 'FSO'){
                    document.getElementById("results_adequate").value = '10';
                }else{

                }
            });
            // INSERT VALUE FOR ADEQUATE PLANNING RESULTS TCI SMALL PROJECT
            $('#adequate_planning_tci_sml').on('change', function() {
                var adequate= this.value;
                // console.log(adequate;
                if (adequate== 'BCS'){
                    document.getElementById("results_adequate").value = '15';
                }else if(adequate== 'LSA'){
                    document.getElementById("results_adequate").value = '10';
                }else if(adequate== 'NSA'){
                    document.getElementById("results_adequate").value = '0';
                }else{

                }
            });
            // INSERT VALUE FOR RISK ASSESSMENT MWSS
            $('#risk_assessment_mitigation_mwss').on('change', function() {
                var risk = this.value;
                // console.log(risk);
                if (risk == 'WRM'){
                    document.getElementById("results_risk").value = '10';
                }else if(risk == 'NRM'){
                    document.getElementById("results_risk").value = '0';
                }else{

                }
            });
            // INSERT VALUE FOR RISK ASSESSMENT TCI
            $('#risk_assessment_mitigation_tci').on('change', function() {
                var risk = this.value;
                // console.log(risk);
                if (risk == 'RAM'){
                    document.getElementById("results_risk").value = '10';
                }else if(risk == 'RAO'){
                    document.getElementById("results_risk").value = '5';
                }else{

                }
            });
        // INSERT VALUE FOR COST WITHIN BENCHMARK MWSS
            $('#cost_within_benchmark_mwss').on('change', function() {
                var cost = this.value;
                // console.log(cost);
                if (cost == 'CAE'){
                    document.getElementById("results_cost").value = '30';
                }else if(cost == 'CAG'){
                    document.getElementById("results_cost").value = '0';
                }else{

                }
            });
            // COMPUTATION FOR VALUE OF COST WITHIN BENCHMARK TCIA
            $('#cost_within_benchmark_tcia').on('change', function() {
                var procure = this.value;
                $("#cost_within_benchmark_tcib").removeAttr("disabled");
                $('#cost_within_benchmark_tcib').on('change', function() {
                    var bench = this.value;

                    if (procure == 'TDI' && bench == 'LTF'){
                        document.getElementById("results_cost").value = '15';
                    }else if (procure == 'TDI' && bench == 'GTF'){
                        document.getElementById("results_cost").value = '12';
                    }else if (procure == 'TDI' && bench == 'GTT'){
                        document.getElementById("results_cost").value = '10';
                    }else if (procure == 'TDI' && bench == 'GTN'){
                        document.getElementById("results_cost").value = '5';
                    }else if (procure == 'TRF' && bench == 'LTF'){
                        document.getElementById("results_cost").value = '13';
                    }else if (coprocurest == 'TRF' && bench == 'GTF'){
                        document.getElementById("results_cost").value = '10';
                    }else if (procure == 'TRF' && bench == 'GTT'){
                        document.getElementById("results_cost").value = '8';
                    }else if (procure == 'TRF' && bench == 'GTN'){
                        document.getElementById("results_cost").value = '3';
                    }else if (procure == 'TNG' && bench == 'LTF'){
                        document.getElementById("results_cost").value = '11';
                    }else if (procure == 'TNG' && bench == 'GTF'){
                        document.getElementById("results_cost").value = '8';
                    }else if (procure == 'TNG' && bench == 'GTT'){
                        document.getElementById("results_cost").value = '6';
                    }else if (procure == 'TNG' && bench == 'GTN'){
                        document.getElementById("results_cost").value = '1';
                    }else{

                    }
                });
            });
            // COMPUTATION FOR VALUE OF COST WITHIN BENCHMARK TCIB
            $('#cost_within_benchmark_tcib').on('change', function() {
                var bench = this.value;
                $('#cost_within_benchmark_tcia').on('change', function() {
                    $("#cost_within_benchmark_tcib").removeAttr("disabled");
                    var procure = this.value;

                    if (procure == 'TDI' && bench == 'LTF'){
                        document.getElementById("results_cost").value = '15';
                    }else if (procure == 'TDI' && bench == 'GTF'){
                        document.getElementById("results_cost").value = '12';
                    }else if (procure == 'TDI' && bench == 'GTT'){
                        document.getElementById("results_cost").value = '10';
                    }else if (procure == 'TDI' && bench == 'GTN'){
                        document.getElementById("results_cost").value = '5';
                    }else if (procure == 'TRF' && bench == 'LTF'){
                        document.getElementById("results_cost").value = '13';
                    }else if (coprocurest == 'TRF' && bench == 'GTF'){
                        document.getElementById("results_cost").value = '10';
                    }else if (procure == 'TRF' && bench == 'GTT'){
                        document.getElementById("results_cost").value = '8';
                    }else if (procure == 'TRF' && bench == 'GTN'){
                        document.getElementById("results_cost").value = '3';
                    }else if (procure == 'TNG' && bench == 'LTF'){
                        document.getElementById("results_cost").value = '11';
                    }else if (procure == 'TNG' && bench == 'GTF'){
                        document.getElementById("results_cost").value = '8';
                    }else if (procure == 'TNG' && bench == 'GTT'){
                        document.getElementById("results_cost").value = '6';
                    }else if (procure == 'TNG' && bench == 'GTN'){
                        document.getElementById("results_cost").value = '1';
                    }else{

                    }
                });
            });

            // INSERT VALUE FOR EFFECTIVE UTILIZATION TCI COMPLETE/CLOSED BIG PROJECT
            $('#effective_utilization_tci_ccb').on('change', function() {
                var cost = this.value;
                // console.log(cost);
                if (cost == 'EMT'){
                    document.getElementById("results_effect").value = '20';
                }else if(cost == 'FFN'){
                    document.getElementById("results_effect").value = '10';
                }else if(cost == 'LTV'){
                    document.getElementById("results_effect").value = '5';
                }else if(cost == 'NUT'){
                    document.getElementById("results_effect").value = '0';
                }else{

                }
            });
            // INSERT VALUE FOR EFFECTIVE UTILIZATION TCI ONGOING BIG PROJECT
            $('#effective_utilization_tci_onb').on('change', function() {
                var cost = this.value;
                // console.log(cost);
                if (cost == 'LTE'){
                    document.getElementById("results_effect").value = '20';
                }else if(cost == 'GTV'){
                    document.getElementById("results_effect").value = '10';
                }else if(cost == 'GTB'){
                    document.getElementById("results_effect").value = '5';
                }else if(cost == 'MTY'){
                    document.getElementById("results_effect").value = '0';
                }else{

                }
            });
            // INSERT VALUE FOR EFFECTIVE UTILIZATION TCI ONGOING/COMPLETED/CLOSED SMALL PROJECT
            $('#effective_utilization_tci_ccs').on('change', function() {
                var cost = this.value;
                // console.log(cost);
                if (cost == 'TAI'){
                    document.getElementById("results_effect").value = '20';
                }else if(cost == 'TNS'){
                    document.getElementById("results_effect").value = '10';
                }else if(cost == 'TNO'){
                    document.getElementById("results_effect").value = '5';
                }else if(cost == 'MTO'){
                    document.getElementById("results_effect").value = '0';
                }else{

                }
            });
            // VALUE FOR TIMELINESS MWSS
            $('#timeliness_mwss').on('change', function() {
                var risk = this.value;
                // console.log(risk);
                if (risk == 'ONT'){
                    document.getElementById("results_timeliness").value = '25';
                }else if(risk == 'PLD'){
                    document.getElementById("results_timeliness").value = '15';
                }else if(risk == 'DLY'){
                    document.getElementById("results_timeliness").value = '0';
                }else{

                }
            });
            // VALUE FOR TIMELINESS TCI COMPLETED/CLOSED
            $('#timeliness_tcica').on('change', function() {
                var timea = this.value;
                $("#timeliness_tci_tcicb").removeAttr("disabled");
                $('#timeliness_tci_tcicb').on('change', function() {
                    var timeb = this.value;

                    if (timea == 'IFS' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '15';
                    }else if(timea == 'IFS' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '13';
                    }else if(timea == 'IFS' && timeb == 'ICG'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'IDN' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '12';
                    }else if(timea == 'IDN' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'IDN' && timeb == 'ICG'){
                        document.getElementById("results_timeliness").value = '7';
                    }else if(timea == 'IDO' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'IDO' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '8';
                    }else if(timea == 'IDO' && timeb == 'ICG'){
                        document.getElementById("results_timeliness").value = '5';
                    }else if(timea == 'IDT' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '8';
                    }else if(timea == 'IDT' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '6';
                    }else if(timea == 'IDT' && timeb == 'ICG'){
                        document.getElementById("results_timeliness").value = '3';
                    }else if(timea == 'IDR' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '5';
                    }else if(timea == 'IDR' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '3';
                    }else if(timea == 'IDR' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '0';
                    }else{

                    }
                });
            });
            // VALUE FOR TIMELINESS TCI COMPLETED/CLOSED
            $('#timeliness_tci_tcicb').on('change', function() {
                var timeb = this.value;
                $('#timeliness_tcica').on('change', function() {
                    $("#timeliness_tci_tcicb").removeAttr("disabled");
                    var timea = this.value;

                    if (timea == 'IFS' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '15';
                    }else if(timea == 'IFS' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '13';
                    }else if(timea == 'IFS' && timeb == 'ICG'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'IDN' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '12';
                    }else if(timea == 'IDN' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'IDN' && timeb == 'ICG'){
                        document.getElementById("results_timeliness").value = '7';
                    }else if(timea == 'IDO' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'IDO' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '8';
                    }else if(timea == 'IDO' && timeb == 'ICG'){
                        document.getElementById("results_timeliness").value = '5';
                    }else if(timea == 'IDT' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '8';
                    }else if(timea == 'IDT' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '6';
                    }else if(timea == 'IDT' && timeb == 'ICG'){
                        document.getElementById("results_timeliness").value = '3';
                    }else if(timea == 'IDR' && timeb == 'ICC'){
                        document.getElementById("results_timeliness").value = '5';
                    }else if(timea == 'IDR' && timeb == 'ICL'){
                        document.getElementById("results_timeliness").value = '3';
                    }else if(timea == 'IDR' && timeb == 'ICG'){
                        document.getElementById("results_timeliness").value = '0';
                    }else{

                    }
                });
            });
            // VALUE FOR TIMELINESS TCI ONGOING
            $('#timeliness_tcioa').on('change', function() {
                var timea = this.value;
                $("#timeliness_tci_tciob").removeAttr("disabled");
                $('#timeliness_tci_tciob').on('change', function() {
                    var timeb = this.value;

                    if (timea == 'OFS' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '15';
                    }else if(timea == 'OFS' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '13';
                    }else if(timea == 'OFS' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'ODN' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '12';
                    }else if(timea == 'ODN' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'ODN' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '7';
                    }else if(timea == 'ODO' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'ODO' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '8';
                    }else if(timea == 'ODO' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '5';
                    }else if(timea == 'ODT' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '8';
                    }else if(timea == 'ODT' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '6';
                    }else if(timea == 'ODT' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '3';
                    }else if(timea == 'ODR' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '5';
                    }else if(timea == 'ODR' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '3';
                    }else if(timea == 'ODR' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '0';
                    }else{

                    }
                });
            });
            // VALUE FOR TIMELINESS TCI ONGOING
            $('#timeliness_tci_tciob').on('change', function() {
                var timeb = this.value;
                $('#timeliness_tcioa').on('change', function() {
                    $("#timeliness_tci_tciob").removeAttr("disabled");
                    var timea = this.value;

                    if (timea == 'OFS' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '15';
                    }else if(timea == 'OFS' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '13';
                    }else if(timea == 'OFS' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'ODN' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '12';
                    }else if(timea == 'ODN' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'ODN' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '7';
                    }else if(timea == 'ODO' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '10';
                    }else if(timea == 'ODO' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '8';
                    }else if(timea == 'ODO' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '5';
                    }else if(timea == 'ODT' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '8';
                    }else if(timea == 'ODT' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '6';
                    }else if(timea == 'ODT' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '3';
                    }else if(timea == 'ODR' && timeb == 'OCC'){
                        document.getElementById("results_timeliness").value = '5';
                    }else if(timea == 'ODR' && timeb == 'OCL'){
                        document.getElementById("results_timeliness").value = '3';
                    }else if(timea == 'ODR' && timeb == 'OCG'){
                        document.getElementById("results_timeliness").value = '0';
                    }else{

                    }
                });
            });
            // VALUE FOR SAFETY MWSS
            $('#safety_mwss').on('change', function() {
                var risk = this.value;
                // console.log(risk);
                if (risk == 'NMA'){
                    document.getElementById("results_safety").value = '15';
                }else if(risk == 'NMI'){
                    document.getElementById("results_safety").value = '5';
                }else if(risk == 'AMI'){
                    document.getElementById("results_safety").value = '0';
                }else{

                }
            });


            // VALUE FOR SAFETY TCI COMPLETED/CLOSED
            $('#safety_tcica').on('change', function() {
                var safetya = this.value;
                $("#safety_tcicb").removeAttr("disabled");

                $('#safety_tcicb').on('change', function() {
                    var safetyb = this.value;
                    $("#safety_tcicc").removeAttr("disabled");

                    $('#safety_tcicc').on('change', function() {
                        var safetyc = this.value;

                        if (safetya == 'NAC' && safetyb == 'AAS' && safetyc == 'NOV'){
                            document.getElementById("results_safety").value = '15';
                        }else if(safetya == 'NAC' && safetyb == 'AAS' && safetyc == 'NMI'){
                            document.getElementById("results_safety").value = '13';
                        }else if(safetya == 'NAC' && safetyb == 'AAS' && safetyc == 'EMI'){
                            document.getElementById("results_safety").value = '11';
                        }else if(safetya == 'NAC' && safetyb == 'AAS' && safetyc == 'AMI'){
                            document.getElementById("results_safety").value = '10';
                        }else if (safetya == 'OAC' && safetyb == 'AAS' && safetyc == 'NOV'){
                            document.getElementById("results_safety").value = '13';
                        }else if(safetya == 'OAC' && safetyb == 'AAS' && safetyc == 'NMI'){
                            document.getElementById("results_safety").value = '11';
                        }else if(safetya == 'OAC' && safetyb == 'AAS' && safetyc == 'EMI'){
                            document.getElementById("results_safety").value = '9';
                        }else if(safetya == 'OAC' && safetyb == 'AAS' && safetyc == 'AMI'){
                            document.getElementById("results_safety").value = '8';
                        }else if (safetya == 'TAC' && safetyb == 'AAS' && safetyc == 'NOV'){
                            document.getElementById("results_safety").value = '10';
                        }else if(safetya == 'TAC' && safetyb == 'AAS' && safetyc == 'NMI'){
                            document.getElementById("results_safety").value = '8';
                        }else if(safetya == 'TAC' && safetyb == 'AAS' && safetyc == 'EMI'){
                            document.getElementById("results_safety").value = '6';
                        }else if(safetya == 'TAC' && safetyb == 'AAS' && safetyc == 'AMI'){
                            document.getElementById("results_safety").value = '5';
                        }else{

                        }
                    });
                });
            });
            //VALUE FOR QUALITY CONTROL TCI COMPLETED/CLOSED
            $('#quality_control_tcica').on('change', function() {
                var qualitya = this.value;
                $('#quality_control_tcicb').on('change', function() {
                    var qualityb = this.value;
                    $('#quality_control_tcicc').on('change', function() {
                    var qualityc = this.value;
                        if (qualitya == 'QST' && qualityb == 'QAS' && qualityc == 'NBJ'){
                            document.getElementById("results_quality").value = '15';
                        }else if (qualitya == 'QST' && qualityb == 'QAS' && qualityc == 'BJL'){
                            document.getElementById("results_quality").value = '13';
                        }else if (qualitya == 'QST' && qualityb == 'QAS' && qualityc == 'BJG'){
                            document.getElementById("results_quality").value = '10';
                        }else{
                            document.getElementById("results_quality").value = '0';
                        }
                    });
                });

            });

            //VALUE FOR QUALITY CONTROL TCI ONGOING
            $('#quality_control_tcioa').on('change', function() {
                var qualitya = this.value;
                $('#quality_control_tciob').on('change', function() {
                    var qualityb = this.value;
                    $('#quality_control_tcioc').on('change', function() {
                    var qualityc = this.value;
                        if (qualitya == 'QST' && qualityb == 'QAS' && qualityc == 'WMB'){
                            document.getElementById("results_quality").value = '15';
                        }else{
                            document.getElementById("results_quality").value = '0';
                        }
                    });
                });

            });
            //VALUE FOR QUALITY/SPECIFICATIONS MWSS
            $('#specifications_mwss').on('change', function() {
                var risk = this.value;
                // console.log(risk);
                if (risk == 'AAP'){
                    document.getElementById("results_specifications").value = '10';
                }else if(risk == 'OBA'){
                    document.getElementById("results_specifications").value = '0';
                }else{

                }
            });

            //VALUE FOR SPECIFICATIONS TCI COMPLETED/CLOSED
            $('#specifications_tcica').on('change', function() {
                var specsa = this.value;
                $('#specifications_tcicb').on('change', function() {
                    var specsb = this.value;
                    $('#specifications_tcicc').on('change', function() {
                    var specsc = this.value;
                        if (specsa == 'ACW' && specsb == 'BAA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '15';
                        }else if (specsa == 'ACW' && specsb == 'BAA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '13';
                        }else if (specsa == 'ACW' && specsb == 'BAA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '10';
                        }else if (specsa == 'ACW' && specsb == 'IEA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '13';
                        }else if (specsa == 'ACW' && specsb == 'IEA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '11';
                        }else if (specsa == 'ACW' && specsb == 'IEA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '8';
                        }else if (specsa == 'ACW' && specsb == 'INA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '10';
                        }else if (specsa == 'ACW' && specsb == 'INA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '8';
                        }else if (specsa == 'ACW' && specsb == 'INA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '5';
                        }else if (specsa == 'ACG' && specsb == 'BAA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '13';
                        }else if (specsa == 'ACG' && specsb == 'BAA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '11';
                        }else if (specsa == 'ACG' && specsb == 'BAA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '8';
                        }else if (specsa == 'ACG' && specsb == 'IEA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '11';
                        }else if (specsa == 'ACG' && specsb == 'IEA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '9';
                        }else if (specsa == 'ACG' && specsb == 'IEA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '6';
                        }else if (specsa == 'ACG' && specsb == 'INA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '10';
                        }else if (specsa == 'ACG' && specsb == 'INA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '8';
                        }else if (specsa == 'ACG' && specsb == 'INA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '3';
                        }else if (specsa == 'ACL' && specsb == 'BAA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '10';
                        }else if (specsa == 'ACL' && specsb == 'BAA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '8';
                        }else if (specsa == 'ACL' && specsb == 'BAA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '5';
                        }else if (specsa == 'ACL' && specsb == 'IEA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '8';
                        }else if (specsa == 'ACL' && specsb == 'IEA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '6';
                        }else if (specsa == 'ACL' && specsb == 'IEA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '3';
                        }else if (specsa == 'ACL' && specsb == 'INA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '5';
                        }else if (specsa == 'ACL' && specsb == 'INA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '3';
                        }else if (specsa == 'ACL' && specsb == 'INA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '0';
                        }else{
                            document.getElementById("results_specifications").value = '0';
                        }
                    });
                });

            });

        //VALUE FOR SPECIFICATIONS TCI COMPLETED/CLOSED
        $('#specifications_tcioa').on('change', function() {
                var specsa = this.value;
                $('#specifications_tciob').on('change', function() {
                    var specsb = this.value;
                    $('#specifications_tcioc').on('change', function() {
                    var specsc = this.value;
                        if (specsa == 'ACW' && specsb == 'KPA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '15';
                        }else if (specsa == 'ACW' && specsb == 'KPA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '13';
                        }else if (specsa == 'ACW' && specsb == 'KPA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '10';
                        }else if (specsa == 'ACG' && specsb == 'KPA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '13';
                        }else if (specsa == 'ACG' && specsb == 'KPA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '11';
                        }else if (specsa == 'ACG' && specsb == 'KPA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '8';
                        }else if (specsa == 'ACL' && specsb == 'KPA' && specsc == 'INN'){
                            document.getElementById("results_specifications").value = '10';
                        }else if (specsa == 'ACL' && specsb == 'KPA' && specsc == 'ITV'){
                            document.getElementById("results_specifications").value = '8';
                        }else if (specsa == 'ACL' && specsb == 'KPA' && specsc == 'TVN'){
                            document.getElementById("results_specifications").value = '5';
                        }else{
                            document.getElementById("results_specifications").value = '0';
                        }
                    });
                });

            });

            $('#final_costs_mwss').on('change', function() {
                var risk = this.value;
                // console.log(risk);
                if (risk == 'COB'){
                    document.getElementById("results_final_costs").value = '25';
                }else if(risk == 'COM'){
                    document.getElementById("results_final_costs").value = '15';
                }else if(risk == 'COA'){
                    document.getElementById("results_final_costs").value = '0';
                }else{

                }
            });
            $('#final_costs_tcia').on('change', function() {
                var finala = this.value;
                $("#final_costs_tcib").removeAttr("disabled");
                $('#final_costs_tcib').on('change', function() {
                    var finalb = this.value;

                    if (finala == 'IOB' && finalb == 'OCE'){
                        document.getElementById("results_final_costs").value = '40';
                    }else if(finala == 'IOB' && finalb == 'OCH'){
                        document.getElementById("results_final_costs").value = '35';
                    }else if(finala == 'IOB' && finalb == 'OCM'){
                        document.getElementById("results_final_costs").value = '30';
                    }else if(finala == 'IOM' && finalb == 'OCE'){
                        document.getElementById("results_final_costs").value = '30';
                    }else if(finala == 'IOM' && finalb == 'OCH'){
                        document.getElementById("results_final_costs").value = '25';
                    }else if(finala == 'IOM' && finalb == 'OCM'){
                        document.getElementById("results_final_costs").value = '20';
                    }else if(finala == 'IOA' && finalb == 'OCE'){
                        document.getElementById("results_final_costs").value = '20';
                    }else if(finala == 'IOA' && finalb == 'OCH'){
                        document.getElementById("results_final_costs").value = '25';
                    }else if(finala == 'IOA' && finalb == 'OCM'){
                        document.getElementById("results_final_costs").value = '10';
                    }else if(finala == 'IOF' && finalb == 'OCE'){
                        document.getElementById("results_final_costs").value = '10';
                    }else if(finala == 'IOF' && finalb == 'OCH'){
                        document.getElementById("results_final_costs").value = '5';
                    }else if(finala == 'IOF' && finalb == 'OCM'){
                        document.getElementById("results_final_costs").value = '0';
                    }else{

                    }
                });
            });
            $('#utilization_mwss').on('change', function() {
                var usefulness = this.value;
                if(usefulness == 'EFU'){
                    document.getElementById("results_usefulness").value = '25';
                }else if(usefulness == 'PEF'){
                    document.getElementById("results_usefulness").value = '15';
                }else if(usefulness == 'IEF'){
                    document.getElementById("results_usefulness").value = '5';
                }else if(usefulness == 'NUS'){
                    document.getElementById("results_usefulness").value = '5';
                }else{
                }
            });
            $('#project_info_table').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('projects_data') }}",
                },
                columns: [
                    { data: 'actions', name: 'actions', orderable:false },
                    { data: 'pin_project_code', name: 'pin_project_code', defaultContent: 'N/A'},
                    { data: 'pin_name_of_project', name: 'pin_name_of_project' , defaultContent: 'N/A'},
                    { data: 'pin_contract_number', name: 'pin_contract_number' , defaultContent: 'N/A'},
                    // { data: 'pin_project_origin', name: 'pin_project_origin' , defaultContent: 'N/A'},
                    { data: 'pin_name_of_concessionaire', name: 'pin_name_of_concessionaire' , defaultContent: 'N/A'},
                    { data: 'pin_capex_classification', name: 'pin_capex_classification' , defaultContent: 'N/A'},
                    { data: 'pin_capex_subclass', name: 'pin_capex_subclass' , defaultContent: 'N/A'},
                    { data: 'projimthree.pimr_current_project_status', name: 'projimthree.pimr_current_project_status' , defaultContent: 'N/A'},
                    { data: 'projimthree.pimr_test_to_perform', name: 'projimthree.pimr_test_to_perform' , defaultContent: 'N/A'},
                    { data: 'projimthree.pimr_audit_coverage', name: 'projimthree.pimr_audit_coverage' , defaultContent: 'N/A'},
                    { data: 'created_at', name: 'created_at' }
                ]
            });
            $('#project_form').on('submit', function(event){
                event.preventDefault(); 
                var formData = new FormData($('#project_form')[0]);
                $.ajax({
                url: "{{ route('projects.store') }}",
                method:"POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success:function(result){
                    if(result.errors){
                        for(var count = 0; count < result.errors.length; count++){
                            toastr.error(result.errors[count]);
                        }
                    }
                    if (result.success) {
                        $('#add_new_project_modal').modal('hide');
                        $('#project_form')[0].reset();
                        $('#project_info_table').DataTable().ajax.reload();
                        toastr.success(result.success);
                    }
                }
                });
            });
        });
        
            
 
    </script>

@endpush