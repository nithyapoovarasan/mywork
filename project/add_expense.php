<?php
session_start();
$conn = new 
mysqli("localhost","root","","expense_tracker");
$category = $_POST['category'];
$amount   = $_POST['amount'];
$note     = $_POST['note'];
$date     = $_POST['expense_date'];
$id       = $_SESSION['id'];
$sql = "INSERT INTO expense (user_id, category, amount, expense_date, note) 
        VALUES ('$id', '$category', '$amount', '$date', '$note')";
if ($conn->query($sql) === TRUE){
    header("location: view_expense.php?msg=added");
    exit();
    echo"Inserted Successfully";
}
else{
    echo"Error:".$conn->error;
}
    
   
?>