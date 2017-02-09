@include('header2')
              <!-- Banner -->
                <section id="banner">
                  <div class="content">
                    <header>

                  <!--  <h1>Selamat Datang</h1> -->
                      <p>Semua Produk Hukum</p>
                    </header>

                      <div class="col-xs-12">
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
               @foreach ($data as $data)
                <tr>
                  <td>{{ $data-> nomor}}</td>
                  <td>{{ $data-> tentang}}</td>
                  <td>{{ $data-> katagori}}</td>
                  <td>{{ $data-> masalah}}</td>
                  <td class="center"><a href="{{URL::to('lihat')}}/{{ $data-> id}}"><i class="fa fa-share-square-o"></i></a>&nbsp;&nbsp;&nbsp;<a href="{{URL::to('download')}}/{{ $data-> dokumen}}"><i class="fa fa-download"></i></a></td>
                </tr>
                @endforeach
                </tbody>
              </table>
              </div>
                  </div>
                </section>
                </div>
          </div>

        <!-- Sidebar -->
          <div id="sidebar">
            <div class="inner">

 @include('menu')
              

              <!-- Footer -->
               
 @include('footer2')
