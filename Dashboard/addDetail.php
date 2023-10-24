<?php session_start(); include "layout/header.php" ?>

<?php include "layout/sidebar.php" ?>
<?php

if(!isset($_SESSION["id"])){
  header("Location:../index.php");
}

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
  <!-- Main content -->
  <section class="content">
    <h1>Add Details</h1>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php include "layout/footer.php" ?>