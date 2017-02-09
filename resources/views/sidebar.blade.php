<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="{{URL::to('/')}}">
            <i class="fa fa-home"></i> <span>Beranda</span>
            
          </a>
        </li>
        <li class="treeview">
          <a href="{{URL::to('/sortir')}}">
            <i class="fa fa-archive"></i> <span>Sortir</span>
            
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Prodak Hukum</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">

            @foreach ($dataprodukhukum as $dataprodukhukum)
            <li><a href="{{URL::to('/produkhukum')}}/{{$dataprodukhukum->katagori}}"><i class="fa fa-circle-o"></i> {{$dataprodukhukum->katagori}}</a></li>
            @endforeach
            
          </ul>
        </li>
        <li>
          <a href="{{URL::to('/kontak')}}">
            <i class="fa fa-phone-square"></i> <span>Kontak</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        
      </ul>
    </section>