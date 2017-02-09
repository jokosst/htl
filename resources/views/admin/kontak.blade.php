@include('admin/header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
     @include('admin/sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Kontak</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
           <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form</h3>
              @if(Session::has('success'))
          <p class="text-success">{{Session::get('success')}}</p>
        @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{URL::to('admin/editkontak')}}" name="save" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" name="email" class="form-control" value="{{$data->email}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor Telpon</label>
                  <input type="text" name="telpon" class="form-control" value="{{$data->telpon}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor Handphone</label>
                  <input type="text" name="hp" class="form-control" value="{{$data->hp}}">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="save"class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('admin/footer')
