@include('header')
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
     @include('sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Semua Produk Hukum</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NOMOR</th>
                  <th>TENTANG</th>
                  <th>KATEGORI</th>
                  <th>PERIHAL</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $dview)
                <tr>
                  <td>{{ $dview-> nomor}}</td>
                  <td>{{ $dview-> tentang}}</td>
                  <td>{{ $dview-> katagori}}</td>
                  <td>{{ $dview-> masalah}}</td>
                  <td class="center"><a href="lihat/{{ $dview-> id}}"><i class="fa fa-share-square-o"></i></a>&nbsp;&nbsp;&nbsp;<a href="download/{{ $dview-> dokumen}}"><i class="fa fa-download"></i></a></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
           
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

  @include('footer')
