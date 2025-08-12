<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php


    if (isset($_POST["submit"])) {

        $foods = $_POST["foods"];

        if (isset($foods)) {
            foreach ($foods as $food) {
                echo $food . "<br>";
            }
        }



    }
    else {
        echo "Please select an option.";
    }
    // if (isset($_POST["pizza"])) {
    //     echo "You like Pizza! <br>";
    // }
    // if (isset($_POST["hamburger"])) {
    //     echo "You like Hamburgers! <br>";
    // }
    // if (isset($_POST["hotdog"])) {
    //     echo "You like Hotdogs! <br>";
    // }
    // if (empty($_POST["taco"])) {
    //     echo "You DON'T like Tacos! <br>";
    // }
    // if (empty($_POST["pizza"])) {
    //     echo "You DON'T like Pizza! <br>";
    // }
    // if (empty($_POST["hamburger"])) {
    //     echo "You DON'T like Hamburgers! <br>";
    // }
    // if (empty($_POST["hotdog"])) {
    //     echo "You DON'T like Hotdogs! <br>";
    // }
    // if (empty($_POST["taco"])) {
    //     echo "You DON'T like Tacos! <br>";
    // }
    ?>