@include('kontributor/header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
     @include('kontributor/sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Tambah Produk Hukum</small>
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
            <form role="form" action="createkontributor" name="save" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}
              <div class="box-body">
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor</label>
                  <input type="text" name="nomor" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal</label>
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
  <input type="text" name="tgl" id="tanggal" class="form-control" required="tgl">
                </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tentang</label>
                  <input type="text" name="tentang" class="form-control">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Kategori</label>
                  <select name="katagori" class="form-control select2" style="width: 100%;">
                  <option value="Belum Pilih" selected="selected">-Pilih-</option>
                   @foreach($data as $dview)
                  <option value="{{ $dview-> nama_submenu}}">{{ $dview-> nama_submenu}}</option>
                  @endforeach
                </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun</label>
                  <select name="tahun" class="form-control select2" style="width: 100%;">
                  <option value="Belum Pilih" selected="selected">-Pilih-</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  <option value="2015">2015</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                   <option value="2019">2019</option>
                  <option value="2020">2020</option>
                </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Perihal</label>
                  <input type="text" name="masalah" class="form-control">
                </div>
                 <div class="form-group">
                  <label for="exampleInputPassword1">Bidang</label>
                  <input type="text" name="bidang" class="form-control">
                </div>
                <div class="form-group">
                 <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn bg-purple">
                        <i class="fa fa-folder-o"></i> Browse&hellip; <input type="file" name="dokumen" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>
                </div>

 <!-- <div class="row">
        <div class="form-group">
        <div class="col-md-2">
          <button class="btn btn-warning" id="scan">Scan</button>
        </div>
        
      </div>

      <div class="form-group">
      <?php // $link = "http://localhost/cmdtwain/scanned_doc/";?>

    <div id="image_load">
      <input type="hidden" name="urutan" id="urutan_gambar" value="">
      <input type="hidden" name="data_scan" id="data_scan" value="">
      <ul id="sortable_image_item">
      </ul>
    </div>
    <br>
    <output id="list"></output>
      </div>
      </div>  -->
 

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
  <!-- Scan -->
  

  @include('kontributor/footer')
