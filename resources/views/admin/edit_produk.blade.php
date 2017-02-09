@include('admin.header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
     @include('admin.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Edit Produk Hukum</small>
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
            <form role="form" action="{{URL::to('admin/update')}}/{{$data->id}}" name="save" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor</label>
                  <input type="text" name="nomor" value="{{$data->nomor}}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tentang</label>
                  <input type="text" name="tentang" value="{{$data->tentang}}" class="form-control">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Katagori</label>
                  <select name="katagori" class="form-control select2" style="width: 100%;">
                  <option value="{{$data->katagori}}" selected="selected">{{$data->katagori}}</option>
                  <option value="Peraturan Rektor">Peraturan Rektor</option>
                  <option value="SK Rektor">SK Rektor</option>
                  <option value="SE Rektor">SE Rektor</option>
                  <option value="SOP">SOP</option>
                  <option value="SK Dekan">SK Dekan</option>
                  <option value="SE Dekan">SE Dekan</option>
                  <option value="SOP Fakultas/Jur/Lab">SOP Fakultas/Jur/Lab</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun</label>
                  <select name="tahun" class="form-control select2" style="width: 100%;">
                  <option value="{{$data->tahun}}" selected="selected">{{$data->tahun}}</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Masalah</label>
                  <input type="text" name="masalah" value="masalah" class="form-control">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Bidang</label>
                  <input type="text" name="bidang" value="bidang" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Produk</label>
                  <input type="file" name="dokumen">
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

  @include('admin.footer')
