<div class="modal fade bd-example-modal-lg" id="add_new_project_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-pills" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#frst" aria-controls="frst" role="tab" data-toggle="tab"><h6 class="mb-0">Project Information</h6></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#secnd" aria-controls="secnd" role="tab" data-toggle="tab"><h6 class="mb-0">Project Preparation & Procurement</h6></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#third" aria-controls="third" role="tab" data-toggle="tab"><h6 class="mb-0">Project Implementation</h6></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fourth" aria-controls="fourth" role="tab" data-toggle="tab"><h6 class="mb-0">Operations, Monitoring & Administration</h6></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fifth" aria-controls="fifth" role="tab" data-toggle="tab"><h6 class="mb-0">Audit Test</h6></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#sixth" aria-controls="sixth" role="tab" data-toggle="tab"><h6 class="mb-0">Audit Test</h6></a>
                    </li> --}}
                </ul>
            </div>
            <div class="modal-body">
                <form method="POST" id="project_form" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content">
                        <div role="tab" class="tab-pane active" id="frst">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label>1. Name of Project:</label>
                                      <textarea class="form-control" rows="2" name="name_of_project" id="name_of_project"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="contract_number">Contract Number</label>
                                    <input class="form-control" id="contract_number" name="contract_number">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>2. Project Origin:</label>
                                    <select class="form-control" name="project_origin" id="project_origin" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select project origin</option>
                                            <option value="abp18-21">ABP 2018-2021</option>                                
                                            <option value="abp22-27">ABP 2022-2027</option>                                
                                            <option value="commonpurpose">Common Purpose Facility</option>                                
                                            <option value="priorperiod">Prior Period ABC (for recoverable assets)</option>              
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="project_code">3. Project Code:</label>
                                    <input class="form-control" id="project_code" name="project_code">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>4. Name of Concessionaire</label>
                                    <select class="form-control" name="name_of_concessionaire" id="name_of_concessionaire" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select concessionaire</option>
                                            <option value="MWSI">Maynilad</option>                                
                                            <option value="MWCI">Manila Water</option>              
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="concession_zone">5a. Concession Zone:</label>
                                    <input class="form-control" id="concession_zone" name="concession_zone" readonly>
                                </div>                           
                                <div class="col-md-3 mb-3">
                                    <label for="name_of_lgu">5b. Name of LGU:</label>
                                    <input class="form-control" id="name_of_lgu" name="name_of_lgu">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="name_of_brgy_street">5c. Name of Barangay and Street</label>
                                    <input class="form-control" id="name_of_brgy_street" name="name_of_brgy_street">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="longitude">5d. Longitude</label>
                                    <input class="form-control" id="longitude" name="longitude">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="latitude">5e. Latitude</label>
                                    <input class="form-control" id="latitude" name="latitude">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>6a. CAPEX Classification</label>
                                    <select class="form-control" name="capex_classification" id="capex_classification" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select type of project</option>
                                            <option value="Water">Water</option>                                
                                            <option value="Wastewater">Wastewater</option>                                
                                            <option value="Support">Support</option>                       
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>6b. CAPEX Subclass</label>
                                    <select class="form-control" name="capex_subclass" id="capex_subclass" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select subtype of project</option>
                                        <option value="Water Sources and Treatment">WATER SOURCES AND TREATMENT</option>
                                        <option value="Pump Station & Reservoir">PUMP STATION & RESERVOIR</option>
                                        <option value="Pipe Laying">PIPE LAYING</option>
                                        <option value="Non-Revenue Water Control Projects">NON-REVENUE WATER CONTROL PROJECTS</option>
                                        <option value="Treatment Plant">TREATMENT PLANT</option>
                                        <option value="Sewage Conveyance">SEWAGE CONVEYANCE</option>
                                        <option value="Sanitation Projects">SANITATION PROJECTS</option>
                                        <option value="Information Analysis">INFORMATION ANALYSIS</option>
                                        <option value="Resiliency/Reliability">RESILIENCY/RELIABILITY</option>
                                        <option value="Building Projects">BUILDING PROJECTS</option>
                                        <option value="Special Projects">SPECIAL PROJECTS</option>                            
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div role="tab" class="tab-pane" id="secnd">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="approved_budget_contract">7. Approved Budget for the Contract(PhP in Million):</label>
                                    <input class="form-control" id="approved_budget_contract" name="approved_budget_contract">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Project Year:</label>
                                    <select class="form-control" name="project_year" id="project_year" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select type of project</option>
                                            <option value="2017">2017</option>                                
                                            <option value="2018">2018</option>                                
                                            <option value="2019">2019</option>                        
                                            <option value="2020">2020</option>                       
                                            <option value="2021">2021</option>                     
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Is Project more than 100M?</label>
                                    <select class="form-control" name="project_million" id="project_million" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select type of project</option>
                                            <option value="Yes">Yes</option>                                
                                            <option value="No">No</option>                                                      
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="project_size">Project Size:</label>
                                    <input class="form-control" id="project_size" name="project_size" readonly>
                                </div>
                                {{-- <input type="hidden" name="threshold_budget" id="threshold_budget" value="100,000,000"> --}}
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="feasibility_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8a. Feasibility Study(FS)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="fs_awarded_contract" name="fs_awarded_contract">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="fs_revised_contract" name="fs_revised_contract">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="business_case_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8b. Business Case Study(BCS)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="bc_awarded_contract" name="bc_awarded_contract">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="bc_revised_contract" name="bc_revised_contract">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="detailed_engg_design" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8c. Detailed Engineering Design(DED)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="ded_awarded_contract" name="ded_awarded_contract">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="ded_revised_contract" name="ded_revised_contract">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="construction" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8d. Construction(CON)/Construction Supervision(CS)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="con_cs_awarded_contract" name="con_cs_awarded_contract">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="con_cs_revised_contract" name="con_cs_revised_contract">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="operations_management" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8e. Operations Management(OM)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="om_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="om_awarded_contract" name="om_awarded_contract">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="om_revised_contract" name="om_revised_contract">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="design_and_build" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8f. Design and Build(D&B)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="dnb_awarded_contract" name="dnb_awarded_contract">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="dnb_revised_contract" name="dnb_revised_contract">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="design_build_operate" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8g. Design-Build-Operate(DBO)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_awarded">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="dbo_awarded" name="dbo_awarded">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="dbo_revised_contract" name="dbo_revised_contract">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="others" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8h. Others(Indicate Name)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="others_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="others_awarded_contract" name="others_awarded_contract">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="others_revised_contract" name="others_revised_contract">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="col-md-12 mb-3">
                                    <label for="remarks">Remarks</label>
                                    <input class="form-control" id="remarks" name="remarks" disabled>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>9. Contract Type</label>
                                    <select class="form-control" name="contract_type" id="contract_type" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select contract type of project</option>
                                        <option value="FIDIC">FIDIC</option>
                                        <option value="Hybrid">Hybrid</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3 pl-2 checkbox">
                                    <div class="col-md-12 px-0">
                                        <label style="cursor: pointer;">
                                            <input type="checkbox" id="other_contract_type"/> Other Contract Type
                                        </label>
                                    </div>
                                    <div class="col-md-12 px-0">
                                        <input class="form-control" type="text" name="other_contract" id="other_contract" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>10. Mode of Procurement</label>
                                    <select class="form-control" name="mode_of_procurement" id="mode_of_procurement" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select mode of procurement</option>
                                        <option value="Competitive Bidding">Competitive Bidding</option>
                                        <option value="Commercial Practive(Canvass)">Commercial Practive(Canvass)</option>
                                        <option value="Commercial Practive(Repeat Order)">Commercial Practive(Repeat Order)</option>
                                        <option value="Commercial Practive(Sole Distributor)">Commercial Practive(Sole Distributor)</option>
                                        <option value="By Administration(Non-competitive)">By Administration(Non-competitive)</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="procurement_threshold">11. Procurement Threshold(PhP in Million)</label>
                                    <input type="text" class="form-control" id="procurement_threshold" name="procurement_threshold">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>12. Availability of Procurement Documents</label>
                                    <select class="form-control" name="procurement_documents" id="procurement_documents" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select availability of procurement doocument</option>
                                        <option value="Absence(w/o documents)">Absence(w/o documents)</option>
                                        <option value="Presence, reviewed, and validated">Presence, reviewed, and validated</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>13. Risk Assessment</label>
                                    <select class="form-control" name="risk_assessment" id="risk_assessment" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select risk assessment of project</option>
                                        <option value="Unavailable">Unavailable</option>
                                        <option value="Part of Planning document">Part of Planning document</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div role="tab" class="tab-pane" id="third">
                            <div class="row">
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14a. Feasibility Study</label>
                                    <h5 for="feasibility_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="fs_2017_targ_phyprogress" name="fs_2017_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="fs_2017_actu_phyprogress" name="fs_2017_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="fs_2018_targ_phyprogress" name="fs_2018_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="fs_2018_actu_phyprogress" name="fs_2018_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="fs_2019_targ_phyprogress" name="fs_2019_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="fs_2019_actu_phyprogress" name="fs_2019_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="fs_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="fs_2020_targ_phyprogress" name="fs_2020_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="fs_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="fs_2020_actu_phyprogress" name="fs_2020_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="fs_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="fs_2021_targ_phyprogress" name="fs_2021_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="fs_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="fs_2021_actu_phyprogress" name="fs_2021_actu_phyprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14a. Feasibility Study</label>
                                    <h5 for="feasibility_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="fs_2017_disprogress">2017:</label>
                                            <input class="form-control" id="fs_2017_disprogress" name="fs_2017_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="fs_2018_disprogress">2018:</label>
                                            <input class="form-control" id="fs_2018_disprogress" name="fs_2018_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="fs_2019_disprogress">2019:</label>
                                            <input class="form-control" id="fs_2019_disprogress" name="fs_2019_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_2020_disprogress">2020:</label>
                                            <input class="form-control" id="fs_2020_disprogress" name="fs_2020_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_2021_disprogress">2021:</label>
                                            <input class="form-control" id="fs_2021_disprogress" name="fs_2021_disprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14a. Feasibility Study</label>
                                    <h5 for="feasibility_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_startdate">Start:</label>
                                            <input class="form-control" id="fs_startdate" name="fs_startdate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_originalend">Original End:</label>
                                            <input class="form-control" id="fs_originalend" name="fs_originalend" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_ate">ATE:</label>
                                            <input class="form-control" id="fs_ate" name="fs_ate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_actualend">Actual End:</label>
                                            <input class="form-control" id="fs_actualend" name="fs_actualend" type="date">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="business_case_study">14b. Business Case Study</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="bc_2017_targ_phyprogress" name="bc_2017_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="bc_2017_actu_phyprogress" name="bc_2017_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="bc_2018_targ_phyprogress" name="bc_2018_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="bc_2018_actu_phyprogress" name="bc_2018_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="bc_2019_targ_phyprogress" name="bc_2019_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="bc_2019_actu_phyprogress" name="bc_2019_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="bc_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="bc_2020_targ_phyprogress" name="bc_2020_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="bc_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="bc_2020_actu_phyprogress" name="bc_2020_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="bc_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="bc_2021_targ_phyprogress" name="bc_2021_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="bc_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="bc_2021_actu_phyprogress" name="bc_2021_actu_phyprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14b. Business Case Study</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="bc_2017_disprogress">2017:</label>
                                            <input class="form-control" id="bc_2017_disprogress" name="bc_2017_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="bc_2018_disprogress">2018:</label>
                                            <input class="form-control" id="bc_2018_disprogress" name="bc_2018_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="bc_2019_disprogress">2019:</label>
                                            <input class="form-control" id="bc_2019_disprogress" name="bc_2019_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_2020_disprogress">2020:</label>
                                            <input class="form-control" id="bc_2020_disprogress" name="bc_2020_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_2021_disprogress">2021:</label>
                                            <input class="form-control" id="bc_2021_disprogress" name="bc_2021_disprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14b. Business Case Study</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_startdate">Start:</label>
                                            <input class="form-control" id="bc_startdate" name="bc_startdate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_originalend">Original End:</label>
                                            <input class="form-control" id="bc_originalend" name="bc_originalend" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_ate">ATE:</label>
                                            <input class="form-control" id="bc_ate" name="bc_ate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_actualend">Actual End:</label>
                                            <input class="form-control" id="bc_actualend" name="bc_actualend" type="date">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14c. Detailed Engineering Design</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="ded_2017_targ_phyprogress" name="ded_2017_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="ded_2017_actu_phyprogress" name="ded_2017_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="ded_2018_targ_phyprogress" name="ded_2018_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="ded_2018_actu_phyprogress" name="ded_2018_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="ded_2019_targ_phyprogress" name="ded_2019_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="ded_2019_actu_phyprogress" name="ded_2019_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ded_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="ded_2020_targ_phyprogress" name="ded_2020_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ded_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="ded_2020_actu_phyprogress" name="ded_2020_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ded_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="ded_2021_targ_phyprogress" name="ded_2021_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ded_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="ded_2021_actu_phyprogress" name="ded_2021_actu_phyprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14c. Detailed Engineering Design</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="ded_2017_disprogress">2017:</label>
                                            <input class="form-control" id="ded_2017_disprogress" name="ded_2017_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="ded_2018_disprogress">2018:</label>
                                            <input class="form-control" id="ded_2018_disprogress" name="ded_2018_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="ded_2019_disprogress">2019:</label>
                                            <input class="form-control" id="ded_2019_disprogress" name="ded_2019_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_2017_disprogress">2020:</label>
                                            <input class="form-control" id="ded_2020_disprogress" name="ded_2020_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_2021_disprogress">2021:</label>
                                            <input class="form-control" id="ded_2021_disprogress" name="ded_2021_disprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14c. Detailed Engineering Design</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_startdate">Start:</label>
                                            <input class="form-control" id="ded_startdate" name="ded_startdate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_originalend">Original End:</label>
                                            <input class="form-control" id="ded_originalend" name="ded_originalend" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_ate">ATE:</label>
                                            <input class="form-control" id="ded_ate" name="ded_ate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_actualend">Actual End:</label>
                                            <input class="form-control" id="ded_actualend" name="ded_actualend" type="date">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14d. Construction/Contruction Supervision</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="con_cs_2017_targ_phyprogress" name="con_cs_2017_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="con_cs_2017_actu_phyprogress" name="con_cs_2017_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="con_cs_2018_targ_phyprogress" name="con_cs_2018_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="con_cs_2018_actu_phyprogress" name="con_cs_2018_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="con_cs_2019_targ_phyprogress" name="con_cs_2019_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2019_actu_phyprogress">A'9:</label>
                                            <input class="form-control" id="con_cs_2019_actu_phyprogress" name="con_cs_2019_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="con_cs_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="con_cs_2020_targ_phyprogress" name="con_cs_2020_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="con_cs_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="con_cs_2020_actu_phyprogress" name="con_cs_2020_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="con_cs_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="con_cs_2021_targ_phyprogress" name="con_cs_2021_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="con_cs_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="con_cs_2021_actu_phyprogress" name="con_cs_2021_actu_phyprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14d. Construction/Contruction Supervision</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="con_cs_2017_disprogress">2017:</label>
                                            <input class="form-control" id="con_cs_2017_disprogress" name="con_cs_2017_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="con_cs_2018_disprogress">2018:</label>
                                            <input class="form-control" id="con_cs_2018_disprogress" name="con_cs_2018_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="con_cs_2019_disprogress">2019:</label>
                                            <input class="form-control" id="con_cs_2019_disprogress" name="con_cs_2019_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_2020_disprogress">2020:</label>
                                            <input class="form-control" id="con_cs_2020_disprogress" name="con_cs_2020_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_2021_disprogress">2021:</label>
                                            <input class="form-control" id="con_cs_2021_disprogress" name="con_cs_2021_disprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14d. Construction/Contruction Supervision</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_startdate">Start:</label>
                                            <input class="form-control" id="con_cs_startdate" name="con_cs_startdate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_originalend">Original End:</label>
                                            <input class="form-control" id="con_cs_originalend" name="con_cs_originalend" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_ate">ATE:</label>
                                            <input class="form-control" id="con_cs_ate" name="con_cs_ate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_actualend">Actual End:</label>
                                            <input class="form-control" id="con_cs_actualend" name="con_cs_actualend" type="date">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14e. Operations Management</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="om_2017_targ_phyprogress" name="om_2017_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="om_2017_actu_phyprogress" name="om_2017_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="om_2018_targ_phyprogress" name="om_2018_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="om_2018_actu_phyprogress" name="om_2018_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="om_2019_targ_phyprogress" name="om_2019_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="om_2019_actu_phyprogress" name="om_2019_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="om_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="om_2020_targ_phyprogress" name="om_2020_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="om_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="om_2020_actu_phyprogress" name="om_2020_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="om_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="om_2021_targ_phyprogress" name="om_2021_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="om_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="om_2021_actu_phyprogress" name="om_2021_actu_phyprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14e. Operations Management</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="om_2017_disprogress">2017:</label>
                                            <input class="form-control" id="om_2017_disprogress" name="om_2017_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="om_2018_disprogress">2018:</label>
                                            <input class="form-control" id="om_2018_disprogress" name="om_2018_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="om_2019_disprogress">2019:</label>
                                            <input class="form-control" id="om_2019_disprogress" name="om_2019_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_2020_disprogress">2020:</label>
                                            <input class="form-control" id="om_2020_disprogress" name="om_2020_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_2021_disprogress">2021:</label>
                                            <input class="form-control" id="om_2021_disprogress" name="om_2021_disprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14e. Operations Management</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="om_startdate">Start:</label>
                                            <input class="form-control" id="om_startdate" name="om_startdate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_originalend">Original End:</label>
                                            <input class="form-control" id="om_originalend" name="om_originalend" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_ate">ATE:</label>
                                            <input class="form-control" id="om_ate" name="om_ate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_actualend">Actual End:</label>
                                            <input class="form-control" id="om_actualend" name="om_actualend" type="date">
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14f. Design & Build</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="dnb_2017_targ_phyprogress" name="dnb_2017_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="dnb_2017_actu_phyprogress" name="dnb_2017_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="dnb_2018_targ_phyprogress" name="dnb_2018_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="dnb_2018_actu_phyprogress" name="dnb_2018_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="dnb_2019_targ_phyprogress" name="dnb_2019_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="dnb_2019_actu_phyprogress" name="dnb_2019_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dnb_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="dnb_2020_targ_phyprogress" name="dnb_2020_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dnb_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="dnb_2020_actu_phyprogress" name="dnb_2020_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dnb_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="dnb_2021_targ_phyprogress" name="dnb_2021_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dnb_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="dnb_2021_actu_phyprogress" name="dnb_2021_actu_phyprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14f. Design & Build</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="dnb_2017_disprogress">2017:</label>
                                            <input class="form-control" id="dnb_2017_disprogress" name="dnb_2017_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="dnb_2018_disprogress">2018:</label>
                                            <input class="form-control" id="dnb_2018_disprogress" name="dnb_2018_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="dnb_2019_disprogress">2019:</label>
                                            <input class="form-control" id="dnb_2019_disprogress" name="dnb_2019_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_2020_disprogress">2020:</label>
                                            <input class="form-control" id="dnb_2020_disprogress" name="dnb_2020_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_2021_disprogress">2021:</label>
                                            <input class="form-control" id="dnb_2021_disprogress" name="dnb_2021_disprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14f. Design & Build</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_startdate">Start:</label>
                                            <input class="form-control" id="dnb_startdate" name="dnb_startdate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_originalend">Original End:</label>
                                            <input class="form-control" id="dnb_originalend" name="dnb_originalend" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_ate">ATE:</label>
                                            <input class="form-control" id="dnb_ate" name="dnb_ate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_actualend">Actual End:</label>
                                            <input class="form-control" id="dnb_actualend" name="dnb_actualend" type="date">
                                        </div>
                                    </div>
                                </fieldset>




                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14g. Design-Build-Operate</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="dbo_2017_targ_phyprogress" name="dbo_2017_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="dbo_2017_actu_phyprogress" name="dbo_2017_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="dbo_2018_targ_phyprogress" name="dbo_2018_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="dbo_2018_actu_phyprogress" name="dbo_2018_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="dbo_2019_targ_phyprogress" name="dbo_2019_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="dbo_2019_actu_phyprogress" name="dbo_2019_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dbo_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="dbo_2020_targ_phyprogress" name="dbo_2020_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dbo_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="dbo_2020_actu_phyprogress" name="dbo_2020_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dbo_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="dbo_2021_targ_phyprogress" name="dbo_2021_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dbo_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="dbo_2021_actu_phyprogress" name="dbo_2021_actu_phyprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14g. Design-Build-Operate</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="dbo_2017_disprogress">2017:</label>
                                            <input class="form-control" id="dbo_2017_disprogress" name="dbo_2017_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="dbo_2018_disprogress">2018:</label>
                                            <input class="form-control" id="dbo_2018_disprogress" name="dbo_2018_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="dbo_2019_disprogress">2019:</label>
                                            <input class="form-control" id="dbo_2019_disprogress" name="dbo_2019_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_2020_disprogress">2020:</label>
                                            <input class="form-control" id="dbo_2020_disprogress" name="dbo_2020_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_2021_disprogress">2021:</label>
                                            <input class="form-control" id="dbo_2021_disprogress" name="dbo_2021_disprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14g. Design-Build-Operate</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_startdate">Start:</label>
                                            <input class="form-control" id="dbo_startdate" name="dbo_startdate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_originalend">Original End:</label>
                                            <input class="form-control" id="dbo_originalend" name="dbo_originalend" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_ate">ATE:</label>
                                            <input class="form-control" id="dbo_ate" name="dbo_ate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_actualend">Actual End:</label>
                                            <input class="form-control" id="dbo_actualend" name="dbo_actualend" type="date">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14h. Others</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="others_2017_targ_phyprogress" name="others_2017_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="others_2017_actu_phyprogress" name="others_2017_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="others_2018_targ_phyprogress" name="others_2018_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="others_2018_actu_phyprogress" name="others_2018_actu_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="others_2019_targ_phyprogress" name="others_2019_targ_phyprogress">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="others_2019_actu_phyprogress" name="others_2019_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="others_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="others_2020_targ_phyprogress" name="others_2020_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="others_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="others_2020_actu_phyprogress" name="others_2020_actu_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="others_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="others_2021_targ_phyprogress" name="others_2021_targ_phyprogress">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="others_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="others_2021_actu_phyprogress" name="others_2021_actu_phyprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14h. Others</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2017_disprogress">2017:</label>
                                            <input class="form-control" id="others_2017_disprogress" name="others_2017_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2018_disprogress">2018:</label>
                                            <input class="form-control" id="others_2018_disprogress" name="others_2018_disprogress">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2019_disprogress">2019:</label>
                                            <input class="form-control" id="others_2019_disprogress" name="others_2019_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_2020_disprogress">2020:</label>
                                            <input class="form-control" id="others_2020_disprogress" name="others_2020_disprogress">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_2021_disprogress">2021:</label>
                                            <input class="form-control" id="others_2021_disprogress" name="others_2021_disprogress">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14h. Others</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="others_startdate">Start:</label>
                                            <input class="form-control" id="others_startdate" name="others_startdate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_originalend">Original End:</label>
                                            <input class="form-control" id="others_originalend" name="others_originalend" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_ate">ATE:</label>
                                            <input class="form-control" id="others_ate" name="others_ate" type="date">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_actualend">Actual End:</label>
                                            <input class="form-control" id="others_actualend" name="others_actualend" type="date">
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <div class="col-md-4 mb-3">
                                    <label>15. Current Project Status</label>
                                    <select class="form-control" name="current_project_status" id="current_project_status" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select status of project</option>
                                            <option value="Ongoing">Ongoing</option>                                
                                            <option value="Completed">Completed</option>                                
                                            <option value="Closed">Closed</option>                       
                                            <option value="Suspended">Suspended(verify approval by MWSS RO)</option>                       
                                            {{-- <option value="Slippage">Slippage(auditor to compute and indicate)</option>                        --}}
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="audit_coverage">Audit Coverage</label>
                                    <input type="text" class="form-control" id="audit_coverage" name="audit_coverage" value="" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="test_to_perform">Test to Perform</label>
                                    <input type="text" class="form-control" id="test_to_perform" name="test_to_perform" value="" readonly>
                                </div>
                                <div class="col-md-6 mb-3 pl-2 checkbox">
                                    <div class="col-md-12 px-0">
                                        <label style="cursor: pointer;">
                                            <input type="checkbox" id="number_days"/> Days Suspended if any
                                        </label>
                                    </div>
                                    <div class="col-md-12 px-0">
                                        <input class="form-control" type="text" name="days_suspended" id="days_suspended" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 pl-2 checkbox">
                                    <div class="col-md-12 px-0">
                                        <label style="cursor: pointer;">
                                            <input type="checkbox" id="other_component"/> Slippage if any(%)
                                        </label>
                                    </div>
                                    <div class="col-md-12 px-0">
                                        <input class="form-control" type="text" name="other_test_perform" id="other_test_perform" disabled="disabled" />
                                    </div>
                                </div>
                                <fieldset class="col-md-12 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">16. Variation Register</label>
                                    <h5 for="variation register" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Variations</h5>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="variation_ref_no">Ref. No.:</label>
                                            <input class="form-control" id="variation_ref_no" name="variation_ref_no">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="variation_description">Description:</label>
                                            <input class="form-control" id="variation_description" name="variation_description">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="variation_cost">Cost(Php in Million):</label>
                                            <input class="form-control" id="variation_cost" name="variation_cost">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="variation_approved_date">Approved Date:</label>
                                            <input class="form-control" id="variation_approved_date" name="variation_approved_date" type="date">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="col-md-4 mb-3">
                                    <label>17. Cause of Delay</label><br>
                                    <select class="selectpicker" multiple aria-label="size 3 select example" name="cause_of_delay[]" id="cause_of_delay" style="width: 100%; cursor: pointer" multiple>
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
                                <div class="col-md-4 mb-3 pl-2 checkbox">
                                    <div class="col-md-12 px-0">
                                        <label style="cursor: pointer;">
                                            <input type="checkbox" id="other_cause_delay"/> Other Cause Delay
                                        </label>
                                    </div>
                                    <div class="col-md-12 px-0">
                                        <input class="form-control" type="text" name="other_cause" id="other_cause" disabled="disabled" />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>18. Cost Analysis</label>
                                    <select class="form-control" name="cost_analysis" id="cost_analysis" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select cost analysis</option>
                                            <option value="Within Benchmark">Within Benchmark</option>                                
                                            <option value="Overvalued">Overvalued</option>                    
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div role="tab" class="tab-pane" id="fourth">
                            <div class="row">
                                <fieldset class="col-md-12 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    {{-- <label for="record_of_work">Major Hazard</label> --}}
                                    <h5 for="variation register" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Major Hazard</h5>
                                    <div class="row">
                                        <div class="col-md-4mb-3">
                                            <label>Major Hazard Description</label><br>
                                            <select class="selectpicker" multiple aria-label="size 3 select example" name="major_hazard_desc[]" id="major_hazard_desc" style="width: 100%; cursor: pointer" multiple>
                                                <option value="" selected disabled>Select cause of delay</option>
                                                <option value="LOL">Loss of Life  </option>
                                                <option value="APD">Accident resulting to Permanent Disability</option>
                                                <option value="DPA">Damage to Property amounting to Php 100,000 and above</option>                      
                                            </select>
                                        </div>
                                          
                                        <div class="col-md-3 mb-3">
                                            <label for="total_number_reported_loss">Total # Reported(Loss):</label>
                                            <input class="form-control" id="total_number_reported_loss" name="total_number_reported_loss">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="total_number_reported_accident">Total # Reported(Accident):</label>
                                            <input class="form-control" id="total_number_reported_accident" name="total_number_reported_accident">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="total_number_reported_damage">Total # Reported(Damage):</label>
                                            <input class="form-control" id="total_number_reported_damage" name="total_number_reported_damage">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-12 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="variation register" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Minor Hazard</h5>
                                    <div class="row">
                                        <div class="col-md-4mb-3">
                                            <label>Minor Hazard Description</label><br>
                                            <select class="selectpicker" multiple aria-label="size 3 select example" name="minor_hazard_desc[]" id="minor_hazard_desc" style="width: 100%; cursor: pointer" multiple>
                                                <option value="" selected disabled>Select cause of delay</option>
                                                <option value="LOL">Accident not resulting to Permanent Disability</option>
                                              <option value="DPB">Damage to Property amounting below Php 100,000   </option>                    
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="total_number_reported_minor_acc">Total # Reported(Accident):</label>
                                            <input class="form-control" id="total_number_reported_minor_acc" name="total_number_reported_minor_acc">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="total_number_reported_minor_dam">Total # Reported(Damage):</label>
                                            <input class="form-control" id="total_number_reported_minor_dam" name="total_number_reported_minor_dam">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-12 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="variation register" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">20. Service Obligations</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="incentives">a. Incentives (in PhP):</label>
                                            <input class="form-control" id="incentives" name="incentives">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="disincentives">b. Disincentives (in PhP):</label>
                                            <input class="form-control" id="disincentives" name="disincentives">
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <div class="col-md-6 mb-3">
                                    <label>20. As-Built/In-Place Features</label>
                                    <select class="form-control" name="in_place_features" id="in_place_features" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select in-place features</option>
                                            <option value="CAD">Compliant with approved drawings/specifications</option>                                
                                            <option value="NC">Non-Compliant</option>                     
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>21. Utilization/Usefulness</label>
                                    <select class="form-control" name="utilization" id="utilization" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select Usefulness</option>
                                            <option value="1">Effectively exceeds 70% of the time in use</option>                                
                                            <option value="2">Partially effective or 50% to 70% in use</option>                     
                                            <option value="3">Ineffective or 50% in use</option>                     
                                            <option value="4">Not Useful</option>                     
                                    </select>
                                </div>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="salaries_wages" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22a. Salaries and Wages (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="salwag_2017_opex">2017:</label>
                                            <input class="form-control" id="salwag_2017_opex" name="salwag_2017_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="salwag_2018_opex">2018:</label>
                                            <input class="form-control" id="salwag_2018_opex" name="salwag_2018_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="salwag_2019_opex">2019:</label>
                                            <input class="form-control" id="salwag_2019_opex" name="salwag_2019_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="salwag_2020_opex">2020:</label>
                                            <input class="form-control" id="salwag_2020_opex" name="salwag_2020_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="salwag_2021_opex">2021:</label>
                                            <input class="form-control" id="salwag_2021_opex" name="salwag_2021_opex">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="power_light" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22b. Power and Light (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="powlight_2017_opex">2017:</label>
                                            <input class="form-control" id="powlight_2017_opex" name="powlight_2017_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="powlight_2018_opex">2018:</label>
                                            <input class="form-control" id="powlight_2018_opex" name="powlight_2018_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="powlight_2019_opex">2019:</label>
                                            <input class="form-control" id="powlight_2019_opex" name="powlight_2019_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="powlight_2020_opex">2020:</label>
                                            <input class="form-control" id="powlight_2020_opex" name="powlight_2020_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="powlight_2021_opex">2021:</label>
                                            <input class="form-control" id="powlight_2021_opex" name="powlight_2021_opex">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="repairs_maintenance" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22c. Repairs and Maintenance (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="repmain_2017_opex">2017:</label>
                                            <input class="form-control" id="repmain_2017_opex" name="repmain_2017_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="repmain_2018_opex">2018:</label>
                                            <input class="form-control" id="repmain_2018_opex" name="repmain_2018_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="repmain_2019_opex">2019:</label>
                                            <input class="form-control" id="repmain_2019_opex" name="repmain_2019_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="repmain_2020_opex">2020:</label>
                                            <input class="form-control" id="repmain_2020_opex" name="repmain_2020_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="repmain_2021_opex">2021:</label>
                                            <input class="form-control" id="repmain_2021_opex" name="repmain_2021_opex">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="contracted_services" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22d. Contracted Services (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="conservice_2017_opex">2017:</label>
                                            <input class="form-control" id="conservice_2017_opex" name="conservice_2017_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="conservice_2018_opex">2018:</label>
                                            <input class="form-control" id="conservice_2018_opex" name="conservice_2018_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="conservice_2019_opex">2019:</label>
                                            <input class="form-control" id="conservice_2019_opex" name="conservice_2019_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="conservice_2020_opex">2020:</label>
                                            <input class="form-control" id="conservice_2020_opex" name="conservice_2020_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="conservice_2021_opex">2021:</label>
                                            <input class="form-control" id="conservice_2021_opex" name="conservice_2021_opex">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="treatment_cost" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22e. Treatment Cost (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="treatcost_2017_opex">2017:</label>
                                            <input class="form-control" id="treatcost_2017_opex" name="treatcost_2017_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="treatcost_2018_opex">2018:</label>
                                            <input class="form-control" id="treatcost_2018_opex" name="treatcost_2018_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="treatcost_2019_opex">2019:</label>
                                            <input class="form-control" id="treatcost_2019_opex" name="treatcost_2019_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="treatcost_2020_opex">2020:</label>
                                            <input class="form-control" id="treatcost_2020_opex" name="treatcost_2020_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="treatcost_2021_opex">2021:</label>
                                            <input class="form-control" id="treatcost_2021_opex" name="treatcost_2021_opex">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="connection_charge" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22f. Connection Charges (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="concharge_2017_opex">2017:</label>
                                            <input class="form-control" id="concharge_2017_opex" name="concharge_2017_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="concharge_2018_opex">2018:</label>
                                            <input class="form-control" id="concharge_2018_opex" name="concharge_2018_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="concharge_2019_opex">2019:</label>
                                            <input class="form-control" id="concharge_2019_opex" name="concharge_2019_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="concharge_2020_opex">2020:</label>
                                            <input class="form-control" id="concharge_2020_opex" name="concharge_2020_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="concharge_2021_opex">2021:</label>
                                            <input class="form-control" id="concharge_2021_opex" name="concharge_2021_opex">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="reg_cost" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22g. Regulatory Cost (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="regcost_2017_opex">2017:</label>
                                            <input class="form-control" id="regcost_2017_opex" name="regcost_2017_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="regcost_2018_opex">2018:</label>
                                            <input class="form-control" id="regcost_2018_opex" name="regcost_2018_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="regcost_2019_opex">2019:</label>
                                            <input class="form-control" id="regcost_2019_opex" name="regcost_2019_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="regcost_2020_opex">2020:</label>
                                            <input class="form-control" id="regcost_2020_opex" name="regcost_2020_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="regcost_2021_opex">2021:</label>
                                            <input class="form-control" id="regcost_2021_opex" name="regcost_2021_opex">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="others_opex">Major OPEX Items</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22h. Other Direct Cost (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2017_opex">2017:</label>
                                            <input class="form-control" id="others_2017_opex" name="others_2017_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2018_opex">2018:</label>
                                            <input class="form-control" id="others_2018_opex" name="others_2018_opex">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2019_opex">2019:</label>
                                            <input class="form-control" id="others_2019_opex" name="others_2019_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_2020_opex">2020:</label>
                                            <input class="form-control" id="others_2020_opex" name="others_2020_opex">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_2021_opex">2021:</label>
                                            <input class="form-control" id="others_2021_opex" name="others_2021_opex">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label>Audit Observation Highlights:</label>
                                      <textarea class="form-control" rows="2" name="audit_obsevation_highlights" id="audit_obsevation_highlights"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label>Audit Response:</label>
                                      <textarea class="form-control" rows="2" name="audit_response" id="audit_response"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tab" class="tab-pane" id="fifth">
                            {{-- PRUDENCE TEST --}}
                            <fieldset class="col-md-12 border p-2" style="border: 2px solid #dee2e6 !important; border-radius: 5px; background: #f1f2f6">
                                <label for="prudence">PRUDENCE</label>
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label id="relevance_label" style="display: none;">Relevance to Service Obligations:</label>
                                        <select class="form-control" name="relevance_obligation" id="relevance_obligation_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="ABP">Included in the Approved Business Plan(ABP)</option>
                                            <option value="CSP">Components of a System Project</option>
                                            <option value="SOB">Relevant to Service Obligation</option>
                                            <option value="NRE">No Relevance</option>                 
                                        </select>
                                        <select class="form-control" name="relevance_obligation" id="relevance_obligation_tci" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="DRE">Directly Relevant</option>
                                            <option value="LRE">Less Relevant</option>
                                            <option value="NRL">Not Relevant</option>                
                                        </select>
                                    </div>
                                   
                                    <div class="col-md-4 mb-3" id="results_relevance_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_relevance" name="results_relevance" onchange="myFunction(this.value)" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="adequate_label" style="display: none;">Adequate Planning:</label>
                                        <select class="form-control" name="adequate_planning" id="adequate_planning_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="AVS">Availability of necessary studies</option>
                                            <option value="PPL">Poor Planning</option>               
                                        </select>
                                        <select class="form-control" name="adequate_planning" id="adequate_planning_tci_big" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="FSB">Feasibility Study and Best Option (If all the alternative options have been considered and the best option has been selected through value analysis and value engineering.)</option>
                                            <option value="FSO">Feasibility Study Only</option>            
                                        </select>
                                        <select class="form-control" name="adequate_planning" id="adequate_planning_tci_sml" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="BCS">Business Case Study/ Project Study/ Cost-Benefit Analysis</option>
                                            <option value="LSA">If limited study/analysis has been done</option>            
                                            <option value="NSA">If no study/analysis has been done</option>            
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_adequate_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_adequate" name="results_adequate">
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="risk_label" style="display: none;">Risk Assessment and Mitigation:</label>
                                        <select class="form-control" name="risk_assessment_mitigation" id="risk_assessment_mitigation_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="WRM">With Risk Analysis and Mitigation</option>
                                            <option value="NRM">W/O Risk Analysis and Mitigation</option>
                                        </select>
                                        <select class="form-control" name="risk_assessment_mitigation" id="risk_assessment_mitigation_tci" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="RAM">Risk Analysis and Mitigation Measures</option>
                                            <option value="RAO">Risk Analysis Only</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_risk_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_risk" name="results_risk">
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="cost_label" style="display: none;">Cost within Benchmark:</label>
                                        <select class="form-control" name="cost_within_benchmark" id="cost_within_benchmark_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="CAE">Contract Amount as awarded is less than or equal to the ABC based on Benchmark Costs for each work item</option>
                                            <option value="CAG">Contract Amount as awarded is greater than or equal to the ABC based on Benchmark Costs for each work item</option>
                                        </select>
                                        <br><span id="procurement_span" style="display: none;">Procurement</span>
                                        <select class="form-control" name="cost_within_benchmark_procurement" id="cost_within_benchmark_tcia" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="TDI">If the procurement was done through direct invitation and/or transparent but with stringent eligibility requirements</option>
                                            <option value="TRF">If the procurement was done through raffle</option>
                                            <option value="TNG">If the procurement was done through negotiation</option>
                                        </select>
                                        <span id="benchmark_span" style="display: none;">Benchmark Cost</span>
                                        <select class="form-control" name="cost_within_benchmark" id="cost_within_benchmark_tcib" style="width: 100%; display: none; cursor: pointer" disabled>
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="LTF">If it is less than or equal to 5% of the benchmark cost</option>
                                            <option value="GTF">If it is greater than 5% but not more than 10%</option>
                                            <option value="GTT">If it is greater than 10% but not more than 15% </option>
                                            <option value="GTN">If it is greater than 15%</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_cost_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_cost" name="results_cost">
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="utilization_label" style="display: none;">Effective Utilization:</label>
                                        <select class="form-control" name="effective_utilization" id="effective_utilization_tci_ccb" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="EMT">Equal or more than the target utilization percentage for the rebasing period under consideration</option>
                                            <option value="FFN">From 51% to 99% of the target percentage</option>
                                            <option value="LTV">Less than 50%</option>
                                            <option value="NUT">Not utilized up to the time of the technical audit </option>
                                        </select>
                                        <select class="form-control" name="effective_utilization" id="effective_utilization_tci_onb" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="LTE">Less than or equal to five (5) yearss</option>
                                            <option value="GTV">Greater than five (5) but not more than ten (10) years</option>
                                            <option value="GTB">Greater than 10 but not more than 15 years</option>
                                            <option value="MTY">More than 15 years</option>
                                        </select>
                                        <select class="form-control" name="effective_utilization" id="effective_utilization_tci_ccs" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="TAI">Less than or equal to three (3) months after implementation </option>
                                            <option value="TNS">Greater than three (3) months but not more than six (6) months</option>
                                            <option value="TNO">Greater than six (6) months but not more than one (1) year</option>
                                            <option value="MTO">More than one (1) year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_effect_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_effect" name="results_effect">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            {{-- WITH EFFICIENCY --}}
                            <fieldset class="col-md-12 border p-2" style="border: 2px solid #dee2e6 !important; border-radius: 5px; background: #f1f2f6">
                                <label for="efficieny">EFFICIENCY</label>
                                <div class="row" id="effciency">
                                    <div class="col-md-8 mb-3">
                                        <label id="timeliness_label" style="display: none;">Timeliness:</label>
                                        <select class="form-control" name="timeliness" id="timeliness_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="ONT">On-Time</option>
                                            <option value="PLD">Partially Delayed</option>
                                            <option value="DLY">Delayed</option>                      
                                        </select>
                                        <br><span id="business_plan_span" style="display: none;">Business Plan</span>
                                        <select class="form-control" name="timeliness" id="timeliness_tcica" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="IFS">If completed as scheduled</option>
                                            <option value="IDN">If delayed by not more than 1 year</option>
                                            <option value="IDO">If delayed by more than 1 year but not more than 2 years</option>                      
                                            <option value="IDT">If delayed by more than 2 years but not more than 3 years</option>                      
                                            <option value="IDR">If delayed by more than 3 years</option>                      
                                        </select>
                                        <span id="contract_period_span" style="display: none;">Contract Period</span>
                                        <select class="form-control" name="timelinessb" id="timeliness_tci_tcicb" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="ICC">If completed within the contract period</option>
                                            <option value="ICL">If completed with less than or equal to 10% slippage</option>
                                            <option value="ICG">If completed with greater than 10% slippage </option>                      
                                        </select>
                                        {{-- <br><span>Business Plan</span> --}}
                                        <select class="form-control" name="timeliness" id="timeliness_tcioa" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="OFS">If completed as scheduled</option>
                                            <option value="ODN">If delayed by not more than 1 year</option>
                                            <option value="ODO">If delayed by more than 1 year but not more than 2 years</option>                      
                                            <option value="ODT">If delayed by more than 2 years but not more than 3 years</option>                      
                                            <option value="ODR">If delayed by more than 3 years</option>                      
                                        </select>
                                        {{-- <span>Contract Period (At the time of audit) </span> --}}
                                        <select class="form-control" name="timeliness" id="timeliness_tci_tciob" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="OCC">If within the schedule</option>
                                            <option value="OCL">If slippage is less than or equal to 10%</option>
                                            <option value="OCG">If slippage is greater than 10%</option>                      
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="result_timeliness_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_timeliness" name="results_timeliness">
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="safety_label" style="display: none;">Safety:</label>
                                        <select class="form-control" name="safety" id="safety_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="NMA">Compliant. No major accidents or less than 5 minor accidents</option>
                                            <option value="NMI">Partially Compliant. No major accidents or with 5-10 minor accidents</option>
                                            <option value="AMI">Non-compliant. At least 1 major accident or more than 10 minor accidents</option>                      
                                        </select>
                                        <br><span  id="incident_span" style="display: none;">Incident Report During Construction and Within the First Year of Operation</span>
                                        <select class="form-control" name="safety" id="safety_tcica" style="width: 100%; display: none;cursor:  pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="NAC">No accident</option>
                                            <option value="OAC">1 accident</option>
                                            <option value="TAC">2 or more accidents</option>                      
                                        </select>
                                        <span  id="manual_span" style="display: none;">Safety Manual</span>
                                        <select class="form-control" name="safetyb" id="safety_tcicb" style="width: 100%;display: none; cursor:  pointer" disabled>
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="AAS">Availability and accessibility of the Safety Manual</option>
                                            {{-- <option value="NAP">Not Applicable</option>                   --}}
                                        </select>
                                        <span  id="provisions_span" style="display: none;">Safety Provisions</span>
                                        <select class="form-control" name="safetyc" id="safety_tcicc" style="width: 100%; display: none;  cursor: pointer" disabled>
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="NOV">No violations</option>
                                            <option value="NMI">1-3 violations</option>
                                            <option value="EMI">4-6 violations</option>                      
                                            <option value="AMI">7 or more violations</option>                      
                                        </select>
                                    </div>
                                    {{-- <select class="selectpicker" multiple aria-label="size 3 select example" name="safety" id="safety_tci" style="width: 100%; display: none;cursor:  pointer">
                                        <option value="" disabled>Please select an option</option>
                                        <optgroup style="font-weight: bolder">Incident Report During Construction and Within the First Year of Operation</optgroup>
                                        <option value="NAC">No accident</option>
                                        <option value="OAC">1 accident</option>
                                        <option value="TAC">2 or more accidents</option> 
                                        <optgroup style="font-weight: bolder">Safety Manual</optgroup>
                                        <option value="AAS">Availability and accessibility of the Safety Manual</option>
                                        <optgroup style="font-weight: bolder">Safety Provisions</optgroup>
                                        <option value="NOV">No violations</option>
                                        <option value="NMI">1-3 violations</option>
                                        <option value="EMI">4-6 violations</option>                      
                                        <option value="AMI">7 or more violations</option>  
                                    </select> --}}
                                    <div class="col-md-4 mb-3" id="results_safety_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_safety" name="results_safety">
                                        </div>
                                    </div>

                                    <div class="col-md-8 mb-3" id="quality_control_div" style="display: none;">
                                        <label>Quality Control:</label>
                                        <br><span>Quality Standards</span>
                                        <select class="form-control" name="quality_control" id="quality_control_tcica" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="QST">Quality Standards</option>
                                        </select>
                                        <span>Quality Assurance</span>
                                        <select class="form-control" name="quality_controlb" id="quality_control_tcicb" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="QAS">Quality Assurance</option>
                                        </select>
                                        <span>Workmanship/ Materials/ Back job</span>
                                        <select class="form-control" name="quality_controlc" id="quality_control_tcicc" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="NBJ">If there is no back job</option>
                                            <option value="BJL">If back job is less than or equal to 1% of contract cost</option>
                                            <option value="BJG">If back job is greater than 1%</option>
                                        </select>
                                    </div>
                                    <div class="col-md-8 mb-3" id="quality_control_div" style="display: none;">
                                        <label>Quality Control:</label>
                                        <br><span>Quality Standards</span>
                                        <select class="form-control" name="quality_control" id="quality_control_tcioa" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="QST">Quality Standards</option>
                                        </select>
                                        <span>Quality Assurance</span>
                                        <select class="form-control" name="quality_control" id="quality_control_tciob" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="QAS">Quality Assurance</option>
                                        </select>
                                        <span>Workmanship/ Materials/ Back job</span>
                                        <select class="form-control" name="quality_control" id="quality_control_tcioc" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="WMB">Workmanship/ Materials/ Back job</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_quality_div" style="display: none;">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_quality" name="results_quality">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-8 mb-3" id="quality_specifications_mwss" style="display: none;">
                                        <label>Quality Control/Specifications:</label>
                                        <select class="form-control" name="specifications" id="specifications_mwss" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="AAP">Compliant. All are in accordance to plans, specification, and quality standards</option>
                                            <option value="OBA">Non-Compliant. Observed items that are not in accordance to plans, specifications, and quality standards</option>                      
                                        </select>
                                    </div>
                                    <div class="col-md-8 mb-3" id="specifications_tcic" style="display: none;">
                                        <label>Specifications:</label>
                                        <br><span>Output Capacity</span>
                                        <select class="form-control" name="specifications" id="specifications_tcica" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="ACW">If actual capacity is within the design output</option>
                                            <option value="ACG">If actual capacity is less than or equal to 5% of design output</option>                      
                                            <option value="ACL">If actual capacity is less than the design capacity by more than 5%</option>                      
                                        </select>
                                        <span>Key Plan and As-Built Drawing</span>
                                        <select class="form-control" name="specificationsb" id="specifications_tcicb" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="BAA">If both are available</option>
                                            <option value="IEA">If either is available</option>                      
                                            <option value="INA">If neither is available</option>                      
                                        </select>
                                        <span>Field Validation Results</span>
                                        <select class="form-control" name="specificationsc" id="specifications_tcicc" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="INN">If no “non-compliance” is found</option>
                                            <option value="ITV">If the total value of “non-compliance” is less than or equal to 5% of the total cost</option>                      
                                            <option value="TVN">If the total value of “non-compliance” is greater than 5%</option>                      
                                        </select>
                                    </div>
                                    <div class="col-md-8 mb-3" id="specifications_tcio" style="display: none;">
                                        <label>Specifications:</label>
                                        <br><span>Output Capacity</span>
                                        <select class="form-control" name="specifications" id="specifications_tcioa" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="ACW">If actual capacity is within the design output</option>
                                            <option value="ACG">If actual capacity is less than or equal to 5% of design output</option>                      
                                            <option value="ACL">If actual capacity is less than the design capacity by more than 5%</option>                      
                                        </select>
                                        <span>Key Plan and As-Built Drawing</span>
                                        <select class="form-control" name="specificationsb" id="specifications_tciob" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="KPA">Key Plan Available</option>                    
                                        </select>
                                        <span>Field Validation Results</span>
                                        <select class="form-control" name="specificationsc" id="specifications_tcioc" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="INN">If no “non-compliance” is found</option>
                                            <option value="ITV">If the total value of “non-compliance” is less than or equal to 5% of the total cost</option>                      
                                            <option value="TVN">If the total value of “non-compliance” is greater than 5%</option>                      
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_specifications_div" style="display: none;">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_specifications" name="results_specifications">
                                        </div>
                                    </div>

                                    <div class="col-md-8 mb-3">
                                        <label id="final_label" style="display:none;">Final Costs:</label>
                                        <select class="form-control" name="final_costs" id="final_costs_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="COB">Cost overrun is 15% and below</option>
                                            <option value="COM">Cost overrun is 15% but not more than 30%</option>
                                            <option value="COA">Cost overrun above 30%</option>
                                        </select>
                                        <br><span id="construction_span" style="display:none;">Construction Cost</span>
                                        <select class="form-control" name="final_costs" id="final_costs_tcia" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="IOB">If within 0-5% of contract cost overrun</option>
                                            <option value="IOM">If cost overrun is greater than 5% but not more than 10%</option>
                                            <option value="IOA">If cost overrun is greater than 10% but not more than 15%</option>
                                            <option value="IOF">If cost overrun is more than 15%</option>
                                        </select>
                                        <span id="operating_span" style="display:none;">Operating Expenditure Cost (OPEX)</span>
                                        <select class="form-control" name="final_costsb" id="final_costs_tcib" style="width: 100%; display: none; cursor: pointer" disabled>
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="OCE">If the operating cost is less than or equal to that of similar facilities using the same technology </option>
                                            <option value="OCH">If the operating cost is within 20% higher than that of similar facilities using the same technology</option>
                                            <option value="OCM">If the operating cost is more than 20% than that of similar facilities using the same technology </option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_final_costs_div" style="display: none;">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_final_costs" name="results_final_costs">
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3" id="utilization_div" style="display: none;">
                                        <label >Utilization and Usefulness:</label>
                                        <select class="form-control" name="usefulness_utilization" id="utilization_mwss" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            <option value="EFU">Effective/Useful. More than 70% of target utilization. Already being used to support and enhance the delivery of service obligation.</option>
                                            <option value="PEF">Partially effective. 50% to 70% of target utilization</option>
                                            <option value="IEF">Ineffective. Less than 50% of target utilization</option>
                                            <option value="NUS">Not useful. Not being used</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_utilization_div" style="display: none;">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_usefulness" name="results_usefulness">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="col-md-12 mb-3" id="total_score_div">
                                    <div class="form-group">
                                        <label>Total Score:</label>
                                        <input class="form-control" id="total_score" name="total_score">
                                    </div>
                                </div>
                                <div class="col-md-4" id="computebutton_div">
                                    <a class="btn btn-primary px-4" onclick="getVal();" id="computebutton">Compute</a>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-0 attach">Attach Files/Pictures:</label>
                                    <input type="file" name="file[]" class="pt-2 attach" multiple>
                                </div>
                                <div class="col-md-12 text-right">
                                    <button class="btn btn-primary px-4" type="submit" id="place_action">Save</button>
                                </div>
                                <input type="hidden" name="hidden_id" id="hidden_id">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>