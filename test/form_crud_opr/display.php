<?php
$conn = mysqli_connect("localhost","root","","testdb");

$sql = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);

echo "<table border='1'>";
echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=".$row['id']."'>Delete</a></td>";
echo "</tr>";
}

echo "</table>";
?>