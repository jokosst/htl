<!-- Menu -->
                <nav id="menu">
                  <header class="major">
                    <h2><b>Menu </b></h2>
                  </header>
                  <ul>
                    <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i>&nbsp; Beranda</a></li>
                    <li>
                       <span class="opener"><i class="fa fa-files-o"></i>&nbsp; Produk Hukum</span>
                      
                      <ul>
                      @foreach ($dataprodukhukum as $dataprodukhukum)
                        <li><a href="{{URL::to('/produkhukum')}}/{{$dataprodukhukum->katagori}}">{{$dataprodukhukum->katagori}}</a></li>
                         @endforeach
                      </ul>
                    </li>
                    <li><a href="{{URL::to('/kontak')}}"><i class="fa fa-phone-square"></i>&nbsp; Kontak</a></li>
                    
                  </ul>
                </nav>