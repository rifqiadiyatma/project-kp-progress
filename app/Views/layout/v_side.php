  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <div class="bg-light">
    <a href="<?= base_url() ?>" class="brand-link">
      <img src="/assets/bps.png"
           alt="BPS Logo"
           class="brand-image img-circle elevation-3"
           >
      <span class="brand-text font-weight-bold-light">Sistem BPS</span>
    </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <a href ="<?= base_url('profile')?>">
          <img src="<?= base_url('foto/'.session()->get('foto'))?>" class="img-circle elevation-2" alt="User Image">
          </a>
        </div>
        <div class="info">
          <a href="<?= base_url('profile')?>" class="d-block"><?= session()->get('nama_user');?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="<?= base_url() ?>" <?php if($page == "Home"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item nav-link nav-header mt-0">MENU</li>
          <li class="nav-item">
            <a href="<?= base_url('dokumen')?>" <?php if($page == "dokumen"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
              <i class="nav-icon fas fa-folder-open"></i>
              <p>Lihat Dokumen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('dokumen/add')?>" <?php if($page == "add dokumen"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
              <i class="nav-icon fas fa-upload"></i>
              <p>Upload Dokumen</p>
            </a>
          </li>
          

          <li <?php if($page == 'Manajemen Perubahan' or $page =='Penataan Tatalaksana' or $page =='Penataan Manajemen SDM' or $page =='Penguatan Akuntabilitas' or $page =='Penguatan Pengawasan' or $page =='Pelayanan Publik'){ echo "class='nav-item has-treeview menu-open'";} else echo "class='nav-item has-treeview'" ;?>>
            <a href="#" <?php if($page == 'Manajemen Perubahan' or $page =='Penataan Tatalaksana' or $page =='Penataan Manajemen SDM' or $page =='Penguatan Akuntabilitas' or $page =='Penguatan Pengawasan' or $page =='Pelayanan Publik'){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
              <i class="nav-icon fab fa-buffer"></i>
              <p>
                Pilar
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="<?= base_url('pilar/manajemen')?>" <?php if($page == "Manajemen Perubahan"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Manajemen Perubahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pilar/tatalaksana')?>" <?php if($page == "Penataan Tatalaksana"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Penataan Tatalaksana</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pilar/penataansdm')?>" <?php if($page == "Penataan Manajemen SDM"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Penataan SDM</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pilar/akuntabilitas')?>" <?php if($page == "Penguatan Akuntabilitas"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Penguatan Akuntabilitas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pilar/pengawasan')?>" <?php if($page == "Penguatan Pengawasan"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Penguatan Pengawasan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pilar/pelayananpublik')?>" <?php if($page == "Pelayanan Publik"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Pelayanan Publik</p>
                </a>
              </li>
            </ul>
          </li>

          <?php if(session()->get('level')==1){ ?>
            <li <?php if($page == 'MasterK' or $page =='MasterS' or $page =='MasterD' ){ echo "class='nav-item has-treeview menu-open'";} else echo "class='nav-item has-treeview'" ;?>>
            <a href="#" <?php if($page == 'MasterK' or $page =='MasterS' or $page =='MasterD'){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Master File
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">3</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="<?= base_url('masterfile/komponen')?>" <?php if($page == "MasterK"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Komponen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('masterfile/subkomponen')?>" <?php if($page == "MasterS"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Sub Komponen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('masterfile/dokumen')?>" <?php if($page == "MasterD"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
                  <i class="fas fa-briefcase nav-icon"></i>
                  <p>Jenis Dokumen</p>
                </a>
              </li>
              </ul>
          </li>
          <?php } ?>

          <?php if(session()->get('level')==1){ ?>
          <li class="nav-item">
            <a href="<?= base_url('user')?>" <?php if($page == "User"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
              <i class="nav-icon fas fa-user"></i>
              <p>User</p>
            </a>
          </li>
          <?php } ?>

          <?php if(session()->get('level')==1){ ?>
          <li class="nav-item">
            <a href="<?= base_url('periode')?>" <?php if($page == "Periode"){ echo "class='nav-link active'";} else echo "class='nav-link'" ;?>>
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Periode</p>
            </a>
          </li>
          
          <?php } ?>
          <li class="nav-item">
            <a href="<?= base_url('auth/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>

          </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="font-weight-light"><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>">Sistem BPS</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">