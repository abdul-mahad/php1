<?php session_start(); 
include "layout/header.php"
 ?>

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
    <h1>Main Dashbaord</h1>

    <?php echo $_SESSION["id"]  ?>
    <?php echo $_SESSION["role"]  ?>
    <?php echo $_SESSION["username"]  ?>
    <?php echo $_SESSION["email"]  ?>


   
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php include "layout/footer.php" ?>