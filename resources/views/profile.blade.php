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
                                    
                                                <h3 class="timeline-header"><a href="#">Reminders</a></h3>
                                    
                                                <div class="timeline-body">
                                                    <ul style="margin-left:-3rem;">
                                                            <li>Keep your profile up-to-date</li>
                                                            <li>Your information will be used for verification purposes only</li>
                                                    </ul>
                                                </div>
                                    
                                                <div class="timeline-footer">
                                                    <a class="btn btn-warning btn-xs">Make your profile information precise</a>
                                                </div>
                                            </div>
                                        </li>
                                    
                                    </ul>
                    </div>
                </div>
            </div>
       <div class="col-md-8">
            <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#about" data-toggle="tab">About</a></li>
                      <li class=""><a href="#update" data-toggle="tab" aria-expanded="false">Update</a></li>
                    </ul>
                    <div class="tab-content">
                      <!-- /.tab-pane -->
                      <div class="active tab-pane" id="about">
                        <!-- The timeline -->
                        <div class="box-body">
                                <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
                  
                                <p class="text-muted">
                                  B.S. in Computer Science from the University of Tennessee at Knoxville
                                </p>
                  
                                <hr>
                  
                                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                  
                                <p class="text-muted">Malibu, California</p>
                  
                                <hr>
                  
                                <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                  
                                <p>
                                  <span class="label label-danger">UI Design</span>
                                  <span class="label label-success">Coding</span>
                                  <span class="label label-info">Javascript</span>
                                  <span class="label label-warning">PHP</span>
                                  <span class="label label-primary">Node.js</span>
                                </p>
                  
                                <hr>
                  
                                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                  
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                              </div>
                      </div>
                      <!-- /.tab-pane -->
        
                      <div class="tab-pane" id="update">
                        <form class="form-horizontal">
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
        
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputName" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
        
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>
        
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
        
                            <div class="col-sm-10">
                              <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
        
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div>
       </div>
@endsection
