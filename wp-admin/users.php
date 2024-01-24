<?php  
include ("./includes/header.php")
?>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <!-- your content here -->

    <?php

    if (isset($_GET["do"])){
      $do = $_GET["do"];
    }

    //View All data
    if ($do == 'Manage'){
      echo 'All Data Show';
    }
    //Add New  data
    elseif ($do == 'add'){

    } 
    // Edit  data
    elseif ($do == 'Edit') {
    } 
    // Update data
    elseif ($do == 'Update') {
    } 
    // Delete Data
    elseif ($do == 'delete') {
    }
    ?>

  </div>
</div>

<!-- Footer -->
<?php  
include ("./includes/footer.php")
?>