<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
    .container{
      padding-top: 7%;
    }
    </style>
</head>
<body class="skin-blue layout-top-nav">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="{{ url('/') }}" class="navbar-brand"><b>PPSI</b> Archive</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="glyphicon glyphicon-menu-hamburger"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
         
          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="#">ABOUT<span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>

  <div class="content-wrapper">
    <div class="container">
      <div class="row">
          <div class="">
              <div class="box box-primary col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <div class="box-header with-border"><b>LOGIN</b></div>
                    <form class="form" role="form" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}
                      <div class="box-body col-md-12 col-sm-12 col-xs-12">
                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email">Email address</label>
                              <input id="email" type="text" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" required autofocus>
                              @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                              @endif
                            </div>
                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password">Password</label>
                              <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
                              @if ($errors->has('password'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                                </span>
                              @endif
                            </div>
                      </div>
                      <!-- /.box-body -->
                  
                      <div class="box-footer col-md-12 col-sm-12 col-xs-12">
                          <button type="submit" class="btn btn-primary">LOGIN</button>
                          <small><a href="{{ route('password.request') }}">
                            I can't remember..
                          </a></small>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div id="footer">
    @include('layouts.footer')
  </div>
</body>
</html>
<script src="{{asset('js/app.js')}}"></script>