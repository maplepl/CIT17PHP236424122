<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $balance = $_POST['balance'];
    $deposit = $_POST['deposit'];
    $withdraw = $_POST['withdraw'];

    $balance += $deposit;
    $balance -= $withdraw;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Bank Simulation</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h2>Bank Account Simulation</h2>
    <form method="post">
        Initial Balance: <input type="number" name="balance" required><br><br>
        Deposit: <input type="number" name="deposit" value="0"><br><br>
        Withdraw: <input type="number" name="withdraw" value="0"><br><br>
        <button type="submit">Update</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>Final Balance: <?php echo $balance; ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>