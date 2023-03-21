<?php
include "connection.php";

if (!isset($_SESSION)) {
   session_start (); 
   }
   
if (isset($_POST['login'])) {
    $n=mysqli_real_escape_string($con,$_POST['em']);
    $p=mysqli_real_escape_string($con,$_POST['psw']);

$t="SELECT * FROM user WHERE email='$n' AND pass='$p'";

    $r=mysqli_query($con,$t);



if (mysqli_num_rows($r)==1) {
    $_SESSION['name']=$n;
    $_SESSION['success']="Welcome Dear";
    header('location:page1.html');


}else{
    echo "Wrong Data!!!";
}
header('location:q.html');
}

if(isset($_GET['logout'])){
      session_destroy();
unset($_SESSION['name']);
unset($_SESSION['success']);
header('location:login.html');
}
?>