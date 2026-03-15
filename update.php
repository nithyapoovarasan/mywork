<?php
$conn = mysqli_connect("localhost","root","","testdb");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE user SET name='$name', email='$email' WHERE id=$id";

mysqli_query($conn,$sql);

header("Location: display.php");
?>