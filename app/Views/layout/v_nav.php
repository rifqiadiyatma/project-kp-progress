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
    <li class="nav-item align-middle"><a class="nav-link" href="#" role="button"><i class="fas fa-file-alt"></i></a></li>
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
    