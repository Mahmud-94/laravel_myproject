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
                <h6 class="panel-title txt-dark">New Property</h6>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="panel-wrapper collapse in">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-wrap">
                        <form class="form-horizontal" method="post" action="{{route('property.update', $property->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputuname_2"> Property title</label>
                                    <div class="input-group" class="col-sm-9">
                                        <input type="text" class="form-control" name="title" value="{{old('title')?? $property->title}}"
                                            id="exampleInputuname_2" placeholder="title">

                                        @error('title')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputEmail_2">Property type</label>
                                    <di class="input-group" class="col-sm-9">

                                        <select name="ptype" id="" class="form-control">

                                            <option value="">Select one</option>


                                            <option value="Sell" {{ old('ptype') == 'Sell' ? 'selected' : '' }}>Sell</option>
                                            <option value="Rent" {{ old('ptype') == 'Rent' ? 'selected' : '' }}>Rent</option>


                                        </select>




                                        @error('ptype')
                                        <div class="alert alert-danger">{{$message}}</>
                                            @enderror

                                            <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </di>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputuname_2">Bedroom</label>
                                    <div class="input-group" class="col-sm-9">
                                        <input type="text" class="form-control" name="bedroom" value="{{old('bedroom')?? $property->bedroom}}"
                                            id="exampleInputuname_2" placeholder="bedroom">

                                        @error('bedroom')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputuname_2">bathroom</label>
                                    <div class="input-group" class="col-sm-9">
                                        <input type="text" class="form-control" name="bathroom" value="{{old('bathroom')?? $property->bathroom}}"
                                            id="exampleInputuname_2" placeholder="bathroom">

                                        @error('bathroom')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputuname_2">balcony</label>
                                    <div class="input-group" class="col-sm-9">
                                        <input type="text" class="form-control" name="balcony" value="{{old('balcony')?? $property->balcony}}"
                                            id="exampleInputuname_2" placeholder="balcony">

                                        @error('balcony')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputuname_2">kitchen</label>
                                    <div class="input-group" class="col-sm-9">
                                        <input type="text" class="form-control" name="kitchen" value="{{old('kitchen')?? $property->kitchen}}"
                                            id="exampleInputuname_2" placeholder="kitchen">

                                        @error('kitchen')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputuname_2">size</label>
                                    <div class="input-group" class="col-sm-9">
                                        <input type="text" class="form-control" name="size" value="{{old('size')?? $property->size}}"
                                            id="exampleInputuname_2" placeholder="size">

                                        @error('size')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputuname_2">price</label>
                                    <div class="input-group" class="col-sm-9">
                                        <input type="text" class="form-control" name="price" value="{{old('price')?? $property->price}}"
                                            id="exampleInputuname_2" placeholder="price">

                                        @error('price')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputuname_2">location</label>
                                    <div class="input-group" class="col-sm-9">
                                        <input type="text" class="form-control" name="location" value="{{old('location')?? $property->location}}"
                                            id="exampleInputuname_2" placeholder="location">

                                        @error('location')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3"
                                        for="exampleInputuname_2">Photo</label>
                                    <div class="input-group" class="col-sm-9">
                                        <input type="file" class="form-control" name="photo" value="{{old('photo')?? $property->photo}}"
                                            id="exampleInputuname_2" placeholder="photo">

                                        @error('photo')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <div class="input-group-addon"><i class="icon-user"></i></div>
                                    </div>
                                </div>







                                <div class="form-group">
                                    <label class="control-label col-sm-3">Status</label>
                                    <div class="form-control">
                                        <input id="radio1" type="radio" name="status" value="available" @if(old('status')=='available' ) checked @endif>
                                        <label for="radio1">
                                        Available
                                        </label>
                                        <input id="radio2" type="radio" name="status" value="not_available" @if(old('status')=='not_available' ) checked @endif>
                                        <label for="radio2">
                                        Not available
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
