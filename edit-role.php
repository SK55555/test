<?php 
require_once "session.php"; 

if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $query="SELECT * FROM `role_tb` where `id`='".$id."'";
  $result=mysqli_query($link,$query);
    
    while ($row= mysqli_fetch_assoc($result)) 
    {
    $role_name= $row['role_name'];
    $module= $row['module']; 
    $status= $row['status'];
    }
}

if(isset($_POST['role_update_submit']))
{
  $role_name_update=$_POST['role_name'];
  $module_update=$_POST['module'];
  $status_update=$_POST['status'];

  $sql_update="UPDATE `role_tb` SET `role_name`='$role_name_update',`module`='$module_update',`status`='$status_update' WHERE `id`='$id'";

  $update_success=mysqli_query($link,$sql_update);

    if ($update_success) 
    {
    // $alert='<div class="alert alert-success" id="flash-msg">Successful</div>';
    
    $_SESSION['alert_sucess']='<div class="alert alert-success" id="flash-msg">Update Successful</div>';; // Initializing Session 
     header("location: maintain-role.php"); // Redirecting To Other Page
    }
    else 
    {
    $alert='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
     <?php require_once "sidebar.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require_once "top-bar.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Update Role Management</h1>


<?php 

if(isset($alert))
{
echo $alert;
}

?>   


<form method="post">

  <div class="form-row align-items-center">
    <div class="col-md-3">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Role Name" name="role_name" value="<?php echo $role_name; ?>" required>
    </div>

    <div class="col-md-3">
      <label class="sr-only" for="inlineFormInputGroup"></label>
      <div class="input-group mb-2">
       
       <select class="form-control" id="inlineFormInputGroup" name="module" required>
        <option value="">Choose Assign Modules... </option>
        
        <option value="Appointment" <?php if ($module=='Appointment'){ echo "selected";} ?>>Appointment</option>
        
        <option value="Consultation"<?php if ($module=='Consultation'){ echo "selected";} ?>>Consultation</option>
        
        <option value="Reports" <?php if ($module=='Reports'){ echo "selected";} ?>>Reports</option>
     
       </select>
      </div>
    </div>
    
    <div class="col-md-3">
      <label class="sr-only" for="inlineFormInputGroup"></label>
      <div class="input-group mb-2">
       
       <select class="form-control" id="inlineFormInputGroup" name="status" required>

        <option value="active" <?php if ($status=='active'){ echo "selected";} ?>>Active</option>
        <option value="inactive" <?php if ($status=='inactive'){ echo "selected";} ?>>Inactive</option>
     
       </select>
      </div>
    </div>
 
    <div class="col-md-3">
      <input type="submit" class="btn btn-primary mb-2" value="submit" name="role_update_submit">
    </div>

  </div>
</form>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
    <?php require_once "logout-modal.php"; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>

<script type="text/javascript">
  $(document).ready(function () {
    $("#flash-msg").delay(1500).fadeOut("slow");
});
</script>


