<?php
$conn = mysqli_connect("localhost","root","","testdb");
if(isset($_POST['name']) &&
isset($_POST['email']))
{
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO user(name,email) VALUES('$name','$email')";
mysqli_query($conn,$sql);
    echo "Data inserted successfully";
}

?>