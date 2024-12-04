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

        <div class="col-md-6">
            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">New client</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-wrap">
                                <form class="form-horizontal" method="post" action="{{route('client.update', $client->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label class="control-label col-sm-3"
                                                for="exampleInputuname_2">client name</label>
                                            <div class="input-group" class="col-sm-9">
                                                <input type="text" class="form-control" name="name" value="{{old('name')?? $client->name}}"
                                                    id="exampleInputuname_2" placeholder="Username">

                                                    @error('name')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror

                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-sm-3"
                                                for="exampleInputuname_2">Email</label>
                                            <div class="input-group" class="col-sm-9">
                                                <input type="text" class="form-control" name="email" value="{{old('email')??$client->email}}"
                                                    id="exampleInputuname_2" placeholder="email">

                                                    @error('email')
													<div class="alert alert-danger">{{$message}}</div>
													@enderror

                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="control-label col-sm-3"
                                                for="exampleInputuname_2">Photo</label>
                                            <div class="input-group" class="col-sm-9">
                                                <input type="file" class="form-control" name="password_confirmation"  name="photo"
                                                    id="exampleInputuname_2" placeholder="Confirm password">



                                                <div class="input-group-addon"><i class="icon-user"></i></div>
                                            </div>
                                        </div>




                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-success  mr-10">Update</button>

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
