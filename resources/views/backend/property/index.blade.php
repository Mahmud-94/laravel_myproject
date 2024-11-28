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
        <div class="col-xl-12">
            <div class="panel panel-default card-view">
                <div class="panel-wrapper collapse in">

                    @if ('msg')
                        <div class="alert alert-success">{{session('msg')}}</div>
                    @endif

                    <div class="panel-body">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table id="example" class="table table-hover display">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Property title</th>
                                            <th>Property type</th>
                                            <th>bedroom</th>
                                            <th>bathroom</th>
                                            <th>balcony</th>
                                            <th>kitchen</th>
                                            <th>size</th>
                                            <th>price</th>

                                            <th>location</th>
                                            <th>Photo</th>

                                            <th>Status</th>

                                            <th style="width: 25%">Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($items as $item)

                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->ptype}}</td>
                                                <td>{{$item->bedroom}}</td>
                                                <td>{{$item->bathroom}}</td>
                                                <td>{{$item->balcony}}</td>
                                                <td>{{$item->kitchen}}</td>
                                                <td>{{$item->size}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>{{$item->location}}</td>
                                                <td>{{$item->photo}}</td>
                                                <!-- <td>{{$item->status}}</td> -->
                                                <td>

                                                        <form action="{{route('property.destroy', $item->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a href="{{route('property.show', $item->id)}}"
                                                        class="btn btn-success">Show</a>
                                                    <a href="{{route('property.edit', $item->id)}}"
                                                        class="btn btn-info">Edit</a>
                                                        <button class="btn btn-danger" type="submit"
                                                            name="submit">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>

                                        @endforeach

                                    </tbody>

                                    <tfoot>
                                        <tr>
                                        <th>ID</th>
                                            <th>Property title</th>
                                            <th>Property type</th>
                                            <th>bedroom</th>
                                            <th>bathroom</th>
                                            <th>balcony</th>
                                            <th>kitchen</th>
                                            <th>size</th>
                                            <th>price</th>

                                            <th>location</th>
                                            <th>Photo</th>

                                            <th>Status</th>

                                            <th>Action</th>

                                    </tfoot>

                                </table>
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
