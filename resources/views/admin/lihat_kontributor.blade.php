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
        <small>Tambah Kontributor</small>
      </h1>
      
            
             <table>
                <tr>
                <form role="form" action="{{URL::to('admin/createakseskontri2')}}/{{ $datav->id}}" name="save" method="post" enctype="multipart/form-data">
             {{ csrf_field() }}

             <td>         
    <select name="id_kategori" class="form-control select2">
                  <option value="Belum Pilih" selected="selected">-Pilih-</option>
                   @foreach($dk as $dview)
                  <option value="{{ $dview-> id}}">{{ $dview-> nama_submenu}}</option>
                  @endforeach
                </select>

                </td>
                <td>
                  <button type="submit" name="save" class="btn bg-navy btn-flat margin"><i class="fa fa-plus-circle"></i> Tambah</button>
                </td>
                 </form>
                </tr>            
       </table>              
     

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
           
              <h3 class="box-title">{{ $datav->username}}</h3>
              
           
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>KATEGORI</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                @foreach($datas as $dview)
                <tr>
                <td>{{ $dview->nama_submenu}}</td>
                  <td class="center">
                  <!-- <a href="{{URL::to('/admin/editaksesverifikator')}}/{{ $dview-> id}}"data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp; -->
                  <a href="{{URL::to('/admin/hapusakseskontributor')}}/{{ $dview-> id}}" onclick="return confirmSubmit()" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-times-circle"></i></a></td>
                </tr>
                @endforeach
                
                <script>
                  function confirmSubmit()
                    {
                        var agree=confirm("Apakah anda yakin akan menghapus Akses ini?");
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
