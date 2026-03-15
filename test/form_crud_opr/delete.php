<?php
$conn = mysqli_connect("localhost","root","","testdb");

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE stud_id=$id";

mysqli_query($conn,$sql);
echo"Deleted successfully";

header("Location: display.php");
?>