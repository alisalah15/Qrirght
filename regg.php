<?php include('connection.php');
if(!isset($_SESSION)) {
session_start();}
if(isset($_POST["registerbtn"])){
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $password1=mysqli_real_escape_string($con,$_POST['psw']);
  $password2=mysqli_real_escape_string($con,$_POST['rpsw']);
  if ($password1!=$password2) {  
    echo "<br> Pass doesnt match" ;
  }
    else {
  
  $sql="INSERT INTO user (email,pass)Values('$email','$password1')";
  mysqli_query($con,$sql);
    }
    header('location:login.html');
  }
?>