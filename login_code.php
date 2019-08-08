<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

require_once "config.php";

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($link,$username);
$password = mysqli_real_escape_string($link,$password);
// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($link,"select * from admin_tb where password='$password' AND username='$username'");


$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: welcome.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($link); // Closing Connection
}
}
?>