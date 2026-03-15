<?php
$conn = mysqli_connect("localhost","root","","testdb");

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id=$id";

mysqli_query($conn,$sql);

header("Location: display.php");
?>