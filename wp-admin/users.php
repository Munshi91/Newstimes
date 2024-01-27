<?php  
include ("./includes/header.php")
?>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">
    <!-- your content here -->

    <?php
       // advance  option 
       $do = isset($_POST["do"]) ? $_POST["do"] :"Manage";
  
            //View All data
            if ($do == 'Manage'){
              ?>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">View All User</h4>
          </div>
          <div class="card-body table-responsive">
            <table class="table table-hover">
              <thead class="text-warning">
                <th>Serial</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Bio Data</th>
                <th>User Role</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php
              $sql = "SELECT * FROM wp_user";
              $result = mysqli_query($db, $sql);
              $count = 0 ;
                while ($row = mysqli_fetch_assoc($result)) {
                  $u_id = $row["u_id"];                  
                  $u_name = $row["u_name"];
                  $u_email= $row["u_email"];
                  $u_phone = $row["u_phone"];
                  $u_address= $row["u_address"];
                  $biodata = $row["biodata"];
                  $photo = $row["photo"];
                  $u_role= $row["u_role"];
                  $count ++;
                  ?>
                <tr>
                  <td><?php echo $count?></td>
                  <td><?php echo  $photo?></td>
                  <td><?php echo $u_name?></td>
                  <td><?php echo $u_email?></td>
                  <td><?php echo$u_phone?></td>
                  <td><?php echo  $u_address?></td>
                  <td><?php echo  $biodata?></td>
                  <td><?php 
                  
                  if ($u_role == "1"){
                    echo 'Admin';
                  }
                  if ($u_role == "0") {
                    echo 'Subscriber';
                  }
                  
                  ?></td>
                  <td class="td-actions text-right">
                    <a href="#" type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </a>
                    <a href="#" type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm"><i
                        class="material-icons">close</i></a>
                  </td>
                </tr>
                <?php
                }
              ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <?php 
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