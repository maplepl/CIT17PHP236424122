<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sentence = $_POST['sentence'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>String Manipulation</title>
</head>

<body>
    <h2>String Manipulation</h2>
    <form method="post">
        Enter a sentence: <input type="text" name="sentence" required><br><br>
        <button type="submit">Analyze</button>
    </form>
    <?php if (!empty($sentence)): ?>
        <p>Characters: <?php echo strlen($sentence); ?></p>
        <p>Words: <?php echo str_word_count($sentence); ?></p>
        <p>Uppercase: <?php echo strtoupper($sentence); ?></p>
        <p>Lowercase: <?php echo strtolower($sentence); ?></p>
    <?php endif; ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>