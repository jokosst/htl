@include('header')
  <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
     @include('sidebar')
    <!-- /.sidebar -->
  </aside>
<script type="text/javascript">
    ffunction cari(){
      strcari = $("#txtcari").val();
      strmasalah = $("#txtmasalah").val();
      
      if(strcari !=""){
        $("#hasil").html()
        $.ajax({
          type:"get",
          url:"{{URL::to('cari')}}",
          data:{'strcari': strcari,'strkatagori':strkatagori},
          success: function(data){
          }
        });
      }
    };
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small>Semua Produk Hukum</small>
      </h1>
     
<select name="textcari" id="txtcari" onchange="cari()">
<option value="0">Semua Tahun</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2016">2016</option>
</select>
<select name="katagori" id="txtkatagori" onchange="cari()">
<option value="0">Semua Katagori</option>
  <option value="SK Rektor">SK Rektor</option>
  <option value="SE Rektor">SE Rektor</option>
</select>

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
            <table>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NOMOR</th>
                  <th>TENTANG</th>
                  <th>KATAGORI</th>
                  <th>PERIHAL</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody id="hasil">
                
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
               
              <!--  <tr>
                  <td id="bidang"></td>
                  <td id="dokumen"></td>
                  <td></td>
                  <td></td>
                  <td class="center"><a href="#"><i class="fa fa-share-square-o"></i></a>&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-download"></i></a></td>
                </tr>    -->
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
