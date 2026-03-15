<?php
session_start();
include "conn_login_page.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login_page WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    $_SESSION['user']=$username;
    header("Location: welcome.php");
}
else{
    echo "Invalid Username or Password";
}