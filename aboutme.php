<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hELLO WORLD AT php</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <h1>Hello </h1>

    <?php
    echo "Variables ";
    echo "<ul>";
    $name = "Kaede";
    $age = 20;
    $food = "Sushi";
    $present = true;

    echo "Hello Hello! my name is $name! i am $age yrs old i like $food";
    echo "<ul>";
    echo "<li> Student name : " . $name . "</li>";
    echo "<li> Age: " . $age . "</li>";
    echo "<li> favorite food: " . $food . "</li>";
    echo "<li> present: " . $present . "</li>";
    ?>

    <br><br>
    <a href="index.php">
        <button type="button">Home</button>
    </a>

</body>

</html>