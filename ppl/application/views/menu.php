<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url('home') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>M</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MITRA MANDIRI </b>CV</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('images/admin.png') ?>" class="user-image" alt="User Image">
              <span class="hidden-xs">Yudi Setia</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('images/admin.png') ?>" class="img-circle" alt="User Image">

                <p>
                  Yudi Setia - Admin
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= base_url('akun') ?>" class="btn btn-default btn-flat">Akun Anda</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('login/logout') ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('images/admin.png') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Yudi Setia</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li><a href="<?= base_url('home/masterbarang') ?>"> <span>Master Barang</span></a></li>
        <li><a href="<?= base_url('home/daftarpesanan') ?>"> <span>Daftar Pesanan</span></a></li>
        <li><a href="<?= base_url('home/aktivitas') ?>"> <span>Aktivitas</span></a></li>
        <li><a href="<?= base_url('home/tagihan') ?>"> <span>Tagihan</span></a></li>
        <li><a href="<?= base_url('home/hubungikami') ?>"> <span>Hubungi Kami</span></a></li>
        <li><a href="<?= base_url('home/gantipassword') ?>"> <span>Ganti Password</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
