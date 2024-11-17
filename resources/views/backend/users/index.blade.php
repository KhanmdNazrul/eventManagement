@extends('backend.users.app')
@section('contents')
<div class="container-fluid">
<div class="page-title-box">

<div class="page-title-box">
<div class="row align-items-center ">
    <div class="col-md-8">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Welcome to Zegva Dashboard</li>
            </ol>
        </div>
    </div>

    <div class="col-md-4">
        <div class="float-right d-none d-md-block app-datepicker">
            <input type="text" class="form-control" data-date-format="MM dd, yyyy" readonly="readonly" id="datepicker">
            <i class="mdi mdi-chevron-down mdi-drop"></i>
        </div>
    </div>
</div>
</div>




                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Attendee List</h4>
                                   
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
</div>
</div>
</div>

                 

@endsection