@extends('layouts.app')

@section('content')
    <div class="row"> 
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box box-info">

                <div class="box-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success">
                           <p>You are logged in..</p>
                    </div>
                    <div class="box box-default">
                        <div class="box-header"> ADD NEW</div>
                        <div class="box-body">
                            <a href="{{ route('register') }}" class="btn btn-warning btn-flat">ADD USER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
