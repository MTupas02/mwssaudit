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
                    <table id="project_info_table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr style="white-space: nowrap;">
                                <th width="10%">View</th>
                                <th>Project Code</th>
                                <th>Project Name</th>
                                <th>Project Stage</th>
                                <th>Project Type</th>
                                <th>Project Subtype</th>
                                <th>Whole Project</th>
                                <th>Project Size</th>
                                <th>Test to Perform</th>
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