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

    <!-- <h3></h3>
     <img src="{{asset($property->photo)}}" width="300px">


<div class="col-sm-3"><h2>Property Title : {{$property->title}}</h2></div>
<h4>Property Type : {{$property->ptype}}</h4>
<h5>Bedroom : {{$property->bedroom}}</h5>
<h5>Bathroom : {{$property->bathroom}}</h5>
<h5>Balcony : {{$property->balcony}}</h5>
<h5>Kitchen : {{$property->kitchen}}</h5>
<h5>Property Size : {{$property->size}}</h5>
<h5>Property Price : {{$property->price}}</h5>
<h5>Property Location : {{$property->location}}</h5>
<h5>Property Status : {{$property->status}}</h5> -->

<div class="card text-center text-white bg-secondary mb-3">

<h4>Property Title:<p class="card-title"> {{$property->title}}</p> </h4>
  <img src="{{asset($property->photo)}}" width="300px" class="card-img-top" alt="...">
  <div class="card-body">
  
    <p class="card-text"><strong>Property Type :</strong> {{$property->ptype}}</p>
    <p class="card-text"><strong>Bedroom :</strong> {{$property->bedroom}}</p>
    <p class="card-text"><strong>Bathroom :</strong> {{$property->bathroom}}</p>
    <p class="card-text"><strong>Balcony :</strong> {{$property->balcony}}</p>
    <p class="card-text"><strong>Kitchen :</strong> {{$property->kitchen}}</p>
    <p class="card-text"><strong>Property Size :</strong> {{$property->size}}</p>
    <p class="card-text"><strong>Property Price :</strong> {{$property->price}}</p>
    <p class="card-text"><strong>Property Location :</strong> {{$property->location}}</p>
    <p class="card-text"><strong>Property Status :</strong> {{$property->status}}</p>

    <a href="{{route('property.index')}}" class="btn btn-primary">Back</a>
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
