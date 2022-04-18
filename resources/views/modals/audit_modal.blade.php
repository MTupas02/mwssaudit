<div class="modal fade bd-example-modal-lg" id="add_new_audit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                Audit
                </ul>
            </div>
            <div class="modal-body">
                <form method="POST" id="test_perform_form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        @if($data->projimplemtwo->pimt_test_to_perform == "PRUDENCE")
                        <div class="col-md-8 mb-3">
                            <label>Relevance to Service Obligations:</label>
                            <select class="form-control" name="relevance_obligation" id="relevance_obligation" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                <option value="CSP">Components of a System Project in the ABP</option>
                                <option value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                <option value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                <option value="PCA">Project is outside the concession area</option>
                                <option value="CSR">Corporate Social Responsibility projects</option>
                                <option value="PRA">Project is not indicated in the ABP and done without prior approval</option>                    
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_relevance" name="results_relevance" onchange="myFunction(this.value)" value="">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Adequate Planning:</label>
                            <select class="form-control" name="adequate_planning" id="adequate_planning" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                <option value="DPS">During planning stage, options have been considered</option>
                                <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                <option value="NFS">No Options have been presented in the Feasibility Study</option>                   
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_adequate" name="results_adequate">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Risk Assessment and Mitigation:</label>
                            <select class="form-control" name="risk_assessment_mitigation" id="risk_assessment_mitigation" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="ANS">Availability of necessary risk analysis and mitigation-related documents during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                <option value="APR">All possible risks have been identified and mitigated during planning stage</option>
                                <option value="UNR">Unavailability of necessary risk analysis and mitigation-related documents during planning stage which are required prior to implementation or delivery of the project/contract</option>                    
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_risk" name="results_risk">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Procurement Process:</label>
                            <select class="form-control" name="procurement_process" id="procurement_process" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="PBP">Public bidding was undertaken for the procurement of projects costing more than the Threshold Value</option>
                                <option value="PDA">Procurement documents are available for projects costing less than or equal to the Threshold Value</option>
                                <option value="NPB">No public bidding was undertaken for the procurement of projects costing more than the Threshold value</option>                      
                                <option value="PDU">Project documents are unavailable for projects costing less than or equal to the Threshold Value</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_procurement" name="results_procurement">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Cost within Benchmark:</label>
                            <select class="form-control" name="cost_within_benchmark" id="cost_within_benchmark" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="CAE">Contract Amount as awarded is less than or equal to the ABC based on Benchmark Costs for each work item</option>
                                <option value="CAG">Contract Amount as awarded is greater than or equal to the ABC based on Benchmark Costs for each work item</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_cost" name="results_cost">
                            </div>
                        </div>
                        @elseif($data->projimplemtwo->pimt_test_to_perform == "PRUDENCE AND EFFICIENCY")
                        <div class="col-md-8 mb-3">
                            <label>Relevance to Service Obligations:</label>
                            <select class="form-control" name="relevance_obligation" id="relevance_obligation" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="ABP">Project is included in the Approved Business Plan(ABP)</option>
                                <option value="CSP">Components of a System Project in the ABP</option>
                                <option value="SOB">Project is not clearly indicated in the ABP but relevant to the delivery of the Service Obligation</option>
                                <option value="NSO">Projects which are not directly related to Service Obligations but supports the delivery of water and wastewater services</option>
                                <option value="PCA">Project is outside the concession area</option>
                                <option value="CSR">Corporate Social Responsibility projects</option>
                                <option value="PRA">Project is not indicated in the ABP and done without prior approval</option>                    
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_relevance" name="results_relevance" onchange="myFunction(this.value)" value="">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Adequate Planning:</label>
                            <select class="form-control" name="adequate_planning" id="adequate_planning" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="AVS">Availability of necessary studies during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                <option value="DPS">During planning stage, options have been considered</option>
                                <option value="UNS">Unavailability of necessary study during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                <option value="NFS">No Options have been presented in the Feasibility Study</option>                   
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_adequate" name="results_adequate">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Risk Assessment and Mitigation:</label>
                            <select class="form-control" name="risk_assessment_mitigation" id="risk_assessment_mitigation" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="ANS">Availability of necessary risk analysis and mitigation-related documents during planning stage which are required prior to implementation or delivery of the project/contract</option>
                                <option value="APR">All possible risks have been identified and mitigated during planning stage</option>
                                <option value="UNR">Unavailability of necessary risk analysis and mitigation-related documents during planning stage which are required prior to implementation or delivery of the project/contract</option>                    
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_risk" name="results_risk">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Procurement Process:</label>
                            <select class="form-control" name="procurement_process" id="procurement_process" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="PBP">Public bidding was undertaken for the procurement of projects costing more than the Threshold Value</option>
                                <option value="PDA">Procurement documents are available for projects costing less than or equal to the Threshold Value</option>
                                <option value="NPB">No public bidding was undertaken for the procurement of projects costing more than the Threshold value</option>                      
                                <option value="PDU">Project documents are unavailable for projects costing less than or equal to the Threshold Value</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_procurement" name="results_procurement">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Cost within Benchmark:</label>
                            <select class="form-control" name="cost_within_benchmark" id="cost_within_benchmark" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="CAE">Contract Amount as awarded is less than or equal to the ABC based on Benchmark Costs for each work item</option>
                                <option value="CAG">Contract Amount as awarded is greater than or equal to the ABC based on Benchmark Costs for each work item</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_cost" name="results_cost">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Timeliness:</label>
                            <select class="form-control" name="timeliness" id="timeliness" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="ONT">On-Time</option>
                                <option value="SLB">Slippage below or equal 15%</option>
                                <option value="SLG">Slippage greater than 15%</option>                      
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_timeliness" name="results_timeliness">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Safety:</label>
                            <select class="form-control" name="safety" id="safety" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="NMA">No major accidents or less than 5 minor accidents</option>
                                <option value="NMI">No major accidents or with 5-10 minor accidents</option>
                                <option value="AMI">At least 1 major accident or more than 10 minor accidents</option>                      
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_safety" name="results_safety">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Specifications:</label>
                            <select class="form-control" name="specifications" id="specifications" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="AAP">All are in accordance to plans, specification, and quality standards</option>
                                <option value="OBA">Observed items that are not in accordance to plans, specifications, and quality standards</option>                      
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_specifications" name="results_specifications">
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label>Final Costs:</label>
                            <select class="form-control" name="final_costs" id="final_costs" style="width: 100%; cursor: pointer">
                                <option value="" selected disabled>Please select an option</option>
                                <option value="COB">Cost overrun is 15% and below</option>
                                <option value="COM">Cost overrun is 15% but not more than 30%</option>
                                <option value="COA">Cost overrun above 30%</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label>Results:</label>
                                <input class="form-control" id="results_final_costs" name="results_final_costs">
                            </div>
                        </div>
                        @else
                        @endif
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Project Code:</label>
                                <input class="form-control" id="project_code" name="project_code" value="{{$data->id}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label>Test to Perform:</label>
                                <input class="form-control" id="test_to_perform" name="test_to_perform" value="{{$data->projimplemtwo->pimt_test_to_perform }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label>Total Score:</label>
                                <input class="form-control" id="total_score" name="total_score">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary px-4" onclick="getVal();">Compute</button>
                        </div>
                        <div class="col-md-8 text-right">
                            
                        </div>
                        <div class="col-md-6">
                            <label class="mb-0 attach">Attach Files/Pictures:</label>
                            <input type="file" name="file[]" class="pt-2 attach" multiple>
                        </div>
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary px-4" type="submit" id="place_action">Save</button>
                        </div>
                        <input type="hidden" name="project_id" id="project_id" value="{{$data->id}}">
                        <input type="hidden" name="hidden_id" id="hidden_id">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>