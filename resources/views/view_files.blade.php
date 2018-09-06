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
                            <li class="active"><a href="/upload_file"><i class="fa fa-cloud-upload"></i>Upload</a></li>
                            <li><a href="#"><i class="fa fa-files-o"></i>View All</a></li>
                            
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
                  <h3 class="box-title"><i class="fa fa-folder"></i> FILES</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body" style="max-width: 800px">
                            <table id="table_id" class="table table-striped">
                                    <thead>
                                        <tr>
                                                <th>One</th>
                                                <th>Two</th>
                                                <th>Three</th>
                                        </tr>
                                    </thead>
                            <tbody>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>
                                        <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr><tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                        </tr>

                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <!-- /.row -->

@endsection
