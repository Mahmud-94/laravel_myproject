@extends('backend.layouts.app')



@section('css')

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<!-- Data table CSS -->
<link href="{{asset('../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet"
    type="text/css" />

<!-- Custom CSS -->
<link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css">

@endsection



@section('content')







<!-- Main Content -->

<div class="container">
    <!-- Title -->

    <!-- /Title -->

    <!-- Row -->

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">New Agent</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                    <form class="form-horizontal" method="post" action="{{route('agent.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label col-sm-3"
                                                for="exampleInputuname_2">Agent name</label>
                                            <div class="input-group" class="col-sm-9">
                                                <input type="text" class="form-control" name="name" value="{{old('name')}}"
                                                    id="exampleInputuname_2" placeholder="Username">

                                                @error('name')
                                                <div class="alert alert-danger">{{$message}}</div>
                                                @enderror

                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3"
                                                for="exampleInputEmail_2">Expert</label>
                                            <di class="input-group" class="col-sm-9">

                                                <select name="expert" id="" class="form-control">

                                                    <option value="">Select one</option>
                                                    @foreach ($experts as $expert)


                                                    <option value="{{$expert->id}}" @selected(old('expert')==$expert->id)>{{$expert->name}}</option>
                                                    @endforeach
                                                </select>


                                                @error('expert')
                                                <div class="alert alert-danger">{{$message}}</>
                                                    @enderror

                                                    <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </di>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3"
                                                for="exampleInputuname_2">Email</label>
                                            <div class="input-group" class="col-sm-9">
                                                <input type="text" class="form-control" name="email" value="{{old('email')}}"
                                                    id="exampleInputuname_2" placeholder="email">

                                                @error('email')
                                                <div class="alert alert-danger">{{$message}}</div>
                                                @enderror

                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3"
                                                for="exampleInputuname_2">Password</label>
                                            <div class="input-group" class="col-sm-9">
                                                <input type="password" class="form-control" name="password"
                                                    id="exampleInputuname_2" placeholder="password">

                                                @error('password')
                                                <div class="alert alert-danger">{{$message}}</div>
                                                @enderror


                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3"
                                                for="exampleInputuname_2">Confirm Password</label>
                                            <div class="input-group" class="col-sm-9">
                                                <input type="password" class="form-control" name="password_confirmation"
                                                    id="exampleInputuname_2" placeholder="Confirm password">



                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3"
                                                for="exampleInputuname_2">Photo</label>
                                            <div class="input-group" class="col-sm-9">
                                                <input type="file" class="form-control"  name="photo"
                                                    id="exampleInputuname_2" placeholder="Confirm password">



                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Status</label>
                                            <div class="form-control">
                                                <input id="radio1" type="radio" name="status" value="active" @if(old('status')=='active' ) checked @endif>
                                                <label for="radio1">
                                                    Active
                                                </label>
                                                <input id="radio2" type="radio" name="status" value="inactive" @if(old('status')=='inactive' ) checked @endif>
                                                <label for="radio2">
                                                    Inactive
                                                </label>
                                                @error('status')
                                                <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                            </div>

                                        </div>


                                        <div class="form-group mb-0">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <button type="submit" class="btn btn-info ">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- /Row -->
</div>




<!-- /Main Content -->



@endsection




<!-- JavaScript -->

<!-- jQuery -->
@section('js')
<script src="{{asset('../vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Data table JavaScript -->
<script src="{{asset('../vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('../vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('../vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('../vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('../vendors/bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('../vendors/bower_components/pdfmake/build/vfs_fonts.js')}}"></script>

<script src="{{asset('../vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('../vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('dist/js/export-table-data.js')}}"></script>

<!-- Slimscroll JavaScript -->
<script src="{{asset('dist/js/jquery.slimscroll.js')}}"></script>

<!-- Owl JavaScript -->
<script src="{{asset('../vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

<!-- Switchery JavaScript -->
<script src="{{asset('../vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>


<!-- Fancy Dropdown JS -->
<script src="{{asset('dist/js/dropdown-bootstrap-extended.js')}}"></script>

<!-- Init JavaScript -->
<script src="{{asset('dist/js/init.js')}}"></script>

@endsection