<?php
$conn = mysqli_connect("localhost","root","","testdb");
if(isset($_POST['name']) &&
isset($_POST['email']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$dept = $_POST['dept'];

$sql = "INSERT INTO user(name,dept,city,email) VALUES('$name','$dept','$city','$email')";
mysqli_query($conn,$sql);
    echo "Data inserted successfully";
    header("location:display.php");
}

?>