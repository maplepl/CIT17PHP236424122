<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $php = $_POST['php'];
    $usd_rate = 0.018;
    $eur_rate = 0.017;
    $jpy_rate = 2.67;

    $usd = $php * $usd_rate;
    $eur = $php * $eur_rate;
    $jpy = $php * $jpy_rate;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Currency Converter</title>
</head>

<body>
    <h2>Currency Converter (PHP)</h2>
    <form method="post">
        Amount in PHP: <input type="number" name="php" required><br><br>
        <button type="submit">Convert</button>
    </form>
    <?php if (isset($usd)): ?>
        <p>USD: <?php echo number_format($usd, 2); ?></p>
        <p>EUR: <?php echo number_format($eur, 2); ?></p>
        <p>JPY: <?php echo number_format($jpy, 2); ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>