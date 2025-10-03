<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get numbers from the form
    $a = $_POST['a'];
    $b = $_POST['b'];

    // Calculations
    $sum = $a + $b;
    $diff = $a - $b;
    $prod = $a * $b;
    $quot = ($b != 0) ? $a / $b : "undefined (division by zero)";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Math</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h2>Simple Math Calculator</h2>

    <form method="post">
        <label>Enter first number:</label>
        <input type="number" name="a" required><br><br>

        <label>Enter second number:</label>
        <input type="number" name="b" required><br><br>

        <button type="submit">Calculate</button>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h3>Results:</h3>
        <p>Sum: <?php echo $sum; ?></p>
        <p>Difference: <?php echo $diff; ?></p>
        <p>Product: <?php echo $prod; ?></p>
        <p>Quotient: <?php echo $quot; ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>