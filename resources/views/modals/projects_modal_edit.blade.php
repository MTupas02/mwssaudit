<div class="modal fade bd-example-modal-lg" id="edit_project_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                        <a class="nav-link" href="#fifth"  id="audit" aria-controls="fifth" role="tab" data-toggle="tab"><h6 class="mb-0">Audit Test</h6></a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#sixth" aria-controls="sixth" role="tab" data-toggle="tab"><h6 class="mb-0">Audit Test</h6></a>
                    </li> --}}
                </ul>
            </div>
            <div class="modal-body">
                <form method="POST" id="project_edit_form" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content">
                        <div role="tab" class="tab-pane active" id="frst">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label>1. Name of Project:</label>
                                      <textarea class="form-control" rows="2" name="name_of_project" id="name_of_project" value="">{{$data->pin_name_of_project}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="contract_number">Contract Number</label>
                                    <input class="form-control" id="contract_number" name="contract_number" value="{{$data->pin_contract_number}}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Project Origin</label>
                                    <select class="form-control" name="project_origin" id="project_origin" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled></option>
                                        @if($data->pin_project_origin == "abp18-21")
                                            <option selected value="abp18-21">ABP 2018-2021</option>
                                            <option value="abp22-27">ABP 2022-2027</option>
                                            <option value="priorperiod">Prior Period ABC (for recoverable assets)</option>
                                        @elseif($data->pin_project_origin == "abp22-27")
                                            <option value="abp18-21">ABP 2018-2021</option>
                                            <option selected value="abp22-27">ABP 2022-2027</option>
                                            <option value="priorperiod">Prior Period ABC (for recoverable assets)</option>
                                        @elseif($data->pin_project_origin == "priorperiod")
                                            <option value="abp18-21">ABP 2018-2021</option>
                                            <option value="abp22-27">ABP 2022-2027</option>
                                            <option selected value="priorperiod">Prior Period ABC (for recoverable assets)</option>
                                        @else
                                            <option value="abp18-21">ABP 2018-2021</option>
                                            <option value="abp22-27">ABP 2022-2027</option>
                                            <option value="priorperiod">Prior Period ABC (for recoverable assets)</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="project_code">3. Project Code:</label>
                                    <input class="form-control" id="project_code" name="project_code" value="{{$data->pin_project_code}}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>4. Name of Concessionaire</label>
                                    <select class="form-control" name="name_of_concessionaire" id="name_of_concessionaire" style="width: 100%; cursor: pointer">
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
                                <div class="col-md-6 mb-3">
                                    <label for="concession_zone">5a. Concession Zone:</label>
                                    <input class="form-control" id="concession_zone" name="concession_zone" value="{{$data->pin_concession_zone}}" readonly>
                                </div>                           
                                <div class="col-md-3 mb-3">
                                    <label for="name_of_lgu">5b. Name of LGU:</label>
                                    <input class="form-control" id="name_of_lgu" name="name_of_lgu" value="{{$data->pin_name_of_lgu}}">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="name_of_brgy_street">5c. Name of Barangay and Street</label>
                                    <input class="form-control" id="name_of_brgy_street" name="name_of_brgy_street" value="{{$data->pin_name_of_brgy_street}}">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="longitude">5d. Longitude</label>
                                    <input class="form-control" id="longitude" name="longitude" value="{{$data->pin_long_geographical_coordinates}}">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="latitude">5e. Latitude</label>
                                    <input class="form-control" id="latitude" name="latitude" value="{{$data->pin_lati_geographical_coordinates}}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>CAPEX Classification</label>
                                    <select class="form-control" name="capex_classification" id="capex_classification" style="width: 100%; cursor: pointer">
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
                                    <select class="form-control" name="capex_subclass" id="capex_subclass" style="width: 100%; cursor: pointer">
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
                        <div role="tab" class="tab-pane" id="secnd">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="approved_budget_contract">7. Approved Budget for the Contract(PhP in Million):</label>
                                    <input class="form-control" id="approved_budget_contract" name="approved_budget_contract" value="{{$data->projprep->ppp_approved_budget_contract}}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Project Year:</label>
                                    <select class="form-control" name="project_year" id="project_year" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled></option>
                                        @if($data->pin_project_year == "2017")
                                            <option selected value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        @elseif($data->pin_project_year == "2018")
                                            <option value="2017">2017</option>
                                            <option selected value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        @elseif($data->pin_project_year == "2019")
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option selected value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        @elseif($data->pin_project_year == "2020")
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option selected value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        @elseif($data->pin_project_year == "2021")
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option selected value="2021">2021</option>
                                        @else
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        @endif                   
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Is Project more than 100M?</label>
                                    <select class="form-control" name="project_million" id="project_million" style="width: 100%; cursor: pointer">
                                        <option value="" selected disabled>Select type of project</option>
                                        @if($data->pin_project_more_than == 'Yes')
                                            <option selected value="Yes">Yes</option>                                
                                            <option value="No">No</option> 
                                        @elseif($data->pin_project_more_than == 'No')                                                     
                                            <option value="Yes">Yes</option>                                
                                            <option selected value="No">No</option>                                                      
                                        @else
                                            <option value="Yes">Yes</option>                                
                                            <option value="No">No</option>     
                                        @endif                                                 
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="project_size">Project Size:</label>
                                    <input class="form-control" id="project_size" name="project_size" value="{{$data->pin_project_size}}" readonly>
                                </div>
                                {{-- <input type="hidden" name="threshold_budget" id="threshold_budget" value="100,000,000"> --}}
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="feasibility_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8a. Feasibility Study(FS)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="fs_awarded_contract" name="fs_awarded_contract" value="{{$data->projprep->ppp_fs_awarded_contract}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="fs_revised_contract" name="fs_revised_contract" value="{{$data->projprep->ppp_fs_revised_contract}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="business_case_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8b. Business Case Study(BCS)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="bc_awarded_contract" name="bc_awarded_contract" value="{{$data->projprep->ppp_bc_awarded_contract}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="bc_revised_contract" name="bc_revised_contract" value="{{$data->projprep->ppp_bc_revised_contract}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="detailed_engg_design" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8c. Detailed Engineering Design(DED)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="ded_awarded_contract" name="ded_awarded_contract" value="{{$data->projprep->ppp_ded_awarded_contract}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="ded_revised_contract" name="ded_revised_contract" value="{{$data->projprep->ppp_ded_revised_contract}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="construction" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8d. Construction(CON)/Construction Supervision(CS)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="con_cs_awarded_contract" name="con_cs_awarded_contract" value="{{$data->projprep->ppp_con_cs_revised_contract}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="con_cs_revised_contract" name="con_cs_revised_contract" value="{{$data->projprep->ppp_con_cs_revised_contract}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="operations_management" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8e. Operations Management(OM)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="om_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="om_awarded_contract" name="om_awarded_contract" value="{{$data->projprep->ppp_om_revised_contract}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="om_revised_contract" name="om_revised_contract" value="{{$data->projprep->ppp_om_revised_contract}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="design_and_build" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8f. Design and Build(D&B)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="dnb_awarded_contract" name="dnb_awarded_contract" value="{{$data->projprep->ppp_dnb_revised_contract}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="dnb_revised_contract" name="dnb_revised_contract" value="{{$data->projprep->ppp_dnb_revised_contract}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="design_build_operate" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8g. Design-Build-Operate(DBO)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_awarded">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="dbo_awarded" name="dbo_awarded" value="{{$data->projprep->ppp_dbo_revised_contract}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="dbo_revised_contract" name="dbo_revised_contract" value="{{$data->projprep->ppp_dbo_revised_contract}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <h5 for="others" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">8h. Others(Indicate Name)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="others_awarded_contract">Awarded Contract Cost(in Million):</label>
                                            <input class="form-control" id="others_awarded_contract" name="others_awarded_contract" value="{{$data->projprep->ppp_others_revised_contract}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_revised_contract">Revised Contract Cost(in Million):</label>
                                            <input class="form-control" id="others_revised_contract" name="others_revised_contract" value="{{$data->projprep->ppp_others_revised_contract}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="col-md-12 mb-3">
                                    <label for="remarks">Remarks</label>
                                    <input class="form-control" id="remarks" name="remarks">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Contract Type:</label>
                                    <select class="form-control" name="contract_type" id="contract_type" style="width: 100%; cursor: pointer">
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
                                <div class="col-md-4 mb-3 pl-2 checkbox">
                                    <div class="col-md-12 px-0">
                                        <label style="cursor: pointer;">
                                            <input type="checkbox" id="other_contract_type"/> Other Contract Type
                                        </label>
                                    </div>
                                    <div class="col-md-12 px-0">
                                        <input class="form-control" type="text" name="other_contract" id="other_contract" value="{{$data->projprep->ppp_contract_type_others}}" readonly />
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>Mode of Procurement:</label>
                                    <select class="form-control" name="mode_of_procurement" id="mode_of_procurement" style="width: 100%; cursor: pointer">
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
                                <div class="col-md-4 mb-3">
                                    <label for="procurement_threshold">11. Procurement Threshold(PhP in Million)</label>
                                    <input type="text" class="form-control" id="procurement_threshold" name="procurement_threshold" value="{{$data->projprep->ppp_procurement_threshold}}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>12. Availability of Procurement Documents</label>
                                    <select class="form-control" name="procure_docs" id="procure_docs" style="width: 100%; cursor: pointer">
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
                                <div class="col-md-4 mb-3">
                                    <label>13. Risk Assessment</label>
                                    <select class="form-control" name="risk_assessment" id="risk_assessment" style="width: 100%; cursor: pointer">
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
                        <div role="tab" class="tab-pane" id="third">
                            <div class="row">
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14a. Feasibility Study</label>
                                    <h5 for="feasibility_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="fs_2017_targ_phyprogress" name="fs_2017_targ_phyprogress" value="{{$data->projimplemone->pimo_fs_targ_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="fs_2017_actu_phyprogress" name="fs_2017_actu_phyprogress" value="{{$data->projimplemone->pimo_fs_actu_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="fs_2018_targ_phyprogress" name="fs_2018_targ_phyprogress" value="{{$data->projimplemone->pimo_fs_targ_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="fs_2018_actu_phyprogress" name="fs_2018_actu_phyprogress" value="{{$data->projimplemone->pimo_fs_actu_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="fs_2019_targ_phyprogress" name="fs_2019_targ_phyprogress" value="{{$data->projimplemone->pimo_fs_targ_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="fs_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="fs_2019_actu_phyprogress" name="fs_2019_actu_phyprogress" value="{{$data->projimplemone->pimo_fs_actu_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="fs_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="fs_2020_targ_phyprogress" name="fs_2020_targ_phyprogress" value="{{$data->projimplemone->pimo_fs_targ_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="fs_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="fs_2020_actu_phyprogress" name="fs_2020_actu_phyprogress" value="{{$data->projimplemone->pimo_fs_actu_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="fs_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="fs_2021_targ_phyprogress" name="fs_2021_targ_phyprogress" value="{{$data->projimplemone->pimo_fs_targ_2021_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="fs_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="fs_2021_actu_phyprogress" name="fs_2021_actu_phyprogress" value="{{$data->projimplemone->pimo_fs_actu_2021_phyprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14a. Feasibility Study</label>
                                    <h5 for="feasibility_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="fs_2017_disprogress">2017:</label>
                                            <input class="form-control" id="fs_2017_disprogress" name="fs_2017_disprogress" value="{{$data->projimplemone->pimo_fs_2017_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="fs_2018_disprogress">2018:</label>
                                            <input class="form-control" id="fs_2018_disprogress" name="fs_2018_disprogress" value="{{$data->projimplemone->pimo_fs_2018_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="fs_2019_disprogress">2019:</label>
                                            <input class="form-control" id="fs_2019_disprogress" name="fs_2019_disprogress" value="{{$data->projimplemone->pimo_fs_2019_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_2020_disprogress">2020:</label>
                                            <input class="form-control" id="fs_2020_disprogress" name="fs_2020_disprogress" value="{{$data->projimplemone->pimo_fs_2020_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_2021_disprogress">2021:</label>
                                            <input class="form-control" id="fs_2021_disprogress" name="fs_2021_disprogress" value="{{$data->projimplemone->pimo_fs_2021_disprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14a. Feasibility Study</label>
                                    <h5 for="feasibility_study" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_startdate">Start:</label>
                                            <input class="form-control" id="fs_startdate" name="fs_startdate" type="date" value="{{$data->projimplemone->pimo_fs_startdate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_originalend">Original End:</label>
                                            <input class="form-control" id="fs_originalend" name="fs_originalend" type="date" value="{{$data->projimplemone->pimo_fs_originalend}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_ate">ATE:</label>
                                            <input class="form-control" id="fs_ate" name="fs_ate" type="date" value="{{$data->projimplemone->pimo_fs_ate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="fs_actualend">Actual End:</label>
                                            <input class="form-control" id="fs_actualend" name="fs_actualend" type="date" value="{{$data->projimplemone->pimo_fs_actualend}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="business_case_study">14b. Business Case Study</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="bc_2017_targ_phyprogress" name="bc_2017_targ_phyprogress" value="{{$data->projimplemone->pimo_bc_targ_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="bc_2017_actu_phyprogress" name="bc_2017_actu_phyprogress" value="{{$data->projimplemone->pimo_bc_actu_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="bc_2018_targ_phyprogress" name="bc_2018_targ_phyprogress" value="{{$data->projimplemone->pimo_bc_targ_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="bc_2018_actu_phyprogress" name="bc_2018_actu_phyprogress" value="{{$data->projimplemone->pimo_bc_actu_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="bc_2019_targ_phyprogress" name="bc_2019_targ_phyprogress" value="{{$data->projimplemone->pimo_bc_targ_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="bc_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="bc_2019_actu_phyprogress" name="bc_2019_actu_phyprogress" value="{{$data->projimplemone->pimo_bc_actu_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="bc_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="bc_2020_targ_phyprogress" name="bc_2020_targ_phyprogress" value="{{$data->projimplemone->pimo_bc_targ_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="bc_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="bc_2020_actu_phyprogress" name="bc_2020_actu_phyprogress" value="{{$data->projimplemone->pimo_bc_actu_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="bc_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="bc_2021_targ_phyprogress" name="bc_2021_targ_phyprogress" value="{{$data->projimplemone->pimo_bc_targ_2021_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="bc_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="bc_2021_actu_phyprogress" name="bc_2021_actu_phyprogress" value="{{$data->projimplemone->pimo_bc_actu_2021_phyprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14b. Business Case Study</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="bc_2017_disprogress">2017:</label>
                                            <input class="form-control" id="bc_2017_disprogress" name="bc_2017_disprogress" value="{{$data->projimplemone->pimo_bc_2017_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="bc_2018_disprogress">2018:</label>
                                            <input class="form-control" id="bc_2018_disprogress" name="bc_2018_disprogress" value="{{$data->projimplemone->pimo_bc_2018_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="bc_2019_disprogress">2019:</label>
                                            <input class="form-control" id="bc_2019_disprogress" name="bc_2019_disprogress" value="{{$data->projimplemone->pimo_bc_2019_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_2020_disprogress">2020:</label>
                                            <input class="form-control" id="bc_2020_disprogress" name="bc_2020_disprogress" value="{{$data->projimplemone->pimo_bc_2020_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_2021_disprogress">2021:</label>
                                            <input class="form-control" id="bc_2021_disprogress" name="bc_2021_disprogress" value="{{$data->projimplemone->pimo_bc_2021_disprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14b. Business Case Study</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_startdate">Start:</label>
                                            <input class="form-control" id="bc_startdate" name="bc_startdate" type="date" value="{{$data->projimplemone->pimo_bc_startdate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_originalend">Original End:</label>
                                            <input class="form-control" id="bc_originalend" name="bc_originalend" type="date" value="{{$data->projimplemone->pimo_bc_originalend}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_ate">ATE:</label>
                                            <input class="form-control" id="bc_ate" name="bc_ate" type="date" value="{{$data->projimplemone->pimo_bc_ate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="bc_actualend">Actual End:</label>
                                            <input class="form-control" id="bc_actualend" name="bc_actualend" type="date" value="{{$data->projimplemone->pimo_bc_actualend}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14c. Detailed Engineering Design</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="ded_2017_targ_phyprogress" name="ded_2017_targ_phyprogress" value="{{$data->projimplemone->pimo_ded_targ_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="ded_2017_actu_phyprogress" name="ded_2017_actu_phyprogress" value="{{$data->projimplemone->pimo_ded_actu_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="ded_2018_targ_phyprogress" name="ded_2018_targ_phyprogress" value="{{$data->projimplemone->pimo_ded_targ_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="ded_2018_actu_phyprogress" name="ded_2018_actu_phyprogress" value="{{$data->projimplemone->pimo_ded_actu_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="ded_2019_targ_phyprogress" name="ded_2019_targ_phyprogress" value="{{$data->projimplemone->pimo_ded_targ_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="ded_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="ded_2019_actu_phyprogress" name="ded_2019_actu_phyprogress" value="{{$data->projimplemone->pimo_ded_actu_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ded_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="ded_2020_targ_phyprogress" name="ded_2020_targ_phyprogress" value="{{$data->projimplemone->pimo_ded_targ_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ded_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="ded_2020_actu_phyprogress" name="ded_2020_actu_phyprogress" value="{{$data->projimplemone->pimo_ded_actu_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ded_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="ded_2021_targ_phyprogress" name="ded_2021_targ_phyprogress" value="{{$data->projimplemone->pimo_ded_targ_2021_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ded_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="ded_2021_actu_phyprogress" name="ded_2021_actu_phyprogress" value="{{$data->projimplemone->pimo_ded_actu_2021_phyprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14c. Detailed Engineering Design</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="ded_2017_disprogress">2017:</label>
                                            <input class="form-control" id="ded_2017_disprogress" name="ded_2017_disprogress" value="{{$data->projimplemone->pimo_ded_2017_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="ded_2018_disprogress">2018:</label>
                                            <input class="form-control" id="ded_2018_disprogress" name="ded_2018_disprogress" value="{{$data->projimplemone->pimo_ded_2018_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="ded_2019_disprogress">2019:</label>
                                            <input class="form-control" id="ded_2019_disprogress" name="ded_2019_disprogress" value="{{$data->projimplemone->pimo_ded_2019_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_2017_disprogress">2020:</label>
                                            <input class="form-control" id="ded_2017_disprogress" name="ded_2017_disprogress" value="{{$data->projimplemone->pimo_ded_2020_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_2021_disprogress">2021:</label>
                                            <input class="form-control" id="ded_2021_disprogress" name="ded_2021_disprogress" value="{{$data->projimplemone->pimo_ded_2021_disprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14c. Detailed Engineering Design</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_startdate">Start:</label>
                                            <input class="form-control" id="ded_startdate" name="ded_startdate" type="date" value="{{$data->projimplemone->pimo_ded_startdate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_originalend">Original End:</label>
                                            <input class="form-control" id="ded_originalend" name="ded_originalend" type="date" value="{{$data->projimplemone->pimo_ded_originalend}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_ate">ATE:</label>
                                            <input class="form-control" id="ded_ate" name="ded_ate" type="date" value="{{$data->projimplemone->pimo_ded_ate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="ded_actualend">Actual End:</label>
                                            <input class="form-control" id="ded_actualend" name="ded_actualend" type="date" value="{{$data->projimplemone->pimo_ded_actualend}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14d. Construction/Contruction Supervision</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="con_cs_2017_targ_phyprogress" name="con_cs_2017_targ_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_targ_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="con_cs_2017_actu_phyprogress" name="con_cs_2017_actu_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_actu_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="con_cs_2018_targ_phyprogress" name="con_cs_2018_targ_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_targ_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="con_cs_2018_actu_phyprogress" name="con_cs_2018_actu_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_actu_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="con_cs_2019_targ_phyprogress" name="con_cs_2019_targ_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_targ_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="con_cs_2019_actu_phyprogress">A'9:</label>
                                            <input class="form-control" id="con_cs_2019_actu_phyprogress" name="con_cs_2019_actu_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_actu_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="con_cs_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="con_cs_2020_targ_phyprogress" name="con_cs_2020_targ_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_targ_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="con_cs_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="con_cs_2020_actu_phyprogress" name="con_cs_2020_actu_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_actu_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="con_cs_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="con_cs_2021_targ_phyprogress" name="con_cs_2021_targ_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_targ_2021_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="con_cs_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="con_cs_2021_actu_phyprogress" name="con_cs_2021_actu_phyprogress" value="{{$data->projimplemtwo->pimt_con_cs_actu_2021_phyprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14d. Construction/Contruction Supervision</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="con_cs_2017_disprogress">2017:</label>
                                            <input class="form-control" id="con_cs_2017_disprogress" name="con_cs_2017_disprogress" value="{{$data->projimplemtwo->pimt_con_cs_2017_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="con_cs_2018_disprogress">2018:</label>
                                            <input class="form-control" id="con_cs_2018_disprogress" name="con_cs_2018_disprogress" value="{{$data->projimplemtwo->pimt_con_cs_2018_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="con_cs_2019_disprogress">2019:</label>
                                            <input class="form-control" id="con_cs_2019_disprogress" name="con_cs_2019_disprogress" value="{{$data->projimplemtwo->pimt_con_cs_2019_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_2020_disprogress">2020:</label>
                                            <input class="form-control" id="con_cs_2020_disprogress" name="con_cs_2020_disprogress" value="{{$data->projimplemtwo->pimt_con_cs_2020_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_2021_disprogress">2021:</label>
                                            <input class="form-control" id="con_cs_2021_disprogress" name="con_cs_2021_disprogress" value="{{$data->projimplemtwo->pimt_con_cs_2021_disprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14d. Construction/Contruction Supervision</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_startdate">Start:</label>
                                            <input class="form-control" id="con_cs_startdate" name="con_cs_startdate" type="date" value="{{$data->projimplemtwo->pimt_con_cs_startdate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_originalend">Original End:</label>
                                            <input class="form-control" id="con_cs_originalend" name="con_cs_originalend" type="date" value="{{$data->projimplemtwo->pimt_con_cs_originalend}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_ate">ATE:</label>
                                            <input class="form-control" id="con_cs_ate" name="con_cs_ate" type="date" value="{{$data->projimplemtwo->pimt_con_cs_ate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="con_cs_actualend">Actual End:</label>
                                            <input class="form-control" id="con_cs_actualend" name="con_cs_actualend" type="date" value="{{$data->projimplemtwo->pimt_con_cs_actualend}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14e. Operations Management</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="om_2017_targ_phyprogress" name="om_2017_targ_phyprogress" value="{{$data->projimplemtwo->pimt_om_targ_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="om_2017_actu_phyprogress" name="om_2017_actu_phyprogress" value="{{$data->projimplemtwo->pimt_om_actu_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="om_2018_targ_phyprogress" name="om_2018_targ_phyprogress" value="{{$data->projimplemtwo->pimt_om_targ_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="om_2018_actu_phyprogress" name="om_2018_actu_phyprogress" value="{{$data->projimplemtwo->pimt_om_actu_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="om_2019_targ_phyprogress" name="om_2019_targ_phyprogress" value="{{$data->projimplemtwo->pimt_om_targ_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="om_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="om_2019_actu_phyprogress" name="om_2019_actu_phyprogress" value="{{$data->projimplemtwo->pimt_om_actu_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="om_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="om_2020_targ_phyprogress" name="om_2020_targ_phyprogress" value="{{$data->projimplemtwo->pimt_om_targ_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="om_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="om_2020_actu_phyprogress" name="om_2020_actu_phyprogress" value="{{$data->projimplemtwo->pimt_om_actu_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="om_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="om_2021_targ_phyprogress" name="om_2021_targ_phyprogress" value="{{$data->projimplemtwo->pimt_om_targ_2021_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="om_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="om_2021_actu_phyprogress" name="om_2021_actu_phyprogress" value="{{$data->projimplemtwo->pimt_om_actu_2021_phyprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14e. Operations Management</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="om_2017_disprogress">2017:</label>
                                            <input class="form-control" id="om_2017_disprogress" name="om_2017_disprogress" value="{{$data->projimplemtwo->pimt_om_2017_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="om_2018_disprogress">2018:</label>
                                            <input class="form-control" id="om_2018_disprogress" name="om_2018_disprogress" value="{{$data->projimplemtwo->pimt_om_2018_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="om_2019_disprogress">2019:</label>
                                            <input class="form-control" id="om_2019_disprogress" name="om_2019_disprogress" value="{{$data->projimplemtwo->pimt_om_2019_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_2020_disprogress">2020:</label>
                                            <input class="form-control" id="om_2020_disprogress" name="om_2020_disprogress" value="{{$data->projimplemtwo->pimt_om_2020_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_2021_disprogress">2021:</label>
                                            <input class="form-control" id="om_2021_disprogress" name="om_2021_disprogress" value="{{$data->projimplemtwo->pimt_om_2021_disprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14e. Operations Management</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="om_startdate">Start:</label>
                                            <input class="form-control" id="om_startdate" name="om_startdate" type="date" value="{{$data->projimplemtwo->pimt_om_startdate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_originalend">Original End:</label>
                                            <input class="form-control" id="om_originalend" name="om_originalend" type="date" value="{{$data->projimplemtwo->pimt_om_originalend}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_ate">ATE:</label>
                                            <input class="form-control" id="om_ate" name="om_ate" type="date" value="{{$data->projimplemtwo->pimt_om_ate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="om_actualend">Actual End:</label>
                                            <input class="form-control" id="om_actualend" name="om_actualend" type="date" value="{{$data->projimplemtwo->pimt_om_actualend}}">
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14f. Design & Build</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="dnb_2017_targ_phyprogress" name="dnb_2017_targ_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_targ_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="dnb_2017_actu_phyprogress" name="dnb_2017_actu_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_actu_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="dnb_2018_targ_phyprogress" name="dnb_2018_targ_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_targ_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="dnb_2018_actu_phyprogress" name="dnb_2018_actu_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_actu_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="dnb_2019_targ_phyprogress" name="dnb_2019_targ_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_targ_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dnb_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="dnb_2019_actu_phyprogress" name="dnb_2019_actu_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_actu_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dnb_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="dnb_2020_targ_phyprogress" name="dnb_2020_targ_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_targ_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dnb_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="dnb_2020_actu_phyprogress" name="dnb_2020_actu_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_actu_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dnb_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="dnb_2021_targ_phyprogress" name="dnb_2021_targ_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_targ_2021_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dnb_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="dnb_2021_actu_phyprogress" name="dnb_2021_actu_phyprogress" value="{{$data->projimplemtwo->pimt_dnb_actu_2021_phyprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14f. Design & Build</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="dnb_2017_disprogress">2017:</label>
                                            <input class="form-control" id="dnb_2017_disprogress" name="dnb_2017_disprogress" value="{{$data->projimplemtwo->pimt_dnb_2017_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="dnb_2018_disprogress">2018:</label>
                                            <input class="form-control" id="dnb_2018_disprogress" name="dnb_2018_disprogress" value="{{$data->projimplemtwo->pimt_dnb_2018_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="dnb_2019_disprogress">2019:</label>
                                            <input class="form-control" id="dnb_2019_disprogress" name="dnb_2019_disprogress" value="{{$data->projimplemtwo->pimt_dnb_2019_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_2020_disprogress">2020:</label>
                                            <input class="form-control" id="dnb_2020_disprogress" name="dnb_2020_disprogress" value="{{$data->projimplemtwo->pimt_dnb_2020_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_2021_disprogress">2021:</label>
                                            <input class="form-control" id="dnb_2021_disprogress" name="dnb_2021_disprogress" value="{{$data->projimplemtwo->pimt_dnb_2021_disprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14f. Design & Build</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_startdate">Start:</label>
                                            <input class="form-control" id="dnb_startdate" name="dnb_startdate" type="date" value="{{$data->projimplemtwo->pimt_dnb_startdate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_originalend">Original End:</label>
                                            <input class="form-control" id="dnb_originalend" name="dnb_originalend" type="date" value="{{$data->projimplemtwo->pimt_dnb_originalend}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_ate">ATE:</label>
                                            <input class="form-control" id="dnb_ate" name="dnb_ate" type="date" value="{{$data->projimplemtwo->pimt_dnb_ate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dnb_actualend">Actual End:</label>
                                            <input class="form-control" id="dnb_actualend" name="dnb_actualend" type="date" value="{{$data->projimplemtwo->pimt_dnb_actualend}}">
                                        </div>
                                    </div>
                                </fieldset>




                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14g. Design-Build-Operate</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress(%)</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="dbo_2017_targ_phyprogress" name="dbo_2017_targ_phyprogress" value="{{$data->projimthree->pimr_dbo_targ_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="dbo_2017_actu_phyprogress" name="dbo_2017_actu_phyprogress" value="{{$data->projimthree->pimr_dbo_actu_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="dbo_2018_targ_phyprogress" name="dbo_2018_targ_phyprogress" value="{{$data->projimthree->pimr_dbo_targ_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="dbo_2018_actu_phyprogress" name="dbo_2018_actu_phyprogress" value="{{$data->projimthree->pimr_dbo_actu_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="dbo_2019_targ_phyprogress" name="dbo_2019_targ_phyprogress" value="{{$data->projimthree->pimr_dbo_targ_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="dbo_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="dbo_2019_actu_phyprogress" name="dbo_2019_actu_phyprogress" value="{{$data->projimthree->pimr_dbo_actu_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dbo_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="dbo_2020_targ_phyprogress" name="dbo_2020_targ_phyprogress" value="{{$data->projimthree->pimr_dbo_targ_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dbo_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="dbo_2020_actu_phyprogress" name="dbo_2020_actu_phyprogress" value="{{$data->projimthree->pimr_dbo_actu_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dbo_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="dbo_2021_targ_phyprogress" name="dbo_2021_targ_phyprogress" value="{{$data->projimthree->pimr_dbo_targ_2021_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="dbo_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="dbo_2021_actu_phyprogress" name="dbo_2021_actu_phyprogress" value="{{$data->projimthree->pimr_dbo_actu_2021_phyprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14g. Design-Build-Operate</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="dbo_2017_disprogress">2017:</label>
                                            <input class="form-control" id="dbo_2017_disprogress" name="dbo_2017_disprogress" value="{{$data->projimthree->pimr_dbo_2017_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="dbo_2018_disprogress">2018:</label>
                                            <input class="form-control" id="dbo_2018_disprogress" name="dbo_2018_disprogress" value="{{$data->projimthree->pimr_dbo_2018_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="dbo_2019_disprogress">2019:</label>
                                            <input class="form-control" id="dbo_2019_disprogress" name="dbo_2019_disprogress" value="{{$data->projimthree->pimr_dbo_2019_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_2020_disprogress">2020:</label>
                                            <input class="form-control" id="dbo_2020_disprogress" name="dbo_2020_disprogress" value="{{$data->projimthree->pimr_dbo_2020_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_2021_disprogress">2021:</label>
                                            <input class="form-control" id="dbo_2021_disprogress" name="dbo_2021_disprogress" value="{{$data->projimthree->pimr_dbo_2021_disprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14g. Design-Build-Operate</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_startdate">Start:</label>
                                            <input class="form-control" id="dbo_startdate" name="dbo_startdate" type="date" value="{{$data->projimthree->pimr_dbo_startdate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_originalend">Original End:</label>
                                            <input class="form-control" id="dbo_originalend" name="dbo_originalend" type="date" value="{{$data->projimthree->pimr_dbo_originalend}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_ate">ATE:</label>
                                            <input class="form-control" id="dbo_ate" name="dbo_ate" type="date" value="{{$data->projimthree->pimr_dbo_ate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="dbo_actualend">Actual End:</label>
                                            <input class="form-control" id="dbo_actualend" name="dbo_actualend" type="date" value="{{$data->projimthree->pimr_dbo_actualend}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14h. Others</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Physical Progress</h5>
                                    <div class="row">
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2017_targ_phyprogress">T'17:</label>
                                            <input class="form-control" id="others_2017_targ_phyprogress" name="others_2017_targ_phyprogress" value="{{$data->projimthree->pimr_others_targ_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2017_actu_phyprogress">A'17:</label>
                                            <input class="form-control" id="others_2017_actu_phyprogress" name="others_2017_actu_phyprogress" value="{{$data->projimthree->pimr_others_actu_2017_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2018_targ_phyprogress">T'18:</label>
                                            <input class="form-control" id="others_2018_targ_phyprogress" name="others_2018_targ_phyprogress" value="{{$data->projimthree->pimr_others_targ_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2018_actu_phyprogress">A'18:</label>
                                            <input class="form-control" id="others_2018_actu_phyprogress" name="others_2018_actu_phyprogress" value="{{$data->projimthree->pimr_others_actu_2018_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2019_targ_phyprogress">T'19:</label>
                                            <input class="form-control" id="others_2019_targ_phyprogress" name="others_2019_targ_phyprogress" value="{{$data->projimthree->pimr_others_targ_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="others_2019_actu_phyprogress">A'19:</label>
                                            <input class="form-control" id="others_2019_actu_phyprogress" name="others_2019_actu_phyprogress" value="{{$data->projimthree->pimr_others_actu_2019_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="others_2020_targ_phyprogress">T'20:</label>
                                            <input class="form-control" id="others_2020_targ_phyprogress" name="others_2020_targ_phyprogress" value="{{$data->projimthree->pimr_others_targ_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="others_2020_actu_phyprogress">A'20:</label>
                                            <input class="form-control" id="others_2020_actu_phyprogress" name="others_2020_actu_phyprogress" value="{{$data->projimthree->pimr_others_actu_2020_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="others_2021_targ_phyprogress">T'21:</label>
                                            <input class="form-control" id="others_2021_targ_phyprogress" name="others_2021_targ_phyprogress" value="{{$data->projimthree->pimr_others_targ_2021_phyprogress}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="others_2021_actu_phyprogress">A'21:</label>
                                            <input class="form-control" id="others_2021_actu_phyprogress" name="others_2021_actu_phyprogress" value="{{$data->projimthree->pimr_others_actu_2021_phyprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14h. Others</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Disbursement Progress(in Million PhP)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2017_disprogress">2017:</label>
                                            <input class="form-control" id="others_2017_disprogress" name="others_2017_disprogress" value="{{$data->projimthree->pimr_others_2017_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2018_disprogress">2018:</label>
                                            <input class="form-control" id="others_2018_disprogress" name="others_2018_disprogress" value="{{$data->projimthree->pimr_others_2018_disprogress}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2019_disprogress">2019:</label>
                                            <input class="form-control" id="others_2019_disprogress" name="others_2019_disprogress" value="{{$data->projimthree->pimr_others_2019_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_2020_disprogress">2020:</label>
                                            <input class="form-control" id="others_2020_disprogress" name="others_2020_disprogress" value="{{$data->projimthree->pimr_others_2020_disprogress}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_2021_disprogress">2021:</label>
                                            <input class="form-control" id="others_2021_disprogress" name="others_2021_disprogress" value="{{$data->projimthree->pimr_others_2021_disprogress}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-4 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">14h. Others</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Contract Duration(Date/s)</h5>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="others_startdate">Start:</label>
                                            <input class="form-control" id="others_startdate" name="others_startdate" type="date" value="{{$data->projimthree->pimr_others_startdate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_originalend">Original End:</label>
                                            <input class="form-control" id="others_originalend" name="others_originalend" type="date" value="{{$data->projimthree->pimr_others_originalend}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_ate">ATE:</label>
                                            <input class="form-control" id="others_ate" name="others_ate" type="date" value="{{$data->projimthree->pimr_others_ate}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_actualend">Actual End:</label>
                                            <input class="form-control" id="others_actualend" name="others_actualend" type="date" value="{{$data->projimthree->pimr_others_actualend}}">
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <div class="col-md-4 mb-3">
                                    <label>15. Current Project Status</label>
                                    <select class="form-control" name="project_status" id="project_status" style="width: 100%; cursor: pointer">
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
                                    <label for="audit_coverage">Audit Coverage</label>
                                    <input type="text" class="form-control" id="audit_coverage" name="audit_coverage" value="{{$data->projimthree->pimr_audit_coverage}}"  readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="test_to_perform">Test to Perform</label>
                                    <input type="text" class="form-control" id="test_to_perform" name="test_to_perform" value="{{$data->projimthree->pimr_test_to_perform}}" readonly>
                                </div>
                                <div class="col-md-6 mb-3 pl-2 checkbox">
                                    <div class="col-md-12 px-0">
                                        <label style="cursor: pointer;">
                                            <input type="checkbox" id="number_days"/> Days Suspended if any
                                        </label>
                                    </div>
                                    <div class="col-md-12 px-0">
                                        <input class="form-control" type="text" name="days_suspended" id="days_suspended" disabled="disabled" value="{{$data->projimthree->pimr_days_suspended}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 pl-2 checkbox">
                                    <div class="col-md-12 px-0">
                                        <label style="cursor: pointer;">
                                            <input type="checkbox" id="other_component"/> Slippage if any(%)
                                        </label>
                                    </div>
                                    <div class="col-md-12 px-0">
                                        <input class="form-control" type="text" name="other_test_perform" id="other_test_perform" disabled="disabled" value="{{$data->projimthree->pimr_other_test_to_perform}}"/>
                                    </div>
                                </div>
                                <fieldset class="col-md-12 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">16. Variation Register</label>
                                    <h5 for="variation register" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">Variations</h5>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="variation_ref_no">Ref. No.:</label>
                                            <input class="form-control" id="variation_ref_no" name="variation_ref_no" value="{{$data->projimthree->pimr_variation_ref_num}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="variation_description">Description:</label>
                                            <input class="form-control" id="variation_description" name="variation_description" value="{{$data->projimthree->pimr_variation_desc}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="variation_cost">Cost(Php in Million):</label>
                                            <input class="form-control" id="variation_cost" name="variation_cost" value="{{$data->projimthree->pimr_variation_cost}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="variation_approved_date">Approved Date:</label>
                                            <input class="form-control" id="variation_approved_date" name="variation_approved_date" type="date" value="{{$data->projimthree->pimr_variation_desc}}">
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
                                        <input class="form-control" type="text" name="other_cause" id="other_cause" value="{{$data->projimthree->pimr_cause_of_delay_others}}" readonly/>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label>18. Cost Analysis</label>
                                    <select class="form-control" name="cost_analysis" id="cost_analysis" style="width: 100%; cursor: pointer">
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
                                            <input class="form-control" id="total_number_reported_loss" name="total_number_reported_loss" value="{{$data->projopex->oma_major_loss_life_reported}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="total_number_reported_accident">Total # Reported(Accident):</label>
                                            <input class="form-control" id="total_number_reported_accident" name="total_number_reported_accident" value="{{$data->projopex->oma_major_accident_reported}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="total_number_reported_damage">Total # Reported(Damage):</label>
                                            <input class="form-control" id="total_number_reported_damage" name="total_number_reported_damage" value="{{$data->projopex->oma_major_damage_prop_reported}}">
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
                                            <input class="form-control" id="total_number_reported_minor_acc" name="total_number_reported_minor_acc" value="{{$data->projopex->oma_minor_damage_reported}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="total_number_reported_minor_dam">Total # Reported(Damage):</label>
                                            <input class="form-control" id="total_number_reported_minor_dam" name="total_number_reported_minor_dam" value="{{$data->projopex->oma_minor_damage_reported}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="col-md-6 mb-3">
                                    <label>20. As-Built/In-Place Features</label>
                                    <select class="form-control" name="in_place_features" id="in_place_features" style="width: 100%; cursor: pointer">
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
                                    <label>21. Utilization/Usefulness</label>
                                    <select class="form-control" name="contract_type" id="contract_type" style="width: 100%; cursor: pointer">
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
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="salaries_wages" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22a. Salaries and Wages (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="salwag_2017_opex">2017:</label>
                                            <input class="form-control" id="salwag_2017_opex" name="salwag_2017_opex" value="{{$data->projopex->oma_salwag_2017_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="salwag_2018_opex">2018:</label>
                                            <input class="form-control" id="salwag_2018_opex" name="salwag_2018_opex" value="{{$data->projopex->oma_salwag_2018_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="salwag_2019_opex">2019:</label>
                                            <input class="form-control" id="salwag_2019_opex" name="salwag_2019_opex" value="{{$data->projopex->oma_salwag_2019_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="salwag_2020_opex">2020:</label>
                                            <input class="form-control" id="salwag_2020_opex" name="salwag_2020_opex" value="{{$data->projopex->oma_salwag_2020_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="salwag_2021_opex">2021:</label>
                                            <input class="form-control" id="salwag_2021_opex" name="salwag_2021_opex" value="{{$data->projopex->oma_salwag_2021_opex}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="power_light" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22b. Power and Light (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="powlight_2017_opex">2017:</label>
                                            <input class="form-control" id="powlight_2017_opex" name="powlight_2017_opex" value="{{$data->projopex->oma_powlight_2017_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="powlight_2018_opex">2018:</label>
                                            <input class="form-control" id="powlight_2018_opex" name="powlight_2018_opex" value="{{$data->projopex->oma_powlight_2018_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="powlight_2019_opex">2019:</label>
                                            <input class="form-control" id="powlight_2019_opex" name="powlight_2019_opex" value="{{$data->projopex->oma_powlight_2019_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="powlight_2020_opex">2020:</label>
                                            <input class="form-control" id="powlight_2020_opex" name="powlight_2020_opex" value="{{$data->projopex->oma_powlight_2020_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="powlight_2021_opex">2021:</label>
                                            <input class="form-control" id="powlight_2021_opex" name="powlight_2021_opex" value="{{$data->projopex->oma_powlight_2021_opex}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="repairs_maintenance" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22c. Repairs and Maintenance (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="repmain_2017_opex">2017:</label>
                                            <input class="form-control" id="repmain_2017_opex" name="repmain_2017_opex" value="{{$data->projopex->oma_repmain_2017_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="repmain_2018_opex">2018:</label>
                                            <input class="form-control" id="repmain_2018_opex" name="repmain_2018_opex" value="{{$data->projopex->oma_repmain_2018_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="repmain_2019_opex">2019:</label>
                                            <input class="form-control" id="repmain_2019_opex" name="repmain_2019_opex" value="{{$data->projopex->oma_repmain_2019_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="repmain_2020_opex">2020:</label>
                                            <input class="form-control" id="repmain_2020_opex" name="repmain_2020_opex" value="{{$data->projopex->oma_repmain_2020_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="repmain_2021_opex">2021:</label>
                                            <input class="form-control" id="repmain_2021_opex" name="repmain_2021_opex" value="{{$data->projopex->oma_repmain_2021_opex}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="contracted_services" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22d. Contracted Services (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="conservice_2017_opex">2017:</label>
                                            <input class="form-control" id="conservice_2017_opex" name="conservice_2017_opex" value="{{$data->projopex->oma_conservice_2017_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="conservice_2018_opex">2018:</label>
                                            <input class="form-control" id="conservice_2018_opex" name="conservice_2018_opex" value="{{$data->projopex->oma_conservice_2018_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="conservice_2019_opex">2019:</label>
                                            <input class="form-control" id="conservice_2019_opex" name="conservice_2019_opex" value="{{$data->projopex->oma_conservice_2019_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="conservice_2020_opex">2020:</label>
                                            <input class="form-control" id="conservice_2020_opex" name="conservice_2020_opex" value="{{$data->projopex->oma_conservice_2020_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="conservice_2021_opex">2021:</label>
                                            <input class="form-control" id="conservice_2021_opex" name="conservice_2021_opex" value="{{$data->projopex->oma_conservice_2021_opex}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="treatment_cost" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22e. Treatment Cost (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="treatcost_2017_opex">2017:</label>
                                            <input class="form-control" id="treatcost_2017_opex" name="treatcost_2017_opex" value="{{$data->projopex->oma_treatcost_2017_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="treatcost_2018_opex">2018:</label>
                                            <input class="form-control" id="treatcost_2018_opex" name="treatcost_2018_opex" value="{{$data->projopex->oma_treatcost_2018_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="treatcost_2019_opex">2019:</label>
                                            <input class="form-control" id="treatcost_2019_opex" name="treatcost_2019_opex" value="{{$data->projopex->oma_treatcost_2019_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="treatcost_2020_opex">2020:</label>
                                            <input class="form-control" id="treatcost_2020_opex" name="treatcost_2020_opex" value="{{$data->projopex->oma_treatcost_2020_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="treatcost_2021_opex">2021:</label>
                                            <input class="form-control" id="treatcost_2021_opex" name="treatcost_2021_opex" value="{{$data->projopex->oma_treatcost_2021_opex}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="connection_charge" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22f. Connection Charges (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="concharge_2017_opex">2017:</label>
                                            <input class="form-control" id="concharge_2017_opex" name="concharge_2017_opex" value="{{$data->projopex->oma_concharge_2017_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="concharge_2018_opex">2018:</label>
                                            <input class="form-control" id="concharge_2018_opex" name="concharge_2018_opex" value="{{$data->projopex->oma_concharge_2018_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="concharge_2019_opex">2019:</label>
                                            <input class="form-control" id="concharge_2019_opex" name="concharge_2019_opex" value="{{$data->projopex->oma_concharge_2019_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="concharge_2020_opex">2020:</label>
                                            <input class="form-control" id="concharge_2020_opex" name="concharge_2020_opex" value="{{$data->projopex->oma_concharge_2020_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="concharge_2021_opex">2021:</label>
                                            <input class="form-control" id="concharge_2021_opex" name="concharge_2021_opex" value="{{$data->projopex->oma_concharge_2021_opex}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="record_of_work">Major OPEX Items</label>
                                    <h5 for="reg_cost" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22g. Regulatory Cost (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="regcost_2017_opex">2017:</label>
                                            <input class="form-control" id="regcost_2017_opex" name="regcost_2017_opex" value="{{$data->projopex->oma_regcost_2017_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="regcost_2018_opex">2018:</label>
                                            <input class="form-control" id="regcost_2018_opex" name="regcost_2018_opex" value="{{$data->projopex->oma_regcost_2018_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="regcost_2019_opex">2019:</label>
                                            <input class="form-control" id="regcost_2019_opex" name="regcost_2019_opex" value="{{$data->projopex->oma_regcost_2019_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="regcost_2020_opex">2020:</label>
                                            <input class="form-control" id="regcost_2020_opex" name="regcost_2020_opex" value="{{$data->projopex->oma_regcost_2020_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="regcost_2021_opex">2021:</label>
                                            <input class="form-control" id="regcost_2021_opex" name="regcost_2021_opex" value="{{$data->projopex->oma_regcost_2021_opex}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6 mb-3" style="border-radius: 5px; background: #f1f2f6">
                                    <label for="others_opex">Major OPEX Items</label>
                                    <h5 for="contract_components" style="background-color: #dfe4ea; color: black; padding: 5px 10px; border-radius: 5px">22h. Other Direct Cost (PhP in Million)</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2017_opex">2017:</label>
                                            <input class="form-control" id="others_2017_opex" name="others_2017_opex" value="{{$data->projopex->oma_others_2017_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2018_opex">2018:</label>
                                            <input class="form-control" id="others_2018_opex" name="others_2018_opex" value="{{$data->projopex->oma_others_2018_opex}}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="others_2019_opex">2019:</label>
                                            <input class="form-control" id="others_2019_opex" name="others_2019_opex" value="{{$data->projopex->oma_others_2019_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_2020_opex">2020:</label>
                                            <input class="form-control" id="others_2020_opex" name="others_2020_opex" value="{{$data->projopex->oma_others_2020_opex}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="others_2021_opex">2021:</label>
                                            <input class="form-control" id="others_2021_opex" name="others_2021_opex" value="{{$data->projopex->oma_others_2021_opex}}">
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label>Audit Observation Highlights:</label>
                                      <textarea class="form-control" rows="2" name="audit_obsevation_highlights" id="audit_obsevation_highlights">{{$data->projopex->arm_audit_obeservation_highlights}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                      <label>Audit Response:</label>
                                      <textarea class="form-control" rows="2" name="audit_response" id="audit_response">{{$data->projopex->arm_audit_response}}</textarea>
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
                                            @if($data->audit->audit_relevance_to_service == 'ABP')
                                                <option selected value="ABP">Included in the Approved Business Plan(ABP)</option>
                                                <option value="CSP">Components of a System Project</option>
                                                <option value="SOB">Relevant to Service Obligation</option>
                                                <option value="NRE">No Relevance</option> 
                                            @elseif($data->audit->audit_relevance_to_service == 'CSP')
                                                <option value="ABP">Included in the Approved Business Plan(ABP)</option>
                                                <option selected value="CSP">Components of a System Project</option>
                                                <option value="SOB">Relevant to Service Obligation</option>
                                                <option value="NRE">No Relevance</option> 
                                            @elseif($data->audit->audit_relevance_to_service == 'SOB')
                                                <option value="ABP">Included in the Approved Business Plan(ABP)</option>
                                                <option value="CSP">Components of a System Project</option>
                                                <option selected value="SOB">Relevant to Service Obligation</option>
                                                <option value="NRE">No Relevance</option> 
                                            @elseif($data->audit->audit_relevance_to_service == 'NRE')
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
                                        <select class="form-control" name="relevance_obligation" id="relevance_obligation_tci" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_relevance_to_service == "DRE")
                                                <option selected value="DRE">Directly Relevant</option>
                                                <option value="LRE">Less Relevant</option>
                                                <option value="NRL">Not Relevant</option> 
                                            @elseif($data->audit->audit_relevance_to_service == "LRE")
                                                <option value="DRE">Directly Relevant</option>
                                                <option selected value="LRE">Less Relevant</option>
                                                <option value="NRL">Not Relevant</option> 
                                            @elseif($data->audit->audit_relevance_to_service == "NRL")
                                                <option value="DRE">Directly Relevant</option>
                                                <option value="LRE">Less Relevant</option>
                                                <option selected value="NRL">Not Relevant</option> 
                                            @else
                                                <option value="DRE">Directly Relevant</option>
                                                <option value="LRE">Less Relevant</option>
                                                <option value="NRL">Not Relevant</option>                
                                            @endif
                                        </select>
                                    </div>
                                   
                                    <div class="col-md-4 mb-3" id="results_relevance_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_relevance" name="results_relevance" onchange="myFunction(this.value)" readonly value="{{$data->audit->audit_res_relevance_to_service}}">
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="adequate_label" style="display: none;">Adequate Planning:</label>
                                        <select class="form-control" name="adequate_planning" id="adequate_planning_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_adequate_planning == "AVS")
                                                <option selected value="AVS">Availability of necessary studies</option>
                                                <option value="PPL">Poor Planning</option>     
                                            @elseif($data->audit->audit_adequate_planning == "PPL")
                                                <option value="AVS">Availability of necessary studies</option>
                                                <option selected value="PPL">Poor Planning</option>     
                                            @else
                                                <option value="AVS">Availability of necessary studies</option>
                                                <option value="PPL">Poor Planning</option>               
                                            @endif
                                        </select>
                                        <select class="form-control" name="adequate_planning" id="adequate_planning_tci_big" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_adequate_planning == "FSB")
                                                <option selected value="FSB">Feasibility Study and Best Option (If all the alternative options have been considered and the best option has been selected through value analysis and value engineering.)</option>
                                                <option value="FSO">Feasibility Study Only</option> 
                                            @elseif($data->audit->audit_adequate_planning == "FSO")
                                                <option value="FSB">Feasibility Study and Best Option (If all the alternative options have been considered and the best option has been selected through value analysis and value engineering.)</option>
                                                <option selected value="FSO">Feasibility Study Only</option> 
                                            @else
                                                <option value="FSB">Feasibility Study and Best Option (If all the alternative options have been considered and the best option has been selected through value analysis and value engineering.)</option>
                                                <option value="FSO">Feasibility Study Only</option> 
                                            @endif         
                                        </select>
                                        <select class="form-control" name="adequate_planning" id="adequate_planning_tci_sml" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_adequate_planning == "BCS")
                                                <option selected value="BCS">Business Case Study/ Project Study/ Cost-Benefit Analysis</option>
                                                <option value="LSA">If limited study/analysis has been done</option>            
                                                <option value="NSA">If no study/analysis has been done</option>  
                                            @elseif($data->audit->audit_adequate_planning == "LSA")
                                                <option value="BCS">Business Case Study/ Project Study/ Cost-Benefit Analysis</option>
                                                <option selected value="LSA">If limited study/analysis has been done</option>            
                                                <option value="NSA">If no study/analysis has been done</option>  
                                            @elseif($data->audit->audit_adequate_planning == "NSA")
                                                <option value="BCS">Business Case Study/ Project Study/ Cost-Benefit Analysis</option>
                                                <option value="LSA">If limited study/analysis has been done</option>            
                                                <option selected value="NSA">If no study/analysis has been done</option>  
                                            @else
                                                <option value="BCS">Business Case Study/ Project Study/ Cost-Benefit Analysis</option>
                                                <option value="LSA">If limited study/analysis has been done</option>            
                                                <option value="NSA">If no study/analysis has been done</option>  
                                            @endif
                                                      
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_adequate_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_adequate" name="results_adequate" value="{{$data->audit->audit_res_adequate_planning}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="risk_label" style="display: none;">Risk Assessment and Mitigation:</label>
                                        <select class="form-control" name="risk_assessment_mitigation" id="risk_assessment_mitigation_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_risk_mitigation == "WRM")
                                                <option selected value="WRM">With Risk Analysis and Mitigation</option>
                                                <option value="NRM">W/O Risk Analysis and Mitigation</option>
                                            @elseif($data->audit->audit_risk_mitigation == "NRM")
                                                <option value="WRM">With Risk Analysis and Mitigation</option>
                                                <option selected value="NRM">W/O Risk Analysis and Mitigation</option>
                                            @else
                                                <option value="WRM">With Risk Analysis and Mitigation</option>
                                                <option value="NRM">W/O Risk Analysis and Mitigation</option>
                                            @endif
                                            
                                        </select>
                                        <select class="form-control" name="risk_assessment_mitigation" id="risk_assessment_mitigation_tci" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_risk_mitigation == "RAM")
                                                <option selected value="RAM">Risk Analysis and Mitigation Measures</option>
                                                <option value="RAO">Risk Analysis Only</option>
                                            @elseif($data->audit->audit_risk_mitigation == "RAO")
                                                <option value="RAM">Risk Analysis and Mitigation Measures</option>
                                                <option selected value="RAO">Risk Analysis Only</option>
                                            @else
                                                <option value="RAM">Risk Analysis and Mitigation Measures</option>
                                                <option value="RAO">Risk Analysis Only</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_risk_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_risk" name="results_risk" value="{{$data->audit->audit_res_risk_mitigation}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="cost_label" style="display: none;">Cost within Benchmark:</label>
                                        <select class="form-control" name="cost_within_benchmark" id="cost_within_benchmark_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
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
                                        <br><span id="procurement_span" style="display: none;">Procurement</span>
                                        <select class="form-control" name="cost_within_benchmark_procurement" id="cost_within_benchmark_tcia" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_procurement_process == "TDI")
                                                <option selected value="TDI">If the procurement was done through direct invitation and/or transparent but with stringent eligibility requirements</option>
                                                <option value="TRF">If the procurement was done through raffle</option>
                                                <option value="TNG">If the procurement was done through negotiation</option>
                                            @elseif($data->audit->audit_procurement_process == "TRF")
                                                <option value="TDI">If the procurement was done through direct invitation and/or transparent but with stringent eligibility requirements</option>
                                                <option selected value="TRF">If the procurement was done through raffle</option>
                                                <option value="TNG">If the procurement was done through negotiation</option>
                                            @elseif($data->audit->audit_procurement_process == "TNG")
                                                <option value="TDI">If the procurement was done through direct invitation and/or transparent but with stringent eligibility requirements</option>
                                                <option value="TRF">If the procurement was done through raffle</option>
                                                <option selected value="TNG">If the procurement was done through negotiation</option>
                                            @else
                                                <option value="TDI">If the procurement was done through direct invitation and/or transparent but with stringent eligibility requirements</option>
                                                <option value="TRF">If the procurement was done through raffle</option>
                                                <option value="TNG">If the procurement was done through negotiation</option>
                                            @endif
                                        </select>
                                        <span id="benchmark_span" style="display: none;">Benchmark Cost</span>
                                        <select class="form-control" name="cost_within_benchmark" id="cost_within_benchmark_tcib" style="width: 100%; display: none; cursor: pointer" disabled>
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_cost_benchmark == "LTF")
                                                <option selected value="LTF">If it is less than or equal to 5% of the benchmark cost</option>
                                                <option value="GTF">If it is greater than 5% but not more than 10%</option>
                                                <option value="GTT">If it is greater than 10% but not more than 15% </option>
                                                <option value="GTN">If it is greater than 15%</option>
                                            @elseif($data->audit->audit_cost_benchmark == "GTF")
                                                <option value="LTF">If it is less than or equal to 5% of the benchmark cost</option>
                                                <option selected value="GTF">If it is greater than 5% but not more than 10%</option>
                                                <option value="GTT">If it is greater than 10% but not more than 15% </option>
                                                <option value="GTN">If it is greater than 15%</option>
                                            @elseif($data->audit->audit_cost_benchmark == "GTT")
                                                <option value="LTF">If it is less than or equal to 5% of the benchmark cost</option>
                                                <option value="GTF">If it is greater than 5% but not more than 10%</option>
                                                <option selected value="GTT">If it is greater than 10% but not more than 15% </option>
                                                <option value="GTN">If it is greater than 15%</option>
                                            @elseif($data->audit->audit_cost_benchmark == "GTN")
                                                <option value="LTF">If it is less than or equal to 5% of the benchmark cost</option>
                                                <option value="GTF">If it is greater than 5% but not more than 10%</option>
                                                <option value="GTT">If it is greater than 10% but not more than 15% </option>
                                                <option selected value="GTN">If it is greater than 15%</option>
                                            @else
                                                <option value="LTF">If it is less than or equal to 5% of the benchmark cost</option>
                                                <option value="GTF">If it is greater than 5% but not more than 10%</option>
                                                <option value="GTT">If it is greater than 10% but not more than 15% </option>
                                                <option value="GTN">If it is greater than 15%</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_cost_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_cost" name="results_cost" value="{{$data->audit->audit_res_cost_benchmark}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="utilization_label" style="display: none;">Effective Utilization:</label>
                                        <select class="form-control" name="effective_utilization" id="effective_utilization_tci_ccb" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_utilization == "EMT")
                                                <option selected value="EMT">Equal or more than the target utilization percentage for the rebasing period under consideration</option>
                                                <option value="FFN">From 51% to 99% of the target percentage</option>
                                                <option value="LTV">Less than 50%</option>
                                                <option value="NUT">Not utilized up to the time of the technical audit </option>
                                            @elseif($data->audit->audit_utilization == "FFN")
                                                <option value="EMT">Equal or more than the target utilization percentage for the rebasing period under consideration</option>
                                                <option selected value="FFN">From 51% to 99% of the target percentage</option>
                                                <option value="LTV">Less than 50%</option>
                                                <option value="NUT">Not utilized up to the time of the technical audit </option>
                                            @elseif($data->audit->audit_utilization == "LTV")
                                                <option value="EMT">Equal or more than the target utilization percentage for the rebasing period under consideration</option>
                                                <option value="FFN">From 51% to 99% of the target percentage</option>
                                                <option selected value="LTV">Less than 50%</option>
                                                <option value="NUT">Not utilized up to the time of the technical audit </option>
                                            @elseif($data->audit->audit_utilization == "NUT")
                                                <option value="EMT">Equal or more than the target utilization percentage for the rebasing period under consideration</option>
                                                <option value="FFN">From 51% to 99% of the target percentage</option>
                                                <option value="LTV">Less than 50%</option>
                                                <option selected value="NUT">Not utilized up to the time of the technical audit </option>
                                            @else
                                                <option value="EMT">Equal or more than the target utilization percentage for the rebasing period under consideration</option>
                                                <option value="FFN">From 51% to 99% of the target percentage</option>
                                                <option value="LTV">Less than 50%</option>
                                                <option value="NUT">Not utilized up to the time of the technical audit </option>
                                            @endif
                                        </select>
                                        <select class="form-control" name="effective_utilization" id="effective_utilization_tci_onb" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_utilization == "LTE")
                                                <option selected value="LTE">Less than or equal to five (5) yearss</option>
                                                <option value="GTV">Greater than five (5) but not more than ten (10) years</option>
                                                <option value="GTB">Greater than 10 but not more than 15 years</option>
                                                <option value="MTY">More than 15 years</option>
                                            @elseif($data->audit->audit_utilization == "GTV")
                                                <option value="LTE">Less than or equal to five (5) yearss</option>
                                                <option selected value="GTV">Greater than five (5) but not more than ten (10) years</option>
                                                <option value="GTB">Greater than 10 but not more than 15 years</option>
                                                <option value="MTY">More than 15 years</option>
                                            @elseif($data->audit->audit_utilization == "GTB")
                                                <option value="LTE">Less than or equal to five (5) yearss</option>
                                                <option value="GTV">Greater than five (5) but not more than ten (10) years</option>
                                                <option selected value="GTB">Greater than 10 but not more than 15 years</option>
                                                <option value="MTY">More than 15 years</option>
                                            @elseif($data->audit->audit_utilization == "MTY")
                                                <option value="LTE">Less than or equal to five (5) yearss</option>
                                                <option value="GTV">Greater than five (5) but not more than ten (10) years</option>
                                                <option value="GTB">Greater than 10 but not more than 15 years</option>
                                                <option selected value="MTY">More than 15 years</option>
                                            @else
                                                <option value="LTE">Less than or equal to five (5) yearss</option>
                                                <option value="GTV">Greater than five (5) but not more than ten (10) years</option>
                                                <option value="GTB">Greater than 10 but not more than 15 years</option>
                                                <option value="MTY">More than 15 years</option>
                                            @endif
                                        </select>
                                        <select class="form-control" name="effective_utilization" id="effective_utilization_tci_ccs" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_utilization == "TAI")
                                                <option selected value="TAI">Less than or equal to three (3) months after implementation </option>
                                                <option value="TNS">Greater than three (3) months but not more than six (6) months</option>
                                                <option value="TNO">Greater than six (6) months but not more than one (1) year</option>
                                                <option value="MTO">More than one (1) year</option>
                                            @elseif($data->audit->audit_utilization == "TNS")
                                                <option value="TAI">Less than or equal to three (3) months after implementation </option>
                                                <option selected value="TNS">Greater than three (3) months but not more than six (6) months</option>
                                                <option value="TNO">Greater than six (6) months but not more than one (1) year</option>
                                                <option value="MTO">More than one (1) year</option>
                                            @elseif($data->audit->audit_utilization == "TNO")
                                                <option value="TAI">Less than or equal to three (3) months after implementation </option>
                                                <option value="TNS">Greater than three (3) months but not more than six (6) months</option>
                                                <option selected value="TNO">Greater than six (6) months but not more than one (1) year</option>
                                                <option value="MTO">More than one (1) year</option>
                                            @elseif($data->audit->audit_utilization == "MTO")
                                                <option value="TAI">Less than or equal to three (3) months after implementation </option>
                                                <option value="TNS">Greater than three (3) months but not more than six (6) months</option>
                                                <option value="TNO">Greater than six (6) months but not more than one (1) year</option>
                                                <option selected value="MTO">More than one (1) year</option>
                                            @else
                                                <option value="TAI">Less than or equal to three (3) months after implementation </option>
                                                <option value="TNS">Greater than three (3) months but not more than six (6) months</option>
                                                <option value="TNO">Greater than six (6) months but not more than one (1) year</option>
                                                <option value="MTO">More than one (1) year</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_effect_div" style="display: none">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_effect" name="results_effect" value="{{$data->audit->audit_res_utilization}}" readonly>
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
                                            @if($data->audit->audit_timeliness=="ONT")
                                                <option selected value="ONT">On-Time</option>
                                                <option value="PLD">Partially Delayed</option>
                                                <option value="DLY">Delayed</option> 
                                            @elseif($data->audit->audit_timeliness=="PLD")
                                                <option value="ONT">On-Time</option>
                                                <option selected value="PLD">Partially Delayed</option>
                                                <option value="DLY">Delayed</option> 
                                            @elseif($data->audit->audit_timeliness=="DLY")
                                                <option value="ONT">On-Time</option>
                                                <option value="PLD">Partially Delayed</option>
                                                <option selected value="DLY">Delayed</option> 
                                            @else
                                                <option value="ONT">On-Time</option>
                                                <option value="PLD">Partially Delayed</option>
                                                <option value="DLY">Delayed</option> 
                                            @endif                     
                                        </select>
                                        <br><span id="business_plan_span" style="display: none;">Business Plan</span>
                                        <select class="form-control" name="timeliness" id="timeliness_tcica" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_timeliness=="IFS")
                                                <option selected value="IFS">If completed as scheduled</option>
                                                <option value="IDN">If delayed by not more than 1 year</option>
                                                <option value="IDO">If delayed by more than 1 year but not more than 2 years</option>                      
                                                <option value="IDT">If delayed by more than 2 years but not more than 3 years</option>                      
                                                <option value="IDR">If delayed by more than 3 years</option>
                                            @elseif($data->audit->audit_timeliness=="IDN")
                                                <option value="IFS">If completed as scheduled</option>
                                                <option selected value="IDN">If delayed by not more than 1 year</option>
                                                <option value="IDO">If delayed by more than 1 year but not more than 2 years</option>                      
                                                <option value="IDT">If delayed by more than 2 years but not more than 3 years</option>                      
                                                <option value="IDR">If delayed by more than 3 years</option>
                                            @elseif($data->audit->audit_timeliness=="IDO")
                                                <option value="IFS">If completed as scheduled</option>
                                                <option value="IDN">If delayed by not more than 1 year</option>
                                                <option selected value="IDO">If delayed by more than 1 year but not more than 2 years</option>                      
                                                <option value="IDT">If delayed by more than 2 years but not more than 3 years</option>                      
                                                <option value="IDR">If delayed by more than 3 years</option>
                                            @elseif($data->audit->audit_timeliness=="IDT")
                                                <option value="IFS">If completed as scheduled</option>
                                                <option value="IDN">If delayed by not more than 1 year</option>
                                                <option value="IDO">If delayed by more than 1 year but not more than 2 years</option>                      
                                                <option selected value="IDT">If delayed by more than 2 years but not more than 3 years</option>                      
                                                <option value="IDR">If delayed by more than 3 years</option>
                                            @elseif($data->audit->audit_timeliness=="IDR")
                                                <option value="IFS">If completed as scheduled</option>
                                                <option value="IDN">If delayed by not more than 1 year</option>
                                                <option value="IDO">If delayed by more than 1 year but not more than 2 years</option>                      
                                                <option value="IDT">If delayed by more than 2 years but not more than 3 years</option>                      
                                                <option selected value="IDR">If delayed by more than 3 years</option>
                                            @else
                                                <option value="IFS">If completed as scheduled</option>
                                                <option value="IDN">If delayed by not more than 1 year</option>
                                                <option value="IDO">If delayed by more than 1 year but not more than 2 years</option>                      
                                                <option value="IDT">If delayed by more than 2 years but not more than 3 years</option>                      
                                                <option value="IDR">If delayed by more than 3 years</option>
                                            @endif                                         
                                        </select>
                                        <span id="contract_period_span" style="display: none;">Contract Period</span>
                                        <select class="form-control" name="timelinessb" id="timeliness_tci_tcicb" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->auditimelinessb == "ICC")
                                                <option selected value="ICC">If completed within the contract period</option>
                                                <option value="ICL">If completed with less than or equal to 10% slippage</option>
                                                <option value="ICG">If completed with greater than 10% slippage </option> 
                                            @elseif($data->audit->auditimelinessb == "ICL")
                                                <option value="ICC">If completed within the contract period</option>
                                                <option selected value="ICL">If completed with less than or equal to 10% slippage</option>
                                                <option value="ICG">If completed with greater than 10% slippage </option> 
                                            @elseif($data->audit->auditimelinessb == "ICG")
                                                <option value="ICC">If completed within the contract period</option>
                                                <option value="ICL">If completed with less than or equal to 10% slippage</option>
                                                <option selected value="ICG">If completed with greater than 10% slippage </option> 
                                            @else
                                                <option value="ICC">If completed within the contract period</option>
                                                <option value="ICL">If completed with less than or equal to 10% slippage</option>
                                                <option value="ICG">If completed with greater than 10% slippage </option> 
                                            @endif                     
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
                                            <input class="form-control" id="results_timeliness" name="results_timeliness" value="{{$data->audit->audit_res_timeliness}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label id="safety_label" style="display: none;">Safety:</label>
                                        <select class="form-control" name="safety" id="safety_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_safety == "NMA")
                                                <option selected value="NMA">Compliant. No major accidents or less than 5 minor accidents</option>
                                                <option value="NMI">Partially Compliant. No major accidents or with 5-10 minor accidents</option>
                                                <option value="AMI">Non-compliant. At least 1 major accident or more than 10 minor accidents</option>
                                            @elseif($data->audit->audit_safety == "NMI")
                                                <option value="NMA">Compliant. No major accidents or less than 5 minor accidents</option>
                                                <option selected value="NMI">Partially Compliant. No major accidents or with 5-10 minor accidents</option>
                                                <option value="AMI">Non-compliant. At least 1 major accident or more than 10 minor accidents</option>
                                            @elseif($data->audit->audit_safety == "AMI")
                                                <option value="NMA">Compliant. No major accidents or less than 5 minor accidents</option>
                                                <option value="NMI">Partially Compliant. No major accidents or with 5-10 minor accidents</option>
                                                <option selected value="AMI">Non-compliant. At least 1 major accident or more than 10 minor accidents</option>
                                            @else
                                                <option value="NMA">Compliant. No major accidents or less than 5 minor accidents</option>
                                                <option value="NMI">Partially Compliant. No major accidents or with 5-10 minor accidents</option>
                                                <option value="AMI">Non-compliant. At least 1 major accident or more than 10 minor accidents</option>
                                            @endif                      
                                        </select>
                                        <br><span  id="incident_span" style="display: none;">Incident Report During Construction and Within the First Year of Operation</span>
                                        <select class="form-control" name="safety" id="safety_tcica" style="width: 100%; display: none;cursor:  pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_safety == "NAC")
                                                <option selected value="NAC">No accident</option>
                                                <option value="OAC">1 accident</option>
                                                <option value="TAC">2 or more accidents</option>   
                                            @elseif($data->audit->audit_safety == "OAC")
                                                <option value="NAC">No accident</option>
                                                <option selected value="OAC">1 accident</option>
                                                <option value="TAC">2 or more accidents</option>   
                                            @elseif($data->audit->audit_safety == "TAC")
                                                <option value="NAC">No accident</option>
                                                <option value="OAC">1 accident</option>
                                                <option selected value="TAC">2 or more accidents</option>   
                                            @else
                                                <option value="NAC">No accident</option>
                                                <option value="OAC">1 accident</option>
                                                <option value="TAC">2 or more accidents</option>   
                                            @endif
                                                               
                                        </select>
                                        <span  id="manual_span" style="display: none;">Safety Manual</span>
                                        <select class="form-control" name="safetyb" id="safety_tcicb" style="width: 100%;display: none; cursor:  pointer" disabled>
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_safetyb == "AAS")
                                                <option selected value="AAS">Availability and accessibility of the Safety Manual</option>
                                            @else
                                                <option value="AAS">Availability and accessibility of the Safety Manual</option>
                                            @endif
                                            {{-- <option value="NAP">Not Applicable</option>                   --}}
                                        </select>
                                        <span  id="provisions_span" style="display: none;">Safety Provisions</span>
                                        <select class="form-control" name="safetyc" id="safety_tcicc" style="width: 100%; display: none;  cursor: pointer" disabled>
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_safetyc == "NOV")
                                                <option selected value="NOV">No violations</option>
                                                <option value="NMI">1-3 violations</option>
                                                <option value="EMI">4-6 violations</option>                      
                                                <option value="AMI">7 or more violations</option>  
                                            @elseif($data->audit->audit_safetyc == "NMI")
                                                <option value="NOV">No violations</option>
                                                <option selected value="NMI">1-3 violations</option>
                                                <option value="EMI">4-6 violations</option>                      
                                                <option value="AMI">7 or more violations</option>  
                                            @elseif($data->audit->audit_safetyc == "EMI")
                                                <option value="NOV">No violations</option>
                                                <option value="NMI">1-3 violations</option>
                                                <option selected value="EMI">4-6 violations</option>                      
                                                <option value="AMI">7 or more violations</option>  
                                            @elseif($data->audit->audit_safetyc == "AMI")
                                                <option value="NOV">No violations</option>
                                                <option value="NMI">1-3 violations</option>
                                                <option value="EMI">4-6 violations</option>                      
                                                <option selected value="AMI">7 or more violations</option>  
                                            @else
                                                <option value="NOV">No violations</option>
                                                <option value="NMI">1-3 violations</option>
                                                <option value="EMI">4-6 violations</option>                      
                                                <option value="AMI">7 or more violations</option>  
                                            @endif                    
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
                                            <input class="form-control" id="results_safety" name="results_safety" value="{{$data->audit->audit_res_safety}}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-8 mb-3" id="quality_control_div" style="display: none;">
                                        <label>Quality Control:</label>
                                        <br><span>Quality Standards</span>
                                        <select class="form-control" name="quality_control" id="quality_control_tcica" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_quality_control == "QST")
                                                <option selected value="QST">Quality Standards</option>
                                            @else
                                                <option value="QST">Quality Standards</option>
                                            @endif
                                        </select>
                                        <span>Quality Assurance</span>
                                        <select class="form-control" name="quality_controlb" id="quality_control_tcicb" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_quality_controlb == "QAS")
                                                <option selected value="QAS">Quality Assurance</option>
                                            @else
                                                <option value="QAS">Quality Assurance</option>
                                            @endif
                                        </select>
                                        <span>Workmanship/ Materials/ Back job</span>
                                        <select class="form-control" name="quality_controlc" id="quality_control_tcicc" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_quality_controlc == "NBJ")
                                                <option selected value="NBJ">If there is no back job</option>
                                                <option value="BJL">If back job is less than or equal to 1% of contract cost</option>
                                                <option value="BJG">If back job is greater than 1%</option>
                                            @elseif($data->audit->audit_quality_controlc == "BJL")
                                                <option value="NBJ">If there is no back job</option>
                                                <option selected value="BJL">If back job is less than or equal to 1% of contract cost</option>
                                                <option value="BJG">If back job is greater than 1%</option>
                                            @elseif($data->audit->audit_quality_controlc == "BJG")
                                                <option value="NBJ">If there is no back job</option>
                                                <option value="BJL">If back job is less than or equal to 1% of contract cost</option>
                                                <option selected value="BJG">If back job is greater than 1%</option>
                                            @else
                                                <option value="NBJ">If there is no back job</option>
                                                <option value="BJL">If back job is less than or equal to 1% of contract cost</option>
                                                <option value="BJG">If back job is greater than 1%</option>
                                            @endif
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
                                            <input class="form-control" id="results_quality" name="results_quality" value="{{$data->audit->audit_res_quality_control}}" readonly>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-8 mb-3" id="quality_specifications_mwss" style="display: none;">
                                        <label>Quality Control/Specifications:</label>
                                        <select class="form-control" name="specifications" id="specifications_mwss" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_specifications == "AAP")
                                                <option selected value="AAP">Compliant. All are in accordance to plans, specification, and quality standards</option>
                                                <option value="OBA">Non-Compliant. Observed items that are not in accordance to plans, specifications, and quality standards</option>                      
                                            @elseif($data->audit->audit_specifications == "OBA")
                                                <option value="AAP">Compliant. All are in accordance to plans, specification, and quality standards</option>
                                                <option selected value="OBA">Non-Compliant. Observed items that are not in accordance to plans, specifications, and quality standards</option>                      
                                            @else
                                                <option value="AAP">Compliant. All are in accordance to plans, specification, and quality standards</option>
                                                <option value="OBA">Non-Compliant. Observed items that are not in accordance to plans, specifications, and quality standards</option>                      
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-8 mb-3" id="specifications_tcic" style="display: none;">
                                        <label>Specifications:</label>
                                        <br><span>Output Capacity</span>
                                        <select class="form-control" name="specifications" id="specifications_tcica" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_specifications == "ACW")
                                                <option selected value="ACW">If actual capacity is within the design output</option>
                                                <option value="ACG">If actual capacity is less than or equal to 5% of design output</option>                      
                                                <option value="ACL">If actual capacity is less than the design capacity by more than 5%</option>
                                            @elseif($data->audit->audit_specifications == "ACG")
                                                <option value="ACW">If actual capacity is within the design output</option>
                                                <option selected value="ACG">If actual capacity is less than or equal to 5% of design output</option>                      
                                                <option value="ACL">If actual capacity is less than the design capacity by more than 5%</option>
                                            @elseif($data->audit->audit_specifications == "ACL")
                                                <option value="ACW">If actual capacity is within the design output</option>
                                                <option value="ACG">If actual capacity is less than or equal to 5% of design output</option>                      
                                                <option selected value="ACL">If actual capacity is less than the design capacity by more than 5%</option>
                                            @else
                                                <option value="ACW">If actual capacity is within the design output</option>
                                                <option value="ACG">If actual capacity is less than or equal to 5% of design output</option>                      
                                                <option value="ACL">If actual capacity is less than the design capacity by more than 5%</option>
                                            @endif                      
                                        </select>
                                        <span>Key Plan and As-Built Drawing</span>
                                        <select class="form-control" name="specificationsb" id="specifications_tcicb" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_specificationsb == "BAA")
                                                <option selected value="BAA">If both are available</option>
                                                <option value="IEA">If either is available</option>                      
                                                <option value="INA">If neither is available</option>
                                            @elseif($data->audit->audit_specificationsb == "IEA")
                                                <option value="BAA">If both are available</option>
                                                <option selected value="IEA">If either is available</option>                      
                                                <option value="INA">If neither is available</option>
                                            @elseif($data->audit->audit_specificationsb == "INA")
                                                <option value="BAA">If both are available</option>
                                                <option value="IEA">If either is available</option>                      
                                                <option selected value="INA">If neither is available</option>
                                            @else
                                                <option value="BAA">If both are available</option>
                                                <option value="IEA">If either is available</option>                      
                                                <option value="INA">If neither is available</option>
                                            @endif                      
                                        </select>
                                        <span>Field Validation Results</span>
                                        <select class="form-control" name="specificationsc" id="specifications_tcicc" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_specificationsc == "INN")
                                                <option selected value="INN">If no “non-compliance” is found</option>
                                                <option value="ITV">If the total value of “non-compliance” is less than or equal to 5% of the total cost</option>                      
                                                <option value="TVN">If the total value of “non-compliance” is greater than 5%</option>                      
                                            @elseif($data->audit->audit_specificationsc == "ITV")
                                                <option value="INN">If no “non-compliance” is found</option>
                                                <option selected value="ITV">If the total value of “non-compliance” is less than or equal to 5% of the total cost</option>                      
                                                <option value="TVN">If the total value of “non-compliance” is greater than 5%</option>                      
                                            @elseif($data->audit->audit_specificationsc == "TVN")
                                                <option value="INN">If no “non-compliance” is found</option>
                                                <option value="ITV">If the total value of “non-compliance” is less than or equal to 5% of the total cost</option>                      
                                                <option selected value="TVN">If the total value of “non-compliance” is greater than 5%</option>                      
                                            @else
                                                <option value="INN">If no “non-compliance” is found</option>
                                                <option value="ITV">If the total value of “non-compliance” is less than or equal to 5% of the total cost</option>                      
                                                <option value="TVN">If the total value of “non-compliance” is greater than 5%</option>                      
                                            @endif
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
                                            <input class="form-control" id="results_specifications" name="results_specifications" value="{{$data->audit->audit_res_specifications}}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-8 mb-3">
                                        <label id="final_label" style="display:none;">Final Costs:</label>
                                        <select class="form-control" name="final_costs" id="final_costs_mwss" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
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
                                        <br><span id="construction_span" style="display:none;">Construction Cost</span>
                                        <select class="form-control" name="final_costs" id="final_costs_tcia" style="width: 100%; display: none; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_final_cost == "IOB")
                                                <option selected value="IOB">If within 0-5% of contract cost overrun</option>
                                                <option value="IOM">If cost overrun is greater than 5% but not more than 10%</option>
                                                <option value="IOA">If cost overrun is greater than 10% but not more than 15%</option>
                                                <option value="IOF">If cost overrun is more than 15%</option>
                                            @elseif($data->audit->audit_final_cost == "IOM")
                                                <option value="IOB">If within 0-5% of contract cost overrun</option>
                                                <option selected value="IOM">If cost overrun is greater than 5% but not more than 10%</option>
                                                <option value="IOA">If cost overrun is greater than 10% but not more than 15%</option>
                                                <option value="IOF">If cost overrun is more than 15%</option>
                                            @elseif($data->audit->audit_final_cost == "IOA")
                                                <option value="IOB">If within 0-5% of contract cost overrun</option>
                                                <option value="IOM">If cost overrun is greater than 5% but not more than 10%</option>
                                                <option selected value="IOA">If cost overrun is greater than 10% but not more than 15%</option>
                                                <option value="IOF">If cost overrun is more than 15%</option>
                                            @elseif($data->audit->audit_final_cost == "IOF")
                                                <option value="IOB">If within 0-5% of contract cost overrun</option>
                                                <option value="IOM">If cost overrun is greater than 5% but not more than 10%</option>
                                                <option value="IOA">If cost overrun is greater than 10% but not more than 15%</option>
                                                <option selected value="IOF">If cost overrun is more than 15%</option>
                                            @else
                                                <option value="IOB">If within 0-5% of contract cost overrun</option>
                                                <option value="IOM">If cost overrun is greater than 5% but not more than 10%</option>
                                                <option value="IOA">If cost overrun is greater than 10% but not more than 15%</option>
                                                <option value="IOF">If cost overrun is more than 15%</option>
                                            @endif
                                        </select>
                                        <span id="operating_span" style="display:none;">Operating Expenditure Cost (OPEX)</span>
                                        <select class="form-control" name="final_costsb" id="final_costs_tcib" style="width: 100%; display: none; cursor: pointer" disabled>
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_final_costb == "OCE")
                                                <option selected value="OCE">If the operating cost is less than or equal to that of similar facilities using the same technology </option>
                                                <option value="OCH">If the operating cost is within 20% higher than that of similar facilities using the same technology</option>
                                                <option value="OCM">If the operating cost is more than 20% than that of similar facilities using the same technology </option>
                                            @elseif($data->audit->audit_final_costb == "OCH")
                                                <option value="OCE">If the operating cost is less than or equal to that of similar facilities using the same technology </option>
                                                <option selected value="OCH">If the operating cost is within 20% higher than that of similar facilities using the same technology</option>
                                                <option value="OCM">If the operating cost is more than 20% than that of similar facilities using the same technology </option>
                                            @elseif($data->audit->audit_final_costb == "OCM")
                                                <option value="OCE">If the operating cost is less than or equal to that of similar facilities using the same technology </option>
                                                <option value="OCH">If the operating cost is within 20% higher than that of similar facilities using the same technology</option>
                                                <option selected value="OCM">If the operating cost is more than 20% than that of similar facilities using the same technology </option>
                                            @else
                                                <option value="OCE">If the operating cost is less than or equal to that of similar facilities using the same technology </option>
                                                <option value="OCH">If the operating cost is within 20% higher than that of similar facilities using the same technology</option>
                                                <option value="OCM">If the operating cost is more than 20% than that of similar facilities using the same technology </option>
                                            @endif
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_final_costs_div" style="display: none;">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_final_costs" name="results_final_costs" value="{{$data->audit->audit_res_final_cost}}" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-8 mb-3" id="utilization_div" style="display: none;">
                                        <label >Utilization and Usefulness:</label>
                                        <select class="form-control" name="usefulness_utilization" id="utilization_mwss" style="width: 100%; cursor: pointer">
                                            <option value="" selected disabled>Please select an option</option>
                                            @if($data->audit->audit_usefulness == "EFU")
                                                <option selected value="EFU">Effective/Useful. More than 70% of target utilization. Already being used to support and enhance the delivery of service obligation.</option>
                                                <option value="PEF">Partially effective. 50% to 70% of target utilization</option>
                                                <option value="IEF">Ineffective. Less than 50% of target utilization</option>
                                                <option value="NUS">Not useful. Not being used</option>
                                            @elseif($data->audit->audit_usefulness == "PEF")
                                                <option value="EFU">Effective/Useful. More than 70% of target utilization. Already being used to support and enhance the delivery of service obligation.</option>
                                                <option selected value="PEF">Partially effective. 50% to 70% of target utilization</option>
                                                <option value="IEF">Ineffective. Less than 50% of target utilization</option>
                                                <option value="NUS">Not useful. Not being used</option>
                                            @elseif($data->audit->audit_usefulness == "IEF")
                                                <option value="EFU">Effective/Useful. More than 70% of target utilization. Already being used to support and enhance the delivery of service obligation.</option>
                                                <option value="PEF">Partially effective. 50% to 70% of target utilization</option>
                                                <option selected value="IEF">Ineffective. Less than 50% of target utilization</option>
                                                <option value="NUS">Not useful. Not being used</option>
                                            @elseif($data->audit->audit_usefulness == "NUS")
                                                <option value="EFU">Effective/Useful. More than 70% of target utilization. Already being used to support and enhance the delivery of service obligation.</option>
                                                <option value="PEF">Partially effective. 50% to 70% of target utilization</option>
                                                <option value="IEF">Ineffective. Less than 50% of target utilization</option>
                                                <option selected value="NUS">Not useful. Not being used</option>
                                            @else
                                                <option value="EFU">Effective/Useful. More than 70% of target utilization. Already being used to support and enhance the delivery of service obligation.</option>
                                                <option value="PEF">Partially effective. 50% to 70% of target utilization</option>
                                                <option value="IEF">Ineffective. Less than 50% of target utilization</option>
                                                <option value="NUS">Not useful. Not being used</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3" id="results_utilization_div" style="display: none;">
                                        <div class="form-group">
                                            <label>Results:</label>
                                            <input class="form-control" id="results_usefulness" name="results_usefulness" value="{{$data->audit->audit_res_usefulness}}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row">
                                <div class="col-md-12 mb-3" id="total_score_div">
                                    <div class="form-group">
                                        <label>Total Score:</label>
                                        <input class="form-control" id="total_score" name="total_score" value="{{$data->audit->audit_total_rating}}" readonly>
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
@push('scripts')
    <script>

        $(document).ready(function(){
        
            $("#audit").click(function () {
                var project_year = document.getElementById('project_year').value;
                var project_status = document.getElementById('project_status').value;
                var project_size = document.getElementById('project_million').value;
                
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
                            $('#relevance_label').show();
                            $('#relevance_obligation_tci').show();
                            $('#results_relevance_div').show();
                            $('#adequate_label').show();
                            $('#adequate_planning_tci_sml').show();
                            $('#results_adequate_div').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#cost_within_benchmark_tcia').show();
                            $('#cost_within_benchmark_tcib').show();
                            $('#results_cost_div').show();
                            $('#risk_label').show();
                            $('#risk_assessment_mitigation_tci').show();
                            $('#results_risk_div').show();
                            $('#utilization_label').show();
                            $('#effective_utilization_tci_ccs').show();
                            $('#results_effect_div').show();
                            
                            // 2017 TCI SMALL CLOSED PROJECT
                        }else if(project_year == '2017' && project_size == 'No' && project_status == 'Closed'){
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

                            // 2017 TCI SMALL COMPLETED PROJECT
                        }else if(project_year == '2017' && project_size == 'No' && project_status == 'Completed'){
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
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#utilization_label').show();
                            $('#results_adequate_div').show();
                            
                            // 2018 TCI SMALL CLOSED PROJECT
                        }else if(project_year == '2018' && project_size == 'No' && project_status == 'Closed'){
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

                            // 2018 TCI SMALL CCOMPLETED PROJECT
                        }else if(project_year == '2018' && project_size == 'No' && project_status == 'Completed'){
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
                            $('#relevance_label').show();
                            $('#adequate_label').show();
                            $('#risk_label').show();
                            $('#cost_label').show();
                            $('#procurement_span').show();
                            $('#benchmark_span').show();
                            $('#utilization_label').show();
                            $('#results_adequate_div').show();
                            
                            // 2019 TCI SMALL CLOSED PROJECT
                        }else if(project_year == '2019' && project_size == 'No' && project_status == 'Closed'){
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

                            // 2019 TCI SMALL COMPLETED PROJECT
                        }else if(project_year == '2019' && project_size == 'No' && project_status == 'Completed'){
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
                            // alert("Please refresh this page and insert the correct inputs.");
                        }


            });
            $('#project_edit_form').on('submit', function(event){
            event.preventDefault();
            var formData = new FormData($('#project_edit_form')[0]);
            $.ajax({
            url: "{{ route('projects.update') }}",
            method:"POST",
            data:formData,
            cache: false,
            contentType: false,
            processData: false,
            success:function(result){
                if(result.error){
                    $('#edit_project_modal').modal('show');
                    toastr.error(result.error);
                }
                if(result.errors){
                    for(var count = 0; count < result.errors.length; count++){
                        toastr.error(result.errors[count]);
                    }
                }
            }
            });
        });
        })
            
        
    </script>
@endpush