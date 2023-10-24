<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="dashboard.php" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">
      <?php echo $_SESSION["email"] ?>
    </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">
          <?php echo $_SESSION["username"] ?>
        </a>
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php if ($_SESSION["role"] == "ADMIN") {?>

          <li class="nav-item">
            <a href="addDetail.php" class="nav-link">

              <p>
                <i class="bi bi-file-earmark-plus"></i> Add Product
              </p>
            </a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a href="addDetail.php" class="nav-link">

            <p>
              <i class="bi bi-file-earmark-plus"></i> Product Details
            </p>
          </a>
        </li>
        <li class="nav-header">EXAMPLES</li>

   <?php if ($_SESSION["role"] == "ADMIN") {?>

          <li class="nav-item">
            <a href="order.php" class="nav-link">

              <p>
                <i class="bi bi-file-earmark-plus"></i> order
              </p>
            </a>
          </li>
        <?php } ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>