<?php
if(session_status()== PHP_SESSION_NONE)
    {
        session_start();
    }
include("db_connection.php");
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
}else{
    die("user not logged in");
}
$month = date('m');
$year = date('Y');

$sql = "SELECT SUM(amount) AS total FROM expense 
        WHERE user_id='$id' AND MONTH(expense_date)='$month' AND YEAR(expense_date)='$year'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$total_month = $row['total'];
$limit = 2300; 

if ($total_month > $limit) {
    echo "<h3 style='color:red;'>⚠ Budget Alert: You have exceeded ₹$limit this month!</h3>";
} else {
    echo "<h3 style='color:green;'>✅ Within Budget: ₹$total_month spent this month</h3>";
}
?>
