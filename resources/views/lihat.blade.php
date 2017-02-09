@include('header2')
              <!-- Banner -->
                <section id="banner">
                  <div class="content">
                    <header>

                  <!--  <h1>Selamat Datang</h1> -->
                      <p>{{$data->katagori}}</p>
                    </header>

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
              <label>Tentang</label>
              </div>
              <div class="col-xs-9">
              <p>: &nbsp;&nbsp;{{$data->tentang}}</p>
              </div>                  
            </div>
            <div class="form-group">            
              <div class="col-xs-3">
              <label>Kategori</label>
              </div>
              <div class="col-xs-9">
              <p>: &nbsp;&nbsp;{{$data->katagori}}</p>
              </div>                  
            </div>
            <div class="form-group">            
              <div class="col-xs-3">
              <label>Perihal</label>
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
              <p>: &nbsp;&nbsp;<a href="{{URL::to('download')}}/{{ $data-> dokumen}}"data-toggle="tooltip" data-placement="top" title="Download"><i class="fa fa-download"></i></a></p>
              </div>                  
            </div>
            <div class="box-footer">
                <a href="{{URL::to('/')}}"class="btn btn-primary"><i class="fa fa-angle-double-left"></i> Kembali</a>
              </div>
                
              </div>
              <!-- /.box-body -->
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