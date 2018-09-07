@extends('layouts.app')

@section('content')
            @include('layouts.contentMenu')
          <!-- /.col -->
          <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-cloud-upload"></i> UPLOAD FILE</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                        <label>File Name</label>
                        <input type="text" class="form-control" placeholder="Filename.zip">
                    </div>
                    <div class="form-group">
                        <label>Description(s)</label>
                        <textarea class="form-control" rows="3" placeholder="File descriptions or contents.."></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Upload File</label>
                      <input type="file">
    
                      <p class="text-info">Please double check your file.</p>
                    </div>
                  </div>
                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-success btn-flat">UPLOAD</button>
                    <button type="submit" class="btn btn-default btn-flat">CANCEL</button>
                  </div>
                </form>
              </div>
          </div>

        </div>
        <!-- /.row -->

@endsection
