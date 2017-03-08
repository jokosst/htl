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
        <small>Semua Akses Kontributor</small>
      </h1>
      <a href="{{URL::to('admin/tambahakseskontributor')}}" class="btn bg-navy btn-flat margin"><i class="fa fa-plus-circle"></i> Tambah Akses Kontributor</a>
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
                  <th>KONTRIBUTOR</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $dview)
                <tr>
                <td>{{ $dview-> username}}</td>
                  <td class="center">
                  <a href="lihatakseskontri/{{ $dview-> admin_id}}" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-share-square-o"></i></a>
                  </td>
                </tr>
                @endforeach
                
                <script>
                  function confirmSubmit()
                    {
                        var agree=confirm("Apakah anda yakin akan menghapus User ini?");
                        if (agree)
                            return true ;
                        else
                            return false ;
                    }
                </script>
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

  @include('admin.footer')
