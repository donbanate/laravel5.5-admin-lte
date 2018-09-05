
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <style>
    #status-active{
      color: #4cd137;
    }
    #nav-option{
      padding-top: 1.3rem;
      color: white;
      font-size: 2rem;
      padding-left: 1rem;
    }
    #user-info-head{
      padding-bottom: 2rem;
    }
  </style>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    @include('layouts.contents')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
<!-- Footer  -->
@include('layouts.footer')
</div>

</body>
</html>
<script src="{{asset('js/app.js')}}"></script>