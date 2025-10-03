<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $bmi = $weight / ($height * $height);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h2>BMI Calculator</h2>
    <form method="post">
        Weight (kg): <input type="number" name="weight" step="0.1" required><br><br>
        Height (m): <input type="number" name="height" step="0.01" required><br><br>
        <button type="submit">Calculate</button>
    </form>
    <?php if (isset($bmi)): ?>
        <p>Your BMI: <?php echo number_format($bmi, 2); ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>