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
                        <h4 class="page-title">Events Creation Form</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Eventee</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">Form</a>
                            </li>
                            <li class="breadcrumb-item active">New Event Add Form</li>
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
        <!-- end page-title -->

        <div class="row">
            <div class="col-lg-8 offset-2">
                <div class="card">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Add New Event</h4>

                        <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required placeholder="Enter Event Title" />
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" class="form-control" required placeholder="Enter Description" />
                            </div>
                            <div class="form-group">
                                <label>Start Date</label>
                                <input type="date" name="start_date" class="form-control" required placeholder="Enter Description" />
                            </div>
                            <div class="form-group">
                                <label>End Date</label>
                                <input type="date" name="end_date" class="form-control" required placeholder="Enter Description" />
                            </div>

                            <div class="form-group">
                                <label>Start Time</label>
                                <input type="time" name="start_time" class="form-control" />
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control" placeholder="Enter photo" />
                            </div>


                            <div class="form-group">
                                <label>Address</label>
                                <div>
                                    <textarea name="address" required class="form-control" rows="5" placeholder="Event Location"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Number of Tickets</label>
                                <input type="number" name="num_tickets" class="form-control" required placeholder="Ticket Quantity" />
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <div>
                                    <select name="catagory" id="" class="form-control">
                                        <option value="">Select One</option>
                                        @foreach ($catagories as $catagory)
                                        <option value="{{$catagory->id}}" @selected(old('catagory')==$catagory->id)>{{$catagory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Speaker</label>
                                <div>
                                    <select name="speaker" id="" class="form-control">
                                        <option value="">Select One</option>
                                        @foreach ($speakers as $speaker)
                                        <option value="{{$speaker->id}}" @selected(old('speaker')==$speaker->id)>{{$speaker->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Organiser</label>
                                <div>
                                    <select name="organiser" id="" class="form-control">
                                        <option value="">Select One</option>
                                        @foreach ($organisers as $organiser)
                                        <option value="{{$organiser->id}}" @selected(old('organiser')==$organiser->id)>{{$organiser->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Country</label>
                                <div>
                                    <select name="country" id="" class="form-control">
                                        <option value="">Select One</option>
                                        @foreach ($countries as $country)
                                        <option value="{{$country->id}}" @selected(old('country')==$country->id)>{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <label>City</label>
                                <div>
                                    <select name="city" id="" class="form-control">
                                        <option value="">Select One</option>
                                        @foreach ($cities as $city)
                                        <option value="{{$city->id}}" @selected(old('city')==$city->id)>{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

        <!-- container-fluid -->

    </div>

    @endsection