<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-grey">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item align-middle dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-file-alt"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header text-left">Panduan Sistem</span>
          <div class="dropdown-divider"></div>
          <a href="<?=base_url('panduan')?>" class="dropdown-item">
            <i class="fas fa-book mr-2"></i>File Panduan
            <span class="float-right text-muted text-sm">Lihat</span>
          </a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <p class="dropdown-item dropdown-footer"><br><br><br></p>
        </div>
      </li>

    <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="<?= base_url('foto/'.session()->get('foto'))?>" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?= session()->get('nama_user')?></span>
          <i class="fas fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header">
            <img src="<?= base_url('foto/'.session()->get('foto'))?>" class="img-circle elevation-2" alt="User Image">

            <p>
              <?= session()->get('nama_user')?>
            </p>
              <p class="font-weight-bold"><i class="fas fa-cog"></i><?php if(session()->get('level')==1) echo '  Admin  '; else echo '  User  '?><i class="fas fa-cog"></i></p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="<?= base_url('profile')?>" class="btn btn-default">Profile</a>
            <a href="<?= base_url('auth/logout')?>" class="btn btn-default float-right">Logout</a>
          </li>
        </ul>
      </li>
    </ul>
    </ul>

    </nav>
    