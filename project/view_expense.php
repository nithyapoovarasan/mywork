<?php
session_start();
include("db_connection.php");
$_SESSION['id'] = 1;
if(!isset($_SESSION['id'])){
    die("User not logged in :");
    }
$id = $_SESSION['id'];
$sql = "SELECT category,amount,expense_date,note FROM expense WHERE user_id='$id' ORDER BY expense_date DESC";
$result = $conn->query($sql);
$expense = [];
$total =0;
while($row = $result->fetch_assoc()){
    $expense[] = $row;
    $total +=$row['amount'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Expense Report</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Your Expenses</h2>
    <h3>Total Spent: ₹<?php echo $total; ?></h3>

    <!-- Budget Alert -->
    <?php include("budget_alert.php"); ?>

    <!-- Filter Form -->
    <form action="filter_expense.php" method="GET">
        <input type="text" name="category" placeholder="Category">
        <input type="date" name="start_date">
        <input type="date" name="end_date">
        <button type="submit">Filter</button>
    </form>

    <!-- Chart -->
    <canvas id="expenseChart" width="400" height="200"></canvas>

    <script>
        let expense = <?php echo json_encode($expense); ?>;
        let labels = expense.map(e => e.expense_date);
        let data = expense.map(e => e.amount);

        new Chart(document.getElementById("expenseChart"), {
            type: 'line',
            data: {
                 labels: labels,
                datasets: [{
                    label: 'Daily Expenses',
                    data: data,
                    borderColor: 'blue',
                    fill: false
                }]
            }
        });
    </script>
</body>
</html>

