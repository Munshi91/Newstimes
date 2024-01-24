<?php  
include ("./includes/header.php")
?>
<!-- End Navbar -->
<div class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">All Category List:</span>
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#profile" data-toggle="tab">
                      <i class="material-icons">bug_report</i> Category
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
                <!-- <table class="table">
                  <tbody>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Sign contract for "What are conference organizers afraid of?"</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="">
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain
                        swept through metro Detroit
                      </td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" checked>
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </td>
                      <td>Create 4 Invisible User Experiences you Never Knew About</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table> -->
                <table class="table table-hover">
                  <thead class="text-warning">
                    <th>Serial</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    <!-- read all Category -->
                    <?php
                    $sql = "SELECT * FROM wp_category";
                    $result = mysqli_query($db, $sql);
                    $count =0;
                    while ($row = mysqli_fetch_assoc($result)){
                      $c_id = $row['c_id'];
                     $c_name= $row['c_name'];
                     $c_desc =  $row['c_desc'];
                      $count++;
                      ?>
                    <tr>
                      <td><?php echo $count ?></td>
                      <td><?php echo $c_name ?></td>
                      <td><?php echo $c_desc ?></td>
                      <td class="td-actions text-right">
                        <a href="category.php?editId=<?php echo $c_id;?>" type="button" rel="tooltip" title="Remove"
                          class="btn btn-danger btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </a>
                        <a href="category.php?deleteId=<?php echo $c_id;?>" type="button" rel="tooltip" title="Remove"
                          class="btn btn-danger btn-link btn-sm"><i class="material-icons">close</i></a>
                      </td>
                    </tr>
                    <?php
                    }
                        ?>
                  </tbody>
                </table>
              </div>
              <!-- delete category -->
              <?php 
                   if (isset($_GET['deleteId'])) {
                $table = 'wp_category';
                $table_id = 'c_id';
                $delete_id = $_GET['deleteId'];
                $page_url = 'category.php';
                
                delete($table,$table_id,$delete_id,$page_url);
                
                   }                
                    ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4 class="card-title">Add New Category</h4>
          </div>
          <div class="card-body table-responsive">
            <form method="POST">
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Category Name</label>
                        <input type="text" class="form-control" name="cat_name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <textarea class="form-control" rows="5" name="cat_desc"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary" name="add_cat">Add
                    Category</button>
            </form>
            <!-- insert data in db -->
            <?php 
            if (isset($_POST['add_cat'])){
              $cat_name= $_POST['cat_name'];
              $cat_desc= $_POST['cat_desc'];
              if (empty($cat_name) || empty($cat_desc)){
                echo "<div class='alert alert-danger'>Please Fill All Information </div>";
              }else{
                $sql = "INSERT INTO wp_category(c_name, c_desc) VALUES ('$cat_name','$cat_desc')";
              $result = mysqli_query($db, $sql);
              if($result){
                header('Location: category.php');
              }else{
               die("Add Category Errore".mysqli_error($db));
              }
              }

            
            }
              ?>

          </div>
        </div>
      </div>
    </div>
    <!-- Edit Part Start -->
    <?php 
    if (isset($_GET['editId'])){
      $edit_cat = $_GET['editId'];

      $sql = "SELECT * FROM wp_category WHERE c_id = '$edit_cat'";
      $result = mysqli_query($db, $sql);
      while($row = mysqli_fetch_assoc($result)){
        $c_name = $row["c_name"];
        $c_desc = $row["c_desc"];
      }

      ?>
    <div class="card">
      <div class="card-header card-header-warning">
        <h4 class="card-title">Edit Category</h4>
      </div>
      <div class="card-body table-responsive">
        <form method="POST">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating">Category Name</label>
                    <input type="text" value="<?php echo $c_name; ?>" class="form-control" name="cat_name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-group">
                      <label class="bmd-label-floating">Description</label>
                      <textarea value="<?php echo $c_desc; ?>" class="form-control" rows="5"
                        name="cat_desc"><?php echo $c_desc; ?></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary" name="edit_cat">Update
                Category</button>
        </form>
      </div>
    </div>
    <?php
    }
    ?>
    <!-- Edit End -->
    <!-- update Value -->
    <?php
    
    if (isset($_POST['edit_cat'])){
     $cat_name = $_POST['cat_name'];
     $cat_desc = $_POST['cat_desc'];
      // update data
    
     $sql = "UPDATE wp_category SET c_name = '$cat_name', c_desc= '$cat_desc' WHERE c_id= '$edit_cat'";
     $result = mysqli_query($db, $sql);
      if($result){
        header("Location: category.php");
      }else{
        die("Data Not Update" . mysqli_error($db));
      }
    }
    ?>

  </div>
</div>

<!-- Footer -->
<?php  
include ("./includes/footer.php")
?>