@extends('backend.parts.app')
@section('content')

@section('css')
<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

<link href="{{asset('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

<!-- Table css -->
<link href="{{asset('plugins/RWD-Table-Patterns/dist/css/rwd-table.min.css')}}" rel="stylesheet" type="text/css" media="screen">

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('js')
<!-- jQuery  -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/metismenu.min.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/waves.min.js')}}"></script>

<script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

<!-- Responsive-table-->
<script src="{{asset('plugins/RWD-Table-Patterns/dist/js/rwd-table.min.js')}}"></script>

<script>
    $(function() {
        $('.table-responsive').responsiveTable({
            addDisplayAllBtn: 'btn btn-secondary'
        });
    });
</script>

<!-- App js -->
<script src="{{asset('js/app.js')}}"></script>
@endsection

<div class="content">

    <div class="container-fluid">
        <div class="page-title-box">

            <div class="row align-items-center ">
                <div class="col-md-8">
                    <div class="page-title-box">
                        <h4 class="page-title">Responsive Table</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Zegva</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Tables</a>
                            </li>
                            <li class="breadcrumb-item active">Responsive Table</li>
                        </ol>


                        @if (session('msg'))
                        <div class="alert alert-success">{{session('msg')}}</div>
                        @endif
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
        <!-- end page-title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Catagory List</h4>
                        <p class="sub-title">Here are the catagories of our Events. </p>

                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th data-priority="1">Name</th>
                                            <th data-priority="3">Details</th>
                                            <th data-priority="1" style="width:230px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       

                                      
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

    </div>
    <!-- container-fluid -->

</div>

@endsection