<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $math = $_POST['math'];
    $eng = $_POST['eng'];
    $sci = $_POST['sci'];
    $avg = ($math + $eng + $sci) / 3;

    if ($avg >= 90)
        $grade = "A";
    elseif ($avg >= 80)
        $grade = "B";
    elseif ($avg >= 70)
        $grade = "C";
    elseif ($avg >= 60)
        $grade = "D";
    else
        $grade = "F";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Grading System</title>
</head>

<body>
    <h2>Simple Grading System</h2>
    <form method="post">
        Math: <input type="number" name="math" required><br><br>
        English: <input type="number" name="eng" required><br><br>
        Science: <input type="number" name="sci" required><br><br>
        <button type="submit">Compute</button>
    </form>
    <?php if (isset($avg)): ?>
        <p>Average: <?php echo number_format($avg, 2); ?></p>
        <p>Grade: <?php echo $grade; ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>