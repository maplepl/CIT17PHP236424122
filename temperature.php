<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = $_POST['celsius'];
    $fahrenheit = ($celsius * 9 / 5) + 32;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Temperature Converter</title>
</head>

<body>
    <h2>Celsius to Fahrenheit</h2>
    <form method="post">
        Celsius: <input type="number" name="celsius" required><br><br>
        <button type="submit">Convert</button>
    </form>
    <?php if (isset($fahrenheit)): ?>
        <p><?php echo $celsius; ?>°C = <?php echo $fahrenheit; ?>°F</p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>