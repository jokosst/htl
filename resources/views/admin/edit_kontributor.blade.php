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
        <small>Edit Kontributor</small>
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
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{URL::to('admin/updatekontributor')}}/{{$data->id}}" name="save" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Sebagai</label>
                  <input type="text" name="sebagai" value="{{ $data-> sebagai}}" class="form-control" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name="username" value="{{ $data-> username}}" class="form-control">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="text" name="password" class="form-control">
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="save"class="btn btn-primary">Submit</button>
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
