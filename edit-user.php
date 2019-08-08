<?php 
require_once "session.php"; 

if (isset($_GET['id'])) {
  $id=$_GET['id'];
  $query="SELECT * FROM `user_tb` where `id`='".$id."'";
  $result=mysqli_query($link,$query);
    
    while ($row= mysqli_fetch_assoc($result)) 
    {
    $username=$row['username'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $role=$row['role'];
    $phone=$row['phone'];
    $email=$row['email'];
    $status=$row['status'];
    }
}



if(isset($_POST['update_user']))
{
    $upd_username=$_POST['username'];
  $upd_firstname=$_POST['firstname'];
  $upd_lastname=$_POST['lastname'];
  $upd_role=$_POST['role'];
  $upd_phone=$_POST['phone'];
  $upd_email=$_POST['email'];
  $upd_status=$_POST['status'];


  $user_query="UPDATE `user_tb` SET `username`='$upd_username',`firstname`='$upd_firstname',`lastname`='$upd_lastname',`role`='$upd_role',`phone`='$upd_phone',`email`='$upd_email',`status`='$upd_status' WHERE `id`='$id'";

   $user_upd=mysqli_query($link,$user_query);

    if ($user_upd) 
    {
    // $alert='<div class="alert alert-success" id="flash-msg">Successful</div>';
    
    $_SESSION['alert_upd']='<div class="alert alert-success" id="flash-msg">Update Successful</div>';; // Initializing Session 
     header("location: maintain-user.php"); // Redirecting To Other Page
    }
    else 
    {
    $_SESSION['alert_upd']='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    
    header("location: maintain-user.php");
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
          <h1 class="h3 mb-4 text-gray-800">Add User</h1>


<form method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Username</label>
      <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="Username">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">First Name</label>
      <input type="text" class="form-control" name="firstname" value="<?php echo $firstname; ?>"  placeholder="First Name">
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" name="lastname" value="<?php echo $lastname; ?>" placeholder="Last Name">
    </div>

  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Role</label>
      <input type="text" name="role" value="<?php echo $role; ?>" class="form-control">
    </div>

    <div class="form-group col-md-6">
      <label for="inputCity">Phone Number</label>
      <input type="text" name="phone" value="<?php echo $phone; ?>" class="form-control">
    </div>    
    </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Email ID</label>
      <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
    </div>

     <div class="form-group col-md-6">
      <label>Status</label>
      <select class="form-control" id="inlineFormInputGroup" name="status" required>

        <option value="active" <?php if ($status=='active'){ echo "selected";} ?>>Active</option>
        <option value="inactive" <?php if ($status=='inactive'){ echo "selected";} ?>>Inactive</option>
     
       </select>
    </div> 
  </div>
 
      <input type="submit" class="btn btn-primary" value="Submit" name="update_user">
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