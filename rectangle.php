<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $length = $_POST['length'];
    $width = $_POST['width'];
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Rectangle Calculator</title>
</head>

<body>
    <h2>Area and Perimeter of a Rectangle</h2>
    <form method="post">
        Length: <input type="number" name="length" required><br><br>
        Width: <input type="number" name="width" required><br><br>
        <button type="submit">Calculate</button>
    </form>
    <?php if (!empty($length)): ?>
        <p>Area: <?php echo $area; ?></p>
        <p>Perimeter: <?php echo $perimeter; ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>