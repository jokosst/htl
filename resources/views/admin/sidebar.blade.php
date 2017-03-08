<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="{{URL::to('/admin')}}">
            <i class="fa fa-home"></i> <span>Beranda</span>
            
          </a>
        </li>
        <li>
          <a href="{{URL::to('/admin/tambah')}}">
            <i class="fa fa-files-o"></i>
            <span>Tambah Prodak Hukum</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
        </li>
        <li>
          <a href="{{URL::to('/admin/menu')}}">
            <i class="fa fa-bars"></i> <span>Menu</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
         <li>
          <a href="{{URL::to('/admin/submenu')}}">
            <i class="fa  fa-list-ul"></i> <span>Sub Menu</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-user"></i> <span>User</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
          <ul class="treeview-menu">
     <li><a href="{{URL::to('/admin/user')}}"><i class="fa fa-circle-o"></i> Admin</a></li>
    <li><a href="{{URL::to('/admin/verifikator')}}"><i class="fa fa-circle-o"></i> Verifikator</a></li>
<li><a href="{{URL::to('/admin/kontributor')}}"><i class="fa fa-circle-o"></i> Kontributor</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Hak Akses</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
          <ul class="treeview-menu">
    <li><a href="{{URL::to('/admin/aksesverifikator')}}"><i class="fa fa-circle-o"></i> Verifikator</a></li>
<li><a href="{{URL::to('/admin/akseskontributor')}}"><i class="fa fa-circle-o"></i> Kontributor</a></li>
          </ul>
        </li>
        <li>
          <a href="{{URL::to('/admin/kontak')}}">
            <i class="fa fa-phone-square"></i> <span>Kontak</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
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