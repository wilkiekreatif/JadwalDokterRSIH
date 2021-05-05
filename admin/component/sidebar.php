<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <!-- <div class="sidebar-brand-icon">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">Portal Information</div>
      </a>
      <?php  ?>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php
        if($_SESSION['menu']=='dashboard'){
          echo('active');
        }
      ?>">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <?php
        if($_SESSION['level']==0){
      ?>
        <!-- Nav Item - Daily Update -->

        <li class="nav-item <?php
          if(($_SESSION['menu']=='dokter')OR($_SESSION['menu']=='jadwal')){
            echo('active');
          }
        ?>">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Daily Update</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Sub Menu:</h6>
              <a class="collapse-item <?php
          if($_SESSION['menu']=='dokter'){
            echo('active');
          }
        ?>" href="dokter.php">Master Dokter</a>

              <a class="collapse-item <?php
          if($_SESSION['menu']=='jadwal'){
            echo('active');
          }
        ?>" href="jadwal.php">Jadwal Dokter</a>
            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
      <?php
      }
      ?>
      <!-- Heading -->
      <div class="sidebar-heading">
        Pengaturan
      </div>

      <!-- Nav Item - Entry -->
      <li class="nav-item <?php
        if($_SESSION['menu']=='user'){
          echo('active');
        }
      ?>">
        <a class="nav-link" href="user.php">
          <i class="fas fa-fw fa-user"></i>
          <span>User</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->