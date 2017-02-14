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
        <small>Semua Menu</small>
      </h1>
      <a href="{{URL::to('/admin/tambahmenu')}}" class="btn bg-navy btn-flat margin"><i class="fa fa-plus-circle"></i> Tambah Menu</a>
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
                  <th>NAMA MENU</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $dview)
                <tr>
                  <td>{{ $dview-> nama_menu}}</td>
                  <td class="center">
                  <a href="editmenu/{{ $dview-> id}}"data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                  <a href="hapusmenu/{{ $dview-> id}}" onclick="return confirmSubmit()" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-times-circle"></i></a></td>
                </tr>
                @endforeach
                
                <script>
                  function confirmSubmit()
                    {
                        var agree=confirm("Apakah anda yakin akan menghapus Menu ini?");
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
