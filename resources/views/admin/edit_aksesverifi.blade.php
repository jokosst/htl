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
        <small>Edit Akses Verifikator</small>
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
            <form role="form" action="#" name="save" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
              <div class="box-body">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Verifikator</label>
                  
       <select name="admin_id_veri" class="form-control select2" style="width: 100%;">
       @foreach($datav as $data)
 <option value="{{$data->id}}" selected="selected">{{$data->username}}</option>
  @endforeach
                   @foreach($dv as $dview)
                  <option value="{{ $dview-> id}}">{{ $dview-> username}}</option>
                  @endforeach
                </select>

                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kontributor</label>
                   <select name="admin_id_kontri" class="form-control select2" style="width: 100%;">
           @foreach($datak as $data)        
      <option value="{{$data->id}}" selected="selected">{{$data->username}}</option>
      @endforeach
                   @foreach($dk as $dkview)
                  <option value="{{ $dkview-> id}}">{{ $dkview-> username}}</option>
                  @endforeach
                </select>
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
