@extends('dashboard.layout.total')

@section('style')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/formBuilder/formbuilder.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/formBuilder/jquery-ui.css')}}">

   {{-- <link rel="stylesheet" href="path/to/form-builder.min.css">
    <link rel="stylesheet" href="path/to/form-render.min.css">--}}

@stop

@section('content')

    <div id="fb-editor"></div>

@stop

@section('script')

  {{--  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>--}}
    <script src="{{ asset('dashboard/formBuilder/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('dashboard/formBuilder/form-builder.min.js')}}"></script>
    <script src="{{ asset('dashboard/formBuilder/form-render.min.js')}}"></script>
    {{--<script src="{{ asset('dashboard/formBuilder/fa-Farsi.js')}}"></script>--}}


    <script>



        $(document).ready(function() {

            var formBuilder = $('#fb-editor').formBuilder();
        });


    </script>

@endsection
