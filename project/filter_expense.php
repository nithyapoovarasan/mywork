<?php
session_start();
include("db_connection.php");
$id = $_SESSION['id'];
$category = $_GET['category'] ?? '';
$start_date = $_GET['start_date'] ?? '';
$end_date = $_GET['end_date'] ?? '';

$sql = "SELECT * FROM expense WHERE user_id='$id'";
if ($category) $sql .= " AND category='$category'";
if ($start_date && $end_date) $sql .= " AND expense_date BETWEEN '$start_date' AND '$end_date'";
$sql .= " ORDER BY expense_date DESC";

$result = $conn->query($sql);

echo "<h2>Filtered Expenses</h2>";
while($row = $result->fetch_assoc()) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin:10px;'>";
    echo "<p><b>Category:</b> " . $row['category'] . "</p>";
    echo "<p><b>Amount:</b> ₹" . $row['amount'] . "</p>";
    echo "<p><b>Note:</b> " . $row['note'] . "</p>";
    echo "<p><b>Date:</b> " . $row['expense_date'] . "</p>";
    echo "</div>";
}
?>
