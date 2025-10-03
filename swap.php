<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST['x'];
    $y = $_POST['y'];

    $temp = $x;
    $x = $y;
    $y = $temp;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Swap Variables</title>
</head>

<body>
    <h2>Swap Variables</h2>
    <form method="post">
        X: <input type="text" name="x" required><br><br>
        Y: <input type="text" name="y" required><br><br>
        <button type="submit">Swap</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <p>After swapping: X = <?php echo $x; ?>, Y = <?php echo $y; ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>