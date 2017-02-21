@include('kontributor.header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
     @include('kontributor.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Lihat Produk Hukum</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="form-group">            
              <div class="col-xs-3">
              <label>Nomor</label>
              </div>
              <div class="col-xs-9">
              <p>: &nbsp;&nbsp;{{$data->nomor}}</p>
              </div>                  
            </div>
            <div class="form-group">            
              <div class="col-xs-3">
              <label>Tanggal</label>
              </div>
              <div class="col-xs-9">
              <p>: &nbsp;&nbsp;{{$data->tgl}}</p>
              </div>                  
            </div>
            <div class="form-group">            
              <div class="col-xs-3">
              <label>Tentang</label>
              </div>
              <div class="col-xs-9">
              <p>: &nbsp;&nbsp;{{$data->tentang}}</p>
              </div>                  
            </div>
            <div class="form-group">            
              <div class="col-xs-3">
              <label>Katagori</label>
              </div>
              <div class="col-xs-9">
              <p>: &nbsp;&nbsp;{{$data->katagori}}</p>
              </div>                  
            </div>
            <div class="form-group">            
              <div class="col-xs-3">
              <label>Masalah</label>
              </div>
              <div class="col-xs-9">
              <p>: &nbsp;&nbsp;{{$data->masalah}}</p>
              </div>                  
            </div>
            <div class="form-group">            
              <div class="col-xs-3">
              <label>Bidang</label>
              </div>
              <div class="col-xs-9">
              <p>: &nbsp;&nbsp;{{$data->bidang}}</p>
              </div>                  
            </div>
            <div class="form-group">            
              <div class="col-xs-3">
              <label>Dokumen</label>
              </div>
              <div class="col-xs-9">
              <p>: &nbsp;&nbsp;<a href="#"data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a></p>
              </div>                  
            </div>
            </div>
              <!-- /.box-body -->
            <div class="box-footer">
                <a href="{{URL::to('/kontributor')}}"class="btn btn-primary"><i class="fa fa-angle-double-left"></i> Kembali</a>
              </div>
                
              
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

  @include('kontributor.footer')
