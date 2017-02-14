<!-- Menu -->
                <nav id="menu">
                  <header class="major">
                    <h2><b>Menu </b></h2>
                  </header>
                  <ul>

                    <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i>&nbsp; Beranda</a></li>
                   @foreach($kategoris as $kdata)
                    <li>
                       <span class="opener"><i class="fa fa-th-list"></i>&nbsp; {{ $kdata->nama_menu }}</span>
                        
                      <ul>
                      @foreach($kdata->submenu as $submenus)
           <li><a href="{{URL::to('/produkhukum')}}/{{$submenus->nama_submenu}}"><i class="fa fa-times-circle-o"> {{ $submenus->nama_submenu }}</i></a>
                        </li>
                        @endforeach
                      
                      </ul>
                      
                    </li>
                    @endforeach
                    <li><a href="{{URL::to('/kontak')}}"><i class="fa fa-phone-square"></i>&nbsp; Kontak</a></li>
                    
                  </ul>
                </nav>