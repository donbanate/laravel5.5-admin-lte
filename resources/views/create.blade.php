@extends('layouts.app')

@section('content')
        <div class="row">
          <div class="col-md-3">
                <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Actions</h3>
                            
                            <div class="box-tools">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="glyphicon glyphicon-option-horizontal"></i>
                            </button>
                            </div>
                        </div>
                        <div class="box-body no-padding" style="">
                            <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><i class="fa fa-plus-circle"></i>Create</a></li>
                            <li><a href="#"><i class="fa fa-list-alt"></i>List of Users</a></li>
                            <li><a href="#"><i class="fa fa-hourglass-o"></i>Inactive Users</a></li>
                            
                        </ul>
                        </div>
                        <div class="box-footer"></div>
                        <!-- /.box-body -->
                </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
                <div class="box box-primary">

                        <div class="box-header with-border">
                            <h3 class="box-title">Create User </h3>
                        </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="username">Username</label>    
                                        <input type="text" class="form-control" id="username" placeholder="example: chewygnaw">
                                    </div>
                                    <div class="form-group">
                                            <label>User Role</label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                              <option selected="selected">Employee</option>
                                              <option>Intern</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>    
                                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="psswd">Password <small class="text-info"><i>(Atleast 6 characters)</i></small></label>
                                        <input type="password" class="form-control" id="psswd" placeholder="Password">
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>    
                                        <input type="text" class="form-control" id="firstname" placeholder="example: Juan">
                                    </div>
                                    <div class="form-group">
                                        <label for="middlename">Middlename <small class="text-info"><i>(Optional)</i></small> </label>
                                        <input type="text" class="form-control" id="middlename" placeholder="example: Alvarez">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>    
                                        <input type="text" class="form-control" id="lastname" placeholder="example: Cruz">
                                    </div>
                                    <div class="form-group">
                                        <label for="extension">Name Extension <small class="text-info"><i>(if there is)</i></small></label>
                                        <input type="text" class="form-control" id="extension" placeholder="example: Jr.">
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <label for="address">Present Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="example: Shaw Blvd. Mandaluyong City">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_number">Contact Number <small class="text-info"><i>(11 digits only)</i></small></label>
                                        <input type="text" class="form-control" id="contact_number" placeholder="example: 0999 123 672">
                                    </div>
                                    <div class="form-group">
                                        <label for="school">School Name <small class="text-warning"><i>(for interns only)</i></small></label>
                                        <input type="text" class="form-control" id="school" placeholder="example: University of the Philippines">
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position<small class="text-warning"></label>
                                        <input type="text" class="form-control" id="position" placeholder="example: Recruiter">
                                    </div>
                                </div>
                                <!-- /.box-body -->
                    
                                <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                        </form>
                    </div>
        </div>
        <!-- /.row -->

@endsection
