
<?php 
require_once "session.php"; 

if(isset($_POST['user_submit']))
{
    $username=$_POST['username'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $role=$_POST['role'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $status=$_POST['status'];

  $user_sql='Insert into user_tb (username,firstname,lastname,role,phone,email,status) values ("'.$username.'","'.$firstname.'","'.$lastname.'","'.$role.'","'.$phone.'","'.$email.'","'.$status.'") ';



  $user_success=mysqli_query($link,$user_sql);

    if ($user_success) 
    {
     $user_result='<div class="alert alert-success" id="flash-msg">Successful</div>';

$url= '<a href ="http://localhost:8080/test-module/reset-password.php?email='.$email.'">Password Reset Link</a>';

// $url= 'http://localhost:8080/test-module/reset-password.php?email='.$email;
require 'PHPMailerAutoload.php';

$output ='Please Reset your password'.$url;


$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'riyal.boxer54@gmail.com';                 // SMTP username
$mail->Password = 'riyal.gmail54';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('riyal.boxer54@gmail.com', 'Sagar');
$mail->addAddress($email, 'Sagar Daslani');     // Add a recipient

$mail->addReplyTo('riyal.boxer54@gmail.com');

// $mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = $output;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


    }
    else {
      $user_result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
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

<?php 

if(isset($user_result))
{
echo $user_result;
}
 ?>  

<form method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>Username</label>
      <input type="text" class="form-control" name="username" placeholder="Username">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">First Name</label>
      <input type="text" class="form-control" name="firstname"  placeholder="First Name">
    </div>

    <div class="form-group col-md-4">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" name="lastname" placeholder="Last Name">
    </div>

  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Role</label>
      <input type="text" name="role" class="form-control">
    </div>

     <div class="form-group col-md-6">
      <label for="inputCity">Phone Number</label>
      <input type="text" name="phone" class="form-control">
    </div>    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Email ID</label>
      <input type="email" name="email" class="form-control">
    </div>

     <div class="form-group col-md-6">
      <label>Status</label>
      <select class="form-control" name="status">
        <option selected>Status...</option>
        <option>Active</option>
        <option>Inactive</option>
      </select>
    </div> 
  </div>
 
      <input type="submit" class="btn btn-primary" value="Submit" name="user_submit">
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