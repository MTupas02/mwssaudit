@extends('layouts.app')

@section('content')
<div class="container"></div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="col-md-12 pl-0 pr-2 mb-2 text-right">
                <a class="btn btn-md btn-primary" id="print"><i class="fas fa-print"></i> Print</a>
                <a class="btn btn-md btn-primary edit_details" id="{{$data->id}}"><i class="fa fa-edit"></i> Edit Details</a>
                <div class="col-md-12 p-1">
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="{{$data->id}}"><i class="fa fa-edit"></i>Edit Details</button> --}}
                </div>
                <button class="btn btn-md btn-primary save_details" style="display: none;"><i class="fas fa-save"></i> Save Changes</button>
            </div>
            @include('modals.projects_modal_edit')
            <div class="card">
                <div class="card-header" style="background:#ff7675">{{ __('AUDIT RESULTS') }}</div>
                <div class="card-body">
                    <div class="row">
                        @if($data->projimplemtwo->pimt_test_to_perform == "PRUDENCE AND EFFICIENCY")
                        <div class="col-md-8 mb-3">
                            <label>Relevance to Service Obligations</label>
                            <select class="form-control" name="relevance_to_service_obligations" id="relevance_to_service_obligations" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_relevance_to_service == "ABP")
                                    <option selected value="ABP">Included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project</option>
                                    <option value="SOB">Relevant to Service Obligation</option>
                                    <option value="NRE">No Relevance</option>   
                                @elseif($data->audit->audit_relevance_to_service == "CSP")
                                    <option value="ABP">Included in the Approved Business Plan(ABP)</option>
                                    <option selected value="CSP">Components of a System Project</option>
                                    <option value="SOB">Relevant to Service Obligation</option>
                                    <option value="NRE">No Relevance</option>   
                                @elseif($data->audit->audit_relevance_to_service == "SOB")
                                    <option value="ABP">Included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project</option>
                                    <option selected value="SOB">Relevant to Service Obligation</option>
                                    <option value="NRE">No Relevance</option>   
                                @elseif($data->audit->audit_relevance_to_service == "NRE")
                                    <option value="ABP">Included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project</option>
                                    <option value="SOB">Relevant to Service Obligation</option>
                                    <option selected value="NRE">No Relevance</option>   
                                @else
                                    <option value="ABP">Included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project</option>
                                    <option value="SOB">Relevant to Service Obligation</option>
                                    <option value="NRE">No Relevance</option>   
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_relevance" name="score_relevance" value="{{$data->audit->audit_res_relevance_to_service}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Adequate Planning</label>
                            <select class="form-control" name="adequate_planning" id="adequate_planning" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_adequate_planning == "AVS")
                                    <option selected value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="DPS">During planning stage, options have been considered</option>
                                    <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @elseif($data->audit->audit_adequate_planning == "DPS")
                                    <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="DPS">During planning stage, options have been considered</option>
                                    <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @elseif($data->audit->audit_adequate_planning == "UNS")
                                    <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="DPS">During planning stage, options have been considered</option>
                                    <option selected value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @elseif($data->audit->audit_adequate_planning == "NFS")
                                    <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="DPS">During planning stage, options have been considered</option>
                                    <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @else
                                    <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="DPS">During planning stage, options have been considered</option>
                                    <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_adequate" name="score_adequate" value="{{$data->audit->audit_res_adequate_planning}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Risk Assessment/Mitigation</label>
                            <select class="form-control" name="risk_mitigation" id="risk_mitigation" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_risk_mitigation == "ANS")
                                    <option selected value="ANS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="APR">During planning stage, options have been considered</option>
                                    <option value="UNR">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @elseif($data->audit->audit_risk_mitigation == "APR")
                                    <option value="ANS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="APR">During planning stage, options have been considered</option>
                                    <option value="UNR">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @elseif($data->audit->audit_risk_mitigation == "UNR")
                                    <option value="ANS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="APR">During planning stage, options have been considered</option>
                                    <option selected value="UNR">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @else
                                    <option value="ANS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="APR">During planning stage, options have been considered</option>
                                    <option value="UNR">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_risk" name="score_risk" value="{{$data->audit->audit_res_risk_mitigation}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Procurement Process</label>
                            <select class="form-control" name="procurement_process" id="procurement_process" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_procurement_process == "PBP")
                                    <option selected value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDA">During planning stage, options have been considered</option>
                                    <option value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                @elseif($data->audit->audit_procurement_process == "PDA")
                                    <option value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="PDA">During planning stage, options have been considered</option>
                                    <option value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>           
                                @elseif($data->audit->audit_procurement_process == "NPB")
                                    <option value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDA">During planning stage, options have been considered</option>
                                    <option selected value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                @elseif($data->audit->audit_procurement_process == "PDU")
                                    <option value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDA">During planning stage, options have been considered</option>
                                    <option value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                @else
                                    <option value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDA">During planning stage, options have been considered</option>
                                    <option value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_procurement" name="score_procurement" value="{{$data->audit->audit_res_procurement_process}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Cost within Benchmark</label>
                            <select class="form-control" name="cost_within_benchmark" id="cost_within_benchmark" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_cost_benchmark == "CAE")
                                    <option selected value="CAE">Contract Amount as awarded is less than or equal to the ABC based on Benchmark Costs for each work item</option>
                                    <option value="CAG">Contract Amount as awarded is greater than or equal to the ABC based on Benchmark Costs for each work item</option>
                                @elseif($data->audit->audit_cost_benchmark == "CAG")
                                    <option value="CAE">Contract Amount as awarded is less than or equal to the ABC based on Benchmark Costs for each work item</option>
                                    <option selected value="CAG">Contract Amount as awarded is greater than or equal to the ABC based on Benchmark Costs for each work item</option>
                                @else
                                    <option value="CAE">Contract Amount as awarded is less than or equal to the ABC based on Benchmark Costs for each work item</option>
                                    <option value="CAG">Contract Amount as awarded is greater than or equal to the ABC based on Benchmark Costs for each work item</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_cost" name="score_cost" value="{{$data->audit->audit_res_cost_benchmark}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Timeliness</label>
                            <select class="form-control" name="timeliness" id="timeliness" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_timeliness == "ONT")
                                    <option selected value="ONT">On-Time</option>
                                    <option value="SLB">Slippage below or equal 15%</option>
                                    <option value="SLG">Slippage greater or equal 15%</option>
                                @elseif($data->audit->audit_timeliness == "SLB")
                                    <option value="ONT">On-Time</option>
                                    <option selected value="SLB">Slippage below or equal 15%</option>
                                    <option value="SLG">Slippage greater or equal 15%</option>
                                @elseif($data->audit->audit_timeliness == "SLG")
                                    <option value="ONT">On-Time</option>
                                    <option value="SLB">Slippage below or equal 15%</option>
                                    <option selected value="SLG">Slippage greater or equal 15%</option>
                                @else
                                    <option value="ONT">On-Time</option>
                                    <option value="SLB">Slippage below or equal 15%</option>
                                    <option value="SLG">Slippage greater or equal 15%</option>

                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_cost" name="score_cost" value="{{$data->audit->audit_res_timeliness}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Safety</label>
                            <select class="form-control" name="safety" id="safety" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_safety == "NMA")
                                    <option selected value="NMA">No major accidents or less than 5 minor accidents</option>
                                    <option value="NMI">No major accidents or with 5-10 minor accidents</option>
                                    <option value="AMI">At least 1 major accident or more than 10 minor accidents</option>
                                @elseif($data->audit->audit_safety == "NMI")
                                    <option value="NMA">No major accidents or less than 5 minor accidents</option>
                                    <option selected value="NMI">No major accidents or with 5-10 minor accidents</option>
                                    <option value="AMI">At least 1 major accident or more than 10 minor accidents</option>
                                @elseif($data->audit->audit_safety == "AMI")
                                    <option value="NMA">No major accidents or less than 5 minor accidents</option>
                                    <option value="NMI">No major accidents or with 5-10 minor accidents</option>
                                    <option selected value="AMI">At least 1 major accident or more than 10 minor accidents</option>
                                @else
                                    <option value="NMA">No major accidents or less than 5 minor accidents</option>
                                    <option value="NMI">No major accidents or with 5-10 minor accidents</option>
                                    <option value="AMI">At least 1 major accident or more than 10 minor accidents</option>

                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_cost" name="score_cost" value="{{$data->audit->audit_res_safety}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Specifications</label>
                            <select class="form-control" name="specifications" id="specifications" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_specifications == "AAP")
                                    <option selected value="AAP">All are in accordance to plans, specification, and quality standards</option>
                                    <option value="OBA">Observed items that are not in accordance to plans, specifications, and quality standards</option>
                                @elseif($data->audit->audit_specifications == "OBA")
                                    <option value="AAP">All are in accordance to plans, specification, and quality standards</option>
                                    <option selected value="OBA">Observed items that are not in accordance to plans, specifications, and quality standards</option>
                                @else
                                    <option value="AAP">All are in accordance to plans, specification, and quality standards</option>
                                    <option value="OBA">Observed items that are not in accordance to plans, specifications, and quality standards</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_cost" name="score_cost" value="{{$data->audit->audit_res_safety}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Final Cost</label>
                            <select class="form-control" name="final_cost" id="final_cost" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_final_cost == "COB")
                                    <option selected value="COB">Cost overrun is 15% and below</option>
                                    <option value="COM">Cost overrun is 15% but not more than 30%</option>
                                    <option value="COA">Cost overrun above 30%</option>
                                @elseif($data->audit->audit_final_cost == "COM")
                                    <option value="COB">Cost overrun is 15% and below</option>
                                    <option selected value="COM">Cost overrun is 15% but not more than 30%</option>
                                    <option value="COA">Cost overrun above 30%</option>
                                @elseif($data->audit->audit_final_cost == "COA")
                                    <option value="COB">Cost overrun is 15% and below</option>
                                    <option value="COM">Cost overrun is 15% but not more than 30%</option>
                                    <option selected value="COA">Cost overrun above 30%</option>
                                @else
                                    <option value="COB">Cost overrun is 15% and below</option>
                                    <option value="COM">Cost overrun is 15% but not more than 30%</option>
                                    <option value="COA">Cost overrun above 30%</option>

                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_cost" name="score_cost" value="{{$data->audit->audit_res_specifications}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Total Rating:</label>
                                <input class="form-control" id="score_cost" name="score_cost" value="{{$data->audit->audit_total_rating}}%" disabled>
                            </div>
                        </div>
                        @elseif($data->projimplemtwo->pimt_test_to_perform == 'PRUDENCE')
                        <div class="col-md-8 mb-3">
                            <label>Relevance to Service Obligations</label>
                            <select class="form-control" name="relevance_to_service_obligations" id="relevance_to_service_obligations" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_relevance_to_service == "ABP")
                                    <option selected value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project in the ABP</option>
                                    <option value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                    <option value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                    <option value="PCA">Project is outside the concession area</option>
                                    <option value="CSR">Corporate Social Responsibility projects</option>
                                    <option value="PRA">Project is not indicated in the ABP and done without prior approval</option>
                                @elseif($data->audit->audit_relevance_to_service == "CSP")
                                    <option value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                    <option selected value="CSP">Components of a System Project in the ABP</option>
                                    <option value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                    <option value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                    <option value="PCA">Project is outside the concession area</option>
                                    <option value="CSR">Corporate Social Responsibility projects</option>
                                    <option value="PRA">Project is not indicated in the ABP and done without prior approval</option>
                                @elseif($data->audit->audit_relevance_to_service == "SOB")
                                    <option value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project in the ABP</option>
                                    <option selected value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                    <option value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                    <option value="PCA">Project is outside the concession area</option>
                                    <option value="CSR">Corporate Social Responsibility projects</option>
                                    <option value="PRA">Project is not indicated in the ABP and done without prior approval</option>
                                @elseif($data->audit->audit_relevance_to_service == "NSO")
                                    <option value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project in the ABP</option>
                                    <option value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                    <option selected value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                    <option value="PCA">Project is outside the concession area</option>
                                    <option value="CSR">Corporate Social Responsibility projects</option>
                                    <option value="PRA">Project is not indicated in the ABP and done without prior approval</option>
                                @elseif($data->audit->audit_relevance_to_service == "PCA")
                                    <option value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project in the ABP</option>
                                    <option value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                    <option value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                    <option selected value="PCA">Project is outside the concession area</option>
                                    <option value="CSR">Corporate Social Responsibility projects</option>
                                    <option value="PRA">Project is not indicated in the ABP and done without prior approval</option>
                                @elseif($data->audit->audit_relevance_to_service == "CSR")
                                    <option value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project in the ABP</option>
                                    <option value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                    <option value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                    <option value="PCA">Project is outside the concession area</option>
                                    <option selected value="CSR">Corporate Social Responsibility projects</option>
                                    <option value="PRA">Project is not indicated in the ABP and done without prior approval</option>
                                @elseif($data->audit->audit_relevance_to_service == "PRA")
                                    <option value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project in the ABP</option>
                                    <option value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                    <option value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                    <option value="PCA">Project is outside the concession area</option>
                                    <option value="CSR">Corporate Social Responsibility projects</option>
                                    <option selected value="PRA">Project is not indicated in the ABP and done without prior approval</option>
                                @else
                                    <option value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                    <option value="CSP">Components of a System Project in the ABP</option>
                                    <option value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                    <option value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                    <option value="PCA">Project is outside the concession area</option>
                                    <option value="CSR">Corporate Social Responsibility projects</option>
                                    <option value="PRA">Project is not indicated in the ABP and done without prior approval</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_relevance" name="score_relevance" value="{{$data->audit->audit_res_relevance_to_service}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Adequate Planning</label>
                            <select class="form-control" name="adequate_planning" id="adequate_planning" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_adequate_planning == "AVS")
                                    <option selected value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="DPS">During planning stage, options have been considered</option>
                                    <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @elseif($data->audit->audit_adequate_planning == "DPS")
                                    <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="DPS">During planning stage, options have been considered</option>
                                    <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @elseif($data->audit->audit_adequate_planning == "UNS")
                                    <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="DPS">During planning stage, options have been considered</option>
                                    <option selected value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @elseif($data->audit->audit_adequate_planning == "NFS")
                                    <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="DPS">During planning stage, options have been considered</option>
                                    <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @else
                                    <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="DPS">During planning stage, options have been considered</option>
                                    <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="NFS">No Options have been presented in the Feasibility Study</option>
                                    
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_adequate" name="score_adequate" value="{{$data->audit->audit_res_adequate_planning}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Risk Assessment/Mitigation</label>
                            <select class="form-control" name="risk_mitigation" id="risk_mitigation" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_risk_mitigation == "ANS")
                                    <option selected value="ANS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="APR">During planning stage, options have been considered</option>
                                    <option value="UNR">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @elseif($data->audit->audit_risk_mitigation == "APR")
                                    <option value="ANS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="APR">During planning stage, options have been considered</option>
                                    <option value="UNR">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @elseif($data->audit->audit_risk_mitigation == "UNR")
                                    <option value="ANS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="APR">During planning stage, options have been considered</option>
                                    <option selected value="UNR">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @else
                                    <option value="ANS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="APR">During planning stage, options have been considered</option>
                                    <option value="UNR">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_risk" name="score_risk" value="{{$data->audit->audit_res_risk_mitigation}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Procurement Process</label>
                            <select class="form-control" name="procurement_process" id="procurement_process" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_procurement_process == "PBP")
                                    <option selected value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDA">During planning stage, options have been considered</option>
                                    <option value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                @elseif($data->audit->audit_procurement_process == "PDA")
                                    <option value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="PDA">During planning stage, options have been considered</option>
                                    <option value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>           
                                @elseif($data->audit->audit_procurement_process == "NPB")
                                    <option value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDA">During planning stage, options have been considered</option>
                                    <option selected value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                @elseif($data->audit->audit_procurement_process == "PDU")
                                    <option value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDA">During planning stage, options have been considered</option>
                                    <option value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option selected value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                @else
                                    <option value="PBP">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDA">During planning stage, options have been considered</option>
                                    <option value="NPB">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    <option value="PDU">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                    
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_procurement" name="score_procurement" value="{{$data->audit->audit_res_procurement_process}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Cost within Benchmark</label>
                            <select class="form-control" name="cost_within_benchmark" id="cost_within_benchmark" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->audit->audit_cost_benchmark == "CAE")
                                    <option selected value="CAE">Contract Amount as awarded is less than or equal to the ABC based on Benchmark Costs for each work item</option>
                                    <option value="CAG">Contract Amount as awarded is greater than or equal to the ABC based on Benchmark Costs for each work item</option>
                                @elseif($data->audit->audit_cost_benchmark == "CAG")
                                    <option value="CAE">Contract Amount as awarded is less than or equal to the ABC based on Benchmark Costs for each work item</option>
                                    <option selected value="CAG">Contract Amount as awarded is greater than or equal to the ABC based on Benchmark Costs for each work item</option>
                                @else
                                    <option value="CAE">Contract Amount as awarded is less than or equal to the ABC based on Benchmark Costs for each work item</option>
                                    <option value="CAG">Contract Amount as awarded is greater than or equal to the ABC based on Benchmark Costs for each work item</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Score:</label>
                                <input class="form-control" id="score_cost" name="score_cost" value="{{$data->audit->audit_res_cost_benchmark}}%" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Total Rating:</label>
                                <input class="form-control" id="score_cost" name="score_cost" value="{{$data->audit->audit_total_rating}}%" disabled>
                            </div>
                        </div>
                        @else
                        @endif
                        
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background:#00b894">{{ __('PROJECT INFORMATION') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <div class="form-group">
                                <label>1. Name of Project:</label>
                                <input class="form-control" name="name_of_project" id="name_of_project" value="{{$data->pin_name_of_project}}" disabled>
                              </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="form-group">
                                <label>Contract Number:</label>
                                <input class="form-control" id="contract_number" name="contract_number" value="{{$data->pin_contract_number}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="form-group">
                                <label>Project Code:</label>
                                <input class="form-control" id="project_code" name="project_code" value="{{$data->pin_project_code}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Project Origin</label>
                            <select class="form-control" name="project_origin" id="project_origin" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->pin_project_origin == "abp18-21")
                                    <option selected value="abp18-21">ABP 2018-2021</option>
                                    <option value="abp22-27">ABP 2022-2027</option>
                                    <option value="commonpurpose">Common Purpose Facility</option>
                                    <option value="priorperiod">Prior Period ABC (for recoverable assets)</option>
                                @elseif($data->pin_project_origin == "abp22-27")
                                    <option value="abp18-21">ABP 2018-2021</option>
                                    <option selected value="abp22-27">ABP 2022-2027</option>
                                    <option value="commonpurpose">Common Purpose Facility</option>
                                    <option value="priorperiod">Prior Period ABC (for recoverable assets)</option>
                                @elseif($data->pin_project_origin == "priorperiod")
                                    <option value="abp18-21">ABP 2018-2021</option>
                                    <option value="abp22-27">ABP 2022-2027</option>
                                    <option value="commonpurpose">Common Purpose Facility</option>
                                    <option selected value="priorperiod">Prior Period ABC (for recoverable assets)</option>
                                @elseif($data->pin_project_origin == "common")
                                    <option value="abp18-21">ABP 2018-2021</option>
                                    <option value="abp22-27">ABP 2022-2027</option>
                                    <option selected value="commonpurpose">Common Purpose Facility</option>
                                    <option value="priorperiod">Prior Period ABC (for recoverable assets)</option>
                                @else
                                    <option value="abp18-21">ABP 2018-2021</option>
                                    <option value="abp22-27">ABP 2022-2027</option>
                                    <option value="commonpurpose">Common Purpose Facility</option>
                                    <option value="priorperiod">Prior Period ABC (for recoverable assets)</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Name of Concessionaire</label>
                            <select class="form-control" name="name_of_concessionaire" id="name_of_concessionaire" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->pin_name_of_concessionaire == "MWSI")
                                    <option selected value="MWSI">MWSI</option>
                                    <option value="MWCI">MWCI</option>
                                @elseif($data->pin_name_of_concessionaire == "MWCI")
                                    <option value="MWSI">MWSI</option>
                                    <option selected value="MWCI">MWCI</option>
                                @else
                                    <option value="MWSI">MWSI</option>
                                    <option value="MWCI">MWCI</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Concession Zone:</label>
                                <input class="form-control" id="concession_zone" name="concession_zone" value="{{$data->pin_concession_zone}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>Name of LGU:</label>
                                <input class="form-control" id="name_of_lgu" name="name_of_lgu" value="{{$data->pin_name_of_lgu}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>Name of Barangay & Street:</label>
                                <input class="form-control" id="name_of_brgy_street" name="name_of_brgy_street" value="{{$data->pin_name_of_brgy_street}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>Longitude:</label>
                                <input class="form-control" id="longitude" name="longitude" value="{{$data->pin_long_geographical_coordinates}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label>Latitude:</label>
                                <input class="form-control" id="latitude" name="latitude" value="{{$data->pin_lati_geographical_coordinates}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>CAPEX Classification</label>
                            <select class="form-control" name="capex_classification" id="capex_classification" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->pin_capex_classification == "Water")
                                    <option selected value="Water">Water</option>
                                    <option value="Wastewater">Wastewater</option>
                                    <option value="Support">Support</option>
                                @elseif($data->pin_capex_classification == "Wastewater")
                                    <option value="Water">Water</option>
                                    <option selected value="Wastewater">Wastewater</option>
                                    <option value="Support">Support</option>
                                @elseif($data->pin_capex_classification == "Support")
                                    <option value="Water">Water</option>
                                    <option value="Wastewater">Wastewater</option>
                                    <option selected value="Support">Support</option>
                                @else
                                <option value="Water">Water</option>
                                <option value="Wastewater">Wastewater</option>
                                <option value="Support">Support</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>CAPEX Subclass</label>
                            <select class="form-control" name="capex_subclass" id="capex_subclass" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->pin_capex_subclass == "Water Sources and Treatment")
                                    <option selected value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Pump Station & Reservoir")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option selected value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Pipe Laying")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option selected value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Non-Revenue Water Control Projects")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option selected value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Treatment Plant")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option selected value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Sewage Conveyance")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option selected value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Sanitation Projects")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option selected value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Information Analysis")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option selected value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Resiliency/Reliability")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option selected value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Building Projects")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option selected value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @elseif($data->pin_capex_subclass == "Special Projects")
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option selected value="Special Projects">Special Projects</option>
                                @else
                                    <option value="Water Sources and Treatment">Water Sources and Treatment</option>
                                    <option value="Pump Station & Reservoir">Pump Station & Reservoir</option>
                                    <option value="Pipe Laying">Pipe Laying</option>
                                    <option value="Non-Revenue Water Control Projects">Non-Revenue Water Control Projects</option>
                                    <option value="Treatment Plant">Treatment Plant</option>
                                    <option value="Sewage Conveyance">Sewage Conveyance</option>
                                    <option value="Sanitation Projects">Sanitation Projects</option>
                                    <option value="Information Analysis">Information Analysis</option>
                                    <option value="Resiliency/Reliability">Resiliency/Reliability</option>
                                    <option value="Building Projects">Building Projects</option>
                                    <option value="Special Projects">Special Projects</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" style="background: #fdcb6e">{{ __('PROJECT PREPARATION AND PROCUREMENT') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Approved Budget for the Contract (ABC):</label>
                                <input class="form-control" id="approved_budget" name="approved_budget" value="{{$data->projprep->ppp_approved_budget_contract}}" disabled>
                            </div>
                        </div>
                        {{-- START OF TABLE --}}
                        <div class="col-md-12 mb-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">Contract Component</th>
                                        <th style="text-align:center">Awarded Contract Cost</th>
                                        <th style="text-align:center">Revised Contract Cost</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align:center">Feasibility Study</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_fs_awarded_contract}}</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_fs_revised_contract}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Business Case Study</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_bc_awarded_contract}}</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_bc_revised_contract}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Detailed Engineering Design</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_ded_awarded_contract}}</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_ded_revised_contract}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Construction/Construction Supervision</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_con_cs_awarded_contract}}</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_con_cs_revised_contract}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Operations Management</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_om_awarded_contract}}</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_om_revised_contract}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Design and Build</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_dnb_awarded_contract}}</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_dnb_revised_contract}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Design-Build-Operate</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_dbo_awarded_contract}}</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_dbo_revised_contract}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">Other Indicate Name</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_others_awarded_contract}}</td>
                                        <td style="text-align:center">{{$data->projprep->ppp_others_revised_contract}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                        {{-- END OF TABLE --}}
                        <div class="col-md-6 mb-3">
                            <label>Contract Type:</label>
                            <select class="form-control" name="contract_type" id="contract_type" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->projprep->ppp_contract_type == "FIDIC")
                                    <option selected value="FIDIC">FIDIC</option>
                                    <option value="Hybrid">Hybrid</option>
                                @elseif($data->projprep->ppp_contract_type == "Hybrid")
                                    <option value="FIDIC">FIDIC</option>
                                    <option selected value="Hybrid">Hybrid</option>
                                @else
                                    <option value="FIDIC">FIDIC</option>
                                    <option value="Hybrid">Hybrid</option>
                               
                                @endif
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Mode of Procurement:</label>
                            <select class="form-control" name="mode_of_procurement" id="mode_of_procurement" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->projprep->ppp_mode_of_procurement == "Competitive Bidding")
                                    <option selected value="Competitive Bidding">Competitive Bidding</option>
                                    <option value="Commercial Practive(Canvass)">Commercial Practive(Canvass)</option>
                                    <option value="Commercial Practive(Repeat Order)">Commercial Practive(Repeat Order)</option>
                                    <option value="Commercial Practive(Sole Distributor)">Commercial Practive(Sole Distributor)</option>
                                    <option value="By Administration(Non-competitive)">By Administration(Non-competitive)</option>
                                @elseif($data->projprep->ppp_mode_of_procurement == "Commercial Practive(Canvass)")
                                    <option value="Competitive Bidding">Competitive Bidding</option>
                                    <option selected value="Commercial Practive(Canvass)">Commercial Practive(Canvass)</option>
                                    <option value="Commercial Practive(Repeat Order)">Commercial Practive(Repeat Order)</option>
                                    <option value="Commercial Practive(Sole Distributor)">Commercial Practive(Sole Distributor)</option>
                                    <option value="By Administration(Non-competitive)">By Administration(Non-competitive)</option>
                                @elseif($data->projprep->ppp_mode_of_procurement == "Commercial Practive(Repeat Order)")
                                    <option value="Competitive Bidding">Competitive Bidding</option>
                                    <option value="Commercial Practive(Canvass)">Commercial Practive(Canvass)</option>
                                    <option selected value="Commercial Practive(Repeat Order)">Commercial Practive(Repeat Order)</option>
                                    <option value="Commercial Practive(Sole Distributor)">Commercial Practive(Sole Distributor)</option>
                                    <option value="By Administration(Non-competitive)">By Administration(Non-competitive)</option>
                                @elseif($data->projprep->ppp_mode_of_procurement == "Commercial Practive(Sole Distributor)")
                                    <option value="Competitive Bidding">Competitive Bidding</option>
                                    <option value="Commercial Practive(Canvass)">Commercial Practive(Canvass)</option>
                                    <option value="Commercial Practive(Repeat Order)">Commercial Practive(Repeat Order)</option>
                                    <option selected value="Commercial Practive(Sole Distributor)">Commercial Practive(Sole Distributor)</option>
                                    <option value="By Administration(Non-competitive)">By Administration(Non-competitive)</option>
                                @elseif($data->projprep->ppp_mode_of_procurement == "By Administration(Non-competitive)")
                                    <option value="Competitive Bidding">Competitive Bidding</option>
                                    <option value="Commercial Practive(Canvass)">Commercial Practive(Canvass)</option>
                                    <option value="Commercial Practive(Repeat Order)">Commercial Practive(Repeat Order)</option>
                                    <option value="Commercial Practive(Sole Distributor)">Commercial Practive(Sole Distributor)</option>
                                    <option selected value="By Administration(Non-competitive)">By Administration(Non-competitive)</option>
                                @else
                                    <option value="Competitive Bidding">Competitive Bidding</option>
                                    <option value="Commercial Practive(Canvass)">Commercial Practive(Canvass)</option>
                                    <option value="Commercial Practive(Repeat Order)">Commercial Practive(Repeat Order)</option>
                                    <option value="Commercial Practive(Sole Distributor)">Commercial Practive(Sole Distributor)</option>
                                    <option value="By Administration(Non-competitive)">By Administration(Non-competitive)</option>
                               
                                @endif
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Procurement Threshold(PhP in Million):</label>
                                <input class="form-control" id="procurement_threshold" name="procurement_threshold" value="{{$data->projprep->ppp_procurement_threshold}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Availability of Procurement Documents:</label>
                            <select class="form-control" name="procure_docs" id="procure_docs" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->projprep->ppp_procure_docs == "Absence(w/o documents)")
                                    <option selected value="Absence(w/o documents)">Absence(w/o documents)</option>
                                    <option value="Presence, reviewed, and validated">Presence, reviewed, and validated</option>
                                @elseif($data->projprep->ppp_procure_docs == "Presence, reviewed, and validated")
                                    <option value="Absence(w/o documents)">Absence(w/o documents)</option>
                                    <option selected value="Presence, reviewed, and validated">Presence, reviewed, and validated</option>
                                @else
                                    <option value="Absence(w/o documents)">Absence(w/o documents)</option>
                                    <option value="Presence, reviewed, and validated">Presence, reviewed, and validated</option>
                               
                                @endif
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Risk Assessment:</label>
                            <select class="form-control" name="risk_assessment" id="risk_assessment" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->projprep->ppp_risk_assessment == "Unavailable")
                                    <option selected value="Unavailable">Unavailable</option>
                                    <option value="Part of Planning document">Part of Planning document</option>
                                @elseif($data->projprep->ppp_risk_assessment == "Part of Planning document")
                                    <option value="Unavailable">Unavailable</option>
                                    <option selected value="Part of Planning document">Part of Planning document</option>
                                @else
                                    <option value="Unavailable">Unavailable</option>
                                    <option value="Part of Planning document">Part of Planning document</option>
                               
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background: #00cec9">{{ __('PROJECT IMPLEMENTATION') }}</div>
                <div class="card-body">
                    <div class="row">
                        {{-- START OF TABLE --}}
                        <div class="col-md-12 mb-3">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th rowspan="4" style="text-align:center">Contract Component</th>
                                        <th colspan="15" style="text-align:center">Project Accomplishment</th>
                                        <th colspan="4" style="text-align:center">Contract Duration</th>
                                        
                                    </tr>
                                    <tr>
                                        <th colspan="10" style="text-align:center">In Percentage(%)</th>
                                        <th colspan="5" style="text-align:center">In Million (PhP)</th>
                                        <th rowspan="3"style="text-align:center">Start</th>
                                        <th rowspan="3" style="text-align:center">Original End</th>
                                        <th rowspan="3" style="text-align:center">ATE</th>
                                        <th rowspan="3" style="text-align:center">Actual End</th>
                                        
                                    </tr>
                                    <tr>
                                        <th colspan="2" style="text-align:center">'17</th>
                                        <th colspan="2" style="text-align:center">'18</th>
                                        <th colspan="2" style="text-align:center">'19</th>
                                        <th colspan="2" style="text-align:center">'20</th>
                                        <th colspan="2" style="text-align:center">'21</th>
                                        <th rowspan="2" style="text-align:center">'17</th>
                                        <th rowspan="2" style="text-align:center">'18</th>
                                        <th rowspan="2" style="text-align:center">'19</th>
                                        <th rowspan="2" style="text-align:center">'20</th>
                                        <th rowspan="2" style="text-align:center">'21</th>
                                        
                                    </tr>
                                    <tr>
                                        
                                        <th style="text-align:center">T</th>
                                        <th style="text-align:center">A</th>
                                        <th style="text-align:center">T</th>
                                        <th style="text-align:center">A</th>
                                        <th style="text-align:center">T</th>
                                        <th style="text-align:center">A</th>
                                        <th style="text-align:center">T</th>
                                        <th style="text-align:center">A</th>
                                        <th style="text-align:center">T</th>
                                        <th style="text-align:center">A</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align:center">a.Feasibility Study</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_targ_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_actu_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_targ_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_actu_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_targ_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_actu_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_targ_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_actu_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_targ_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_actu_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_2017_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_2018_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_2019_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_2020_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_2021_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_startdate}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_originalend}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_ate}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_fs_actualend}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">b. Business Case Study</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_targ_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_actu_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_targ_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_actu_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_targ_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_actu_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_targ_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_actu_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_targ_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_actu_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_2017_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_2018_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_2019_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_2020_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_2021_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_startdate}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_originalend}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_ate}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_bc_actualend}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">c. Detailed Engineering Design</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_targ_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_actu_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_targ_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_actu_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_targ_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_actu_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_targ_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_actu_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_targ_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_actu_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_2017_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_2018_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_2019_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_2020_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_2021_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_startdate}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_originalend}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_ate}}</td>
                                        <td style="text-align:center">{{$data->projimplemone->pimo_ded_actualend}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">d. Construction/Construction Supervision</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_targ_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_actu_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_targ_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_actu_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_targ_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_actu_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_targ_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_actu_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_targ_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_actu_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_2017_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_2018_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_2019_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_2020_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_2021_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_startdate}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_originalend}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_ate}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_con_cs_actualend}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">e. Operations Management</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_targ_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_actu_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_targ_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_actu_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_targ_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_actu_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_targ_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_actu_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_targ_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_actu_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_2017_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_2018_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_2019_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_2020_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_2021_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_startdate}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_originalend}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_ate}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_om_actualend}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">f. Design and Build</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_targ_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_actu_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_targ_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_actu_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_targ_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_actu_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_targ_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_actu_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_targ_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_actu_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_2017_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_2018_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_2019_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_2020_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_2021_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_startdate}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_originalend}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_ate}}</td>
                                        <td style="text-align:center">{{$data->projimplemtwo->pimt_dnb_actualend}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">g. Design-Build-Operate</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_targ_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_actu_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_targ_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_actu_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_targ_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_actu_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_targ_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_actu_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_targ_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_actu_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_2017_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_2018_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_2019_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_2020_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_2021_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_startdate}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_originalend}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_ate}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_dbo_actualend}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">h. Other Indicate Name</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_targ_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_actu_2017_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_targ_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_actu_2018_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_targ_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_actu_2019_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_targ_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_actu_2020_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_targ_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_actu_2021_phyprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_2017_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_2018_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_2019_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_2020_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_2021_disprogress}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_startdate}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_originalend}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_ate}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_others_actualend}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                        {{-- END OF TABLE --}}
                        <div class="col-md-4 mb-3">
                            <label>Current Project Status:</label>
                            <select class="form-control" name="project_status" id="project_status" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->projimthree->pimr_current_project_status == "Ongoing")
                                    <option selected value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Closed">Closed</option>
                                    <option value="Suspended">Suspended(verify approval by MWSS RO)</option>
                                    {{-- <option value="Slippage">Slippage(auditor to compute and indicate)</option> --}}
                                @elseif($data->projimthree->pimr_current_project_status == "Completed")
                                    <option value="Ongoing">Ongoing</option>
                                    <option selected value="Completed">Completed</option>
                                    <option value="Closed">Closed</option>
                                    <option value="Suspended">Suspended(verify approval by MWSS RO)</option>
                                    {{-- <option value="Slippage">Slippage(auditor to compute and indicate)</option> --}}
                                @elseif($data->projimthree->pimr_current_project_status == "Closed")
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                    <option selected value="Closed">Closed</option>
                                    <option value="Suspended">Suspended(verify approval by MWSS RO)</option>
                                    {{-- <option value="Slippage">Slippage(auditor to compute and indicate)</option> --}}
                                @elseif($data->projimthree->pimr_current_project_status == "Suspended")
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Closed">Closed</option>
                                    <option selected value="Suspended">Suspended(verify approval by MWSS RO)</option>
                                    {{-- <option value="Slippage">Slippage(auditor to compute and indicate)</option> --}}
                                @else
                                    <option value="Ongoing">Ongoing</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Closed">Closed</option>
                                    <option value="Suspended">Suspended(verify approval by MWSS RO)</option>
                                    {{-- <option value="Slippage">Slippage(auditor to compute and indicate)</option> --}}
                               
                                @endif
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Test to Perform:</label>
                                <input class="form-control" id="test_to_perform" name="test_to_perform" value="{{$data->projimthree->pimr_test_to_perform}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Audit Coverage:</label>
                                <input class="form-control" id="audit_coverage" name="audit_coverage" value="{{$data->projimthree->pimr_audit_coverage}}" disabled>
                            </div>
                        </div>
                        {{-- START OF TABLE --}}
                        <div class="col-md-12 mb-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th rowspan="2">Variation Register</th>
                                        <th style="text-align:center">Variation Ref No.</th>
                                        <th style="text-align:center">Description</th>
                                        <th style="text-align:center">Variation Cost(PhP in Million)</th>
                                        <th style="text-align:center">Approved Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_variation_ref_num}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_variation_desc}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_variation_cost}}</td>
                                        <td style="text-align:center">{{$data->projimthree->pimr_variation_desc}}</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div> 
                        {{-- END OF TABLE --}}
                        @if($cause_of_delay)
                        <div class="col-md-4 mb-3">
                            <label>Cause of Delay:</label>
                            @foreach ($cause_of_delay as $causeofdelay)
                                <option value="2017">{{$causeofdelay}}</option>                                                   
                            @endforeach
                            <select class="selectpicker"  multiple aria-label="size 3 select example" name="project_year" id="project_year" style="width: 100%; cursor: pointer" disabled>
                                @foreach ($cause_of_delay as $causeofdelay)
                                    <option selected value="2017">{{$causeofdelay}}</option>                                                   
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="col-md-4 mb-3" style=" display: none;">
                            <label>Cause of Delay:</label>
                            <select class="selectpicker" multiple aria-label="size 3 select example" name="cause_of_delay[]" id="cause_of_delay" style="width: 100%; cursor: pointer;" multiple>
                                <option value="" selected disabled>Select cause of delay</option>
                                    <option value="Force Majeure">Force Majeure</option>                                
                                    <option value="ROW">ROW</option>                                
                                    <option value="Legal/Political">Legal/Political</option>                       
                                    <option value="Adaptation">Adaptation</option>                       
                                    <option value="Procurement">Procurement</option>                       
                                    <option value="Unforseeable Obstruction">Unforseeable Obstruction</option>                       
                                    <option value="Recurring Issues">Recurring Issues</option>                       
                                    <option value="Poor Planning">Poor Planning/Risk Management</option>                       
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Other cause of delay:</label>
                                <input class="form-control" id="other_cause_of_delay" name="other_cause_of_delay" value="{{$data->projimthree->pimr_cause_of_delay_others}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label>Cost Analysis:</label>
                            <select class="form-control" name="cost_analysis" id="cost_analysis" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->projimthree->pimr_cost_analysis == "Within Benchmark")
                                    <option selected value="Within Benchmark">Within Benchmark</option>
                                    <option value="Overvalued">Overvalued</option>
                                @elseif($data->projimthree->pimr_cost_analysis == "Overvalued")
                                    <option value="Within Benchmark">Within Benchmark</option>
                                    <option selected value="Overvalued">Overvalued</option>
                                @else
                                    <option value="Within Benchmark">Within Benchmark</option>
                                    <option value="Overvalued">Overvalued</option>
                               
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background: #0984e3">{{ __('OPERATIONS, MONITORING & ADMINISTRATION') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                              <label>Name of Hazard:</label>
                              <textarea class="form-control" rows="3" name="name_of_hazard" id="name_of_hazard" disabled>{{$data->projopex->oma_name_of_hazard}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                              <label>Date Occurred:</label>
                              <textarea class="form-control" rows="3" name="date_occured" id="date_occured" value="" disabled>{{$data->projopex->oma_date_occured}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                              <label>Classification of Hazard:</label>
                              <textarea class="form-control" rows="3" name="classification_of_hazard" id="classification_of_hazard" value="" disabled>{{$data->projopex->oma_classification_hazard}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                              <label>Cost Incurred:</label>
                              <textarea class="form-control" rows="3" name="cost_incurred" id="cost_incurred" value="" disabled>{{$data->projopex->oma_cost_incurred}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>As-Built/In-Place Features:</label>
                            <select class="form-control" name="in_place_features" id="in_place_features" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->projopex->oma_in_place_features == "CAD")
                                    <option selected value="CAD">Compliant with approved drawings/specifications</option>
                                    <option value="NC">Non-Compliant</option>
                                @elseif($data->projopex->oma_in_place_features == "NC")
                                    <option value="CAD">Compliant with approved drawings/specifications</option>
                                    <option selected value="NC">Non-Compliant</option>
                                @else
                                    <option value="CAD">Compliant with approved drawings/specifications</option>
                                    <option  value="NC">Non-Compliant</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Utilization/Usefulness:</label>
                            <select class="form-control" name="utilization" id="utilization" style="width: 100%; cursor: pointer" disabled>
                                <option value="" selected disabled></option>
                                @if($data->projopex->oma_utilization == "1")
                                    <option selected value="1">Effectively exceeds 70% of the time in use</option>
                                    <option value="2">Partially effective or 50% to 70% in use</option>
                                    <option value="3">Ineffective or 50% in use</option>
                                    <option value="4">Not Useful</option>
                                @elseif($data->projopex->oma_utilization == "2")
                                    <option value="1">Effectively exceeds 70% of the time in use</option>
                                    <option selected value="2">Partially effective or 50% to 70% in use</option>
                                    <option value="3">Ineffective or 50% in use</option>
                                    <option value="4">Not Useful</option>
                                @elseif($data->projopex->oma_utilization == "3")
                                    <option value="1">Effectively exceeds 70% of the time in use</option>
                                    <option value="2">Partially effective or 50% to 70% in use</option>
                                    <option selected value="3">Ineffective or 50% in use</option>
                                    <option value="4">Not Useful</option>
                                @elseif($data->projopex->oma_utilization == "4")
                                    <option value="1">Effectively exceeds 70% of the time in use</option>
                                    <option value="2">Partially effective or 50% to 70% in use</option>
                                    <option value="3">Ineffective or 50% in use</option>
                                    <option selected value="4">Not Useful</option>
                                @else
                                    <option value="1">Effectively exceeds 70% of the time in use</option>
                                    <option value="2">Partially effective or 50% to 70% in use</option>
                                    <option value="3">Ineffective or 50% in use</option>
                                    <option value="4">Not Useful</option>
                                @endif
                            </select>
                        </div>
                        {{-- START OF TABLE --}}
                        <div class="col-md-12 mb-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="text-align:center" rowspan="2">Major OPEX Items</th>
                                        <th style="text-align:center" colspan="5">Amount Incurred(PhP) Year-ends</th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:center">'17</th>
                                        <th style="text-align:center">'18</th>
                                        <th style="text-align:center">'19</th>
                                        <th style="text-align:center">'20</th>
                                        <th style="text-align:center">'21</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align:center">a.Salaries and Wages</td>
                                        <td style="text-align:center">{{$data->projopex->oma_salwag_2017_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_salwag_2018_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_salwag_2019_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_salwag_2020_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_salwag_2021_opex}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">b.Power and Light</td>
                                        <td style="text-align:center">{{$data->projopex->oma_powlight_2017_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_powlight_2018_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_powlight_2019_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_powlight_2020_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_powlight_2021_opex}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">c.Repairs and Maintenance</td>
                                        <td style="text-align:center">{{$data->projopex->oma_repmain_2017_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_repmain_2018_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_repmain_2019_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_repmain_2020_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_repmain_2021_opex}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">d.Contracted Services</td>
                                        <td style="text-align:center">{{$data->projopex->oma_conservice_2017_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_conservice_2018_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_conservice_2019_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_conservice_2020_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_conservice_2021_opex}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">e.Treatment Cost</td>
                                        <td style="text-align:center">{{$data->projopex->oma_treatcost_2017_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_treatcost_2018_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_treatcost_2019_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_treatcost_2020_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_treatcost_2021_opex}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">f.Connection Charges</td>
                                        <td style="text-align:center">{{$data->projopex->oma_concharge_2017_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_concharge_2018_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_concharge_2019_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_concharge_2020_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_concharge_2021_opex}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">g.Regulatory Cost</td>
                                        <td style="text-align:center">{{$data->projopex->oma_regcost_2017_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_regcost_2018_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_regcost_2019_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_regcost_2020_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_regcost_2021_opex}}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center">h.Other Direct Cost</td>
                                        <td style="text-align:center">{{$data->projopex->oma_others_2017_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_others_2018_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_others_2019_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_others_2020_opex}}</td>
                                        <td style="text-align:center">{{$data->projopex->oma_others_2021_opex}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                        {{-- END OF TABLE --}}
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <label>Audit Observation Highlights:</label>
                              <textarea class="form-control" rows="2" name="audit_obsevation_highlights" id="audit_obsevation_highlights" disabled>{{$data->projopex->arm_audit_obeservation_highlights}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <label>Audit Response:</label>
                              <textarea class="form-control" rows="2" name="audit_response" id="audit_response" disabled>{{$data->projopex->arm_audit_response}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


@endsection
@push('scripts')
    <script>
        // new Zooming().listen('img#mugshot')
        $(document).ready(function(){

            $(document).on('click', '.edit_details', function(event){
                event.preventDefault();
                var id = $(this).attr('id');
                $.ajax({
                url:'/projects/'+id+'/edit/',
                dataType:'json',
                success:function(data){
                    $('.edit_details').hide();
                    $('.save_details').show();
                    $('#update_files').show();
                    $('#hidden_id').val(id);
                    $('#name_of_project').prop("disabled",false).val(data.result.pin_name_of_project);         
                }
                });
            });

            // $('#project_status').on('change', function() {
            //     var stage = this.value;
            //     // console.log(stage);
            //     if (stage == 'Ongoing'){
            //         // console.log("Prudence")
            //         document.getElementById("test_to_perform").value = 'PRUDENCE';
            //         document.getElementById("audit_coverage").value = 'PARTIAL AUDIT';
            //         $('#prudence').show();
            //         $('#effciency').hide();
            //         $('#total_score_div').show();
            //         $('#computebutton_div').show();

            //     }else if(stage == 'Completed'){
            //         document.getElementById("test_to_perform").value = 'PRUDENCE AND EFFICIENCY';
            //         document.getElementById("audit_coverage").value = 'FULL AUDIT';
            //         $('#prudence').show();
            //         $('#effciency').show();
            //         $('#total_score_div').show();
            //         $('#computebutton_div').show();

            //     }else if(stage == 'Closed'){
            //         document.getElementById("test_to_perform").value = 'PRUDENCE AND EFFICIENCY';
            //         document.getElementById("audit_coverage").value = 'FULL AUDIT';
            //         $('#prudence').show();
            //         $('#effciency').show();
            //         $('#total_score_div').show();
            //         $('#computebutton_div').show();

            //     }else if(stage == 'Suspended'){
            //         document.getElementById("test_to_perform").value = 'NOT APPLICABLE';
            //         document.getElementById("audit_coverage").value = 'NOT APPLICABLE';
            //         $('#effciency').hide();
            //         $('#prudence').hide();
            //         $('#total_score_div').hide();
            //         $('#computebutton_div').hide();

            //     }else{

            //     }
            // });
            
            $('#print').click(function() {
                window.print();
            });
            
        })
    </script>
@endpush