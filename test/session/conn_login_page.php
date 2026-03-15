<?php
$conn = mysqli_connect("localhost","root","","testdb");

if(!$conn){
    echo "Connection Failed";
}
else{ 
    echo "connected";
}
?>