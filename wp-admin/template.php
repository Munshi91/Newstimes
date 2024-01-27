<?php  
include ("./includes/header.php")
?>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <!-- your content here -->


  </div>
</div>

<!-- Footer -->
<?php  
include ("./includes/footer.php")
?>

<?php
       // advance  option 
       $do = isset($_POST["do"]) ? $_POST["do"] :"Manage";
  
            //View All data
            if ($do == 'Manage'){
              echo 'All Data Show';
            }
            //Add New  data
            elseif ($do == 'add'){
        echo "Add";

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