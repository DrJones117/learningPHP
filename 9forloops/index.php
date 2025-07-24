<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label>Enter a number to count to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form> -->
    <form action="index.php" method="post">
        <label>Enter a number to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php
    // FOR LOOPS

    // echo "Hello (once) <br>";
    // echo "<br>";

    // for ($i = 0; $i < 5; $i++) {
    //     echo $i . ": Hello (multiple times) <br>";
    // }


    // You know this stuff already.

    // EXERCISE

    $counter = $_POST["counter"];

    // for ($i = 1; $i <= $counter; $i++) {
    //     echo $i . "<br>";
    // }

    for ($i = $counter; $i > 0; $i--) {
        echo $i . "<br>";
    }
?>