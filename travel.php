<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = $_POST['distance'];
    $consumption = $_POST['consumption'];
    $price = $_POST['price'];
    $cost = ($distance / $consumption) * $price;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Travel Cost Estimator</title>
</head>

<body>
    <h2>Travel Cost Estimator</h2>
    <form method="post">
        Distance (km): <input type="number" name="distance" required><br><br>
        Fuel Consumption (km/l): <input type="number" name="consumption" required><br><br>
        Fuel Price (per liter): <input type="number" step="0.01" name="price" required><br><br>
        <button type="submit">Estimate</button>
    </form>
    <?php if (isset($cost)): ?>
        <p>Estimated Travel Cost: <?php echo number_format($cost, 2); ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>