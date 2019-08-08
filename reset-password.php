<?php 
require_once "session.php"; 

if (isset($_GET['email'])) 
{
 $email=$_GET['email'];
}

if(isset($_POST['pass_submit']))
{
  $password=$_POST['password'];
  

  $pass_update="UPDATE `user_tb` SET `password`='$password' WHERE `email`='$email'";

  $pass_success=mysqli_query($link,$pass_update);

    if ($pass_success) {
    $pass_result='<div class="alert alert-success" id="flash-msg">Successful</div>';
    }
    else 
    {
    $pass_result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
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

  <title> Password </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Enter Password?</h1>
                    <p class="mb-4">We get it, stuff happens. Just enter your password !</p>
                  </div>

<?php 

if(isset($pass_result))
{
echo $pass_result;
}

?> 

                  <form class="user" method="post">
                  
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Enter password...">
                    </div>
                    

                    <input type="submit" class="btn btn-primary btn-user btn-block" value="submit" name="pass_submit">

                    <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                      Submit Password
                    </a> -->
                  
                  </form>

               
                  <hr>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
