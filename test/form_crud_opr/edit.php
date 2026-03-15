<?php
$conn = mysqli_connect("localhost","root","","testdb");

$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<form action="update.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

Name:
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

Email:
<input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>

<input type="submit" value="Update">

</form>