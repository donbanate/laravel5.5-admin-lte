
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'PPSI-Archive') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
  #footer{
    position: fixed;
    height: 100px;
    bottom: -7%;
    width: 100%;
  }
  #login-icon{
    padding: 1.3rem;
    max-width: 30%;
    height: auto;
  }
  </style>
 </head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="../../index2.html"><b>PPSI</b> Archive</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">Project of Pierre and Paul Solutions Inc.</div>
  <!-- /.lockscreen-item -->

  <div class="text-center">
    <a href="{{ route('login') }}"><img id="login-icon" src="{{url('/img/images/login.png')}}" data-toggle="tooltip" title="Click to login" data-placement="bottom" alt="login"></a>
  </div>
  <div class="lockscreen-footer text-center">
      <strong><a  href="http://pierreandpaulsolinc.com">PPS Inc.</a> &copy; <?php echo date('Y'); ?></strong>
  </div>
</div>
<!-- /.center -->
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{url('/js/scripts/scripts.js')}}"></script>
</html>
