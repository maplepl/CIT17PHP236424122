<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $basic = $_POST['basic'];
    $allowance = $_POST['allowance'];
    $deduction = $_POST['deduction'];
    $net = $basic + $allowance - $deduction;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Salary Calculator</title>
</head>

<body>
    <h2>Salary Calculator</h2>
    <form method="post">
        Basic Salary: <input type="number" name="basic" required><br><br>
        Allowance: <input type="number" name="allowance" required><br><br>
        Deduction: <input type="number" name="deduction" required><br><br>
        <button type="submit">Compute</button>
    </form>
    <?php if (isset($net)): ?>
        <p>Net Salary: <?php echo $net; ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>