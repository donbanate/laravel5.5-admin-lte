<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link  href="{{ url('/storage/images/logo.png') }}" rel="icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/storage/styles/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{url('/storage/scripts/datatable/dataTables.min.css')}}"/>
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div id="wrapper">
        <!-- Header -->
  @include('layouts.header')

  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PPSI Archive
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @yield('content')
        
    </section>
    
</div>
<!--Footer -->
@include('layouts.footer')
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
{{-- Data Table Scripts --}}
<script src="{{url('/storage/scripts/datatable/jquery-3.3.1.js')}}"></script>
<script src="{{url('/storage/scripts/datatable/dataTable.min.js')}}"></script>
<script src="{{url('/storage/scripts/datatable/dataTable.trigger.js')}}"></script>
