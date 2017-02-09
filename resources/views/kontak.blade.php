@include('header2')
              <!-- Banner -->
                <section id="banner">
                  <div class="content">
                    <header>

                  <!--  <h1>Selamat Datang</h1> -->
                      <p>Hubungi Kami</p>
                    </header>

                      <div class="col-xs-12">
                   <div class="row-fluid">
  <div class="span12 offset6">
    <div class="well text-center" id="call-center">
      <h4>Kontak Hukum Tata Laksana Universitas Tanjungpura</h4>
     <p><span class="fa fa-envelope-square"></span> {{$data->email}}</p>
     <p><span class="fa fa-phone-square"></span> {{$data->hp}}</p>
    <p><span class="fa fa-phone-square"></span> {{$data->telpon}}</p>
    </div>
  </div>
  </div>
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


