<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="{{URL::to('/kontributor')}}">
            <i class="fa fa-home"></i> <span>Beranda</span>            
          </a>
        </li>
        <li>
          <a href="{{URL::to('/kontributor/tambah')}}">
            <i class="fa fa-files-o"></i>
            <span>Tambah Prodak Hukum</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
         <li>
          <a href="{{URL::to('/keluar')}}">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        
      </ul>
    </section>