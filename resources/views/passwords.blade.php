@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-4">
                <div class="box box-info">
                        <div class="box-body">
                                <ul class="timeline">

                                        <!-- timeline time label -->
                                        <li class="time-label">
                                            <span class="bg-red">
                                                Reminders
                                            </span>
                                        <li>
                                            <!-- timeline icon -->
                                            <i class="fa fa-info bg-blue"></i>
                                            <div class="timeline-item">
                                    
                                                <h3 class="timeline-header"><a href="#">Password Tips</a></h3>
                                    
                                                <div class="timeline-body">
                                                    <ul style="margin-left:-3rem;">
                                                            <li>Make your password at least 6 characters long.</li>
                                                            <li>Never give out your password to anyone</li>
                                                            <li>Check your <a href="profile">username here..</a></li>
                                                    </ul>
                                                </div>
                                    
                                                <div class="timeline-footer">
                                                    <a class="btn btn-warning btn-xs">Always keep your password strong</a>
                                                </div>
                                            </div>
                                        </li>
                                    
                                    </ul>
                    </div>
                </div>
            </div>
       <div class="col-md-8">
           <div class="box box-warning">
               <div class="box-header">Change Password</div>
               <form class="form-horizontal">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
      
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary pull-right">Change</button>
                    </div>
                    <!-- /.box-footer -->
                  </form>
           </div>
       </div>
@endsection
