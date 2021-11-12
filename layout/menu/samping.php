<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="https://ppni.or.id/simk/image/LOGO-PPNI.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?= $nama_web  ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
          if($data_pengguna['foto'] !=''){
          ?>
          <img src="https://ppni.or.id/simk/id/image/foto/<?= $data_pengguna['foto']?>" class="img-circle elevation-2" alt="User Image">
          <?php
          }
          ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $data_pengguna['user_nama']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= $site_url; ?>/dashboard/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-header">Data Kesehatan</li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Survey
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $site_url ?>/data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/wilayah/rw.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekap Data</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/wilayah/rw.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data All</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
          include("../core/security/admin-akses.php");
          if($count_admin >0){
          ?>
          <li class="nav-header">MASTER</li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/jenis-kelamin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Kelamin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendidikan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/pekerjaan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pekerjaan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/golongan-darah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Golongan Darah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/nikah.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pernikahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/status-imunisasi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Satatus Imunisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/status-merokok.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Satatus Merokok</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/rw.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>RW dan RT</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/struktur-keluarga.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Keluarga</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/user-level.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Level</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/key.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Key</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= $site_url ?>/master/fasilitas-keluarga.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fasilitas</p>
                </a>
              </li>
            </ul>
          </li>
          <?php
          }
          ?>
          <li class="nav-item">
            <a href="<?= $site_url ?>/auth/logout.php" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
