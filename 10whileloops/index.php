
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <button type="submit" name="stop" value="stop">Stop</button>
    </form>
</body>
</html>

<?php
    // WHILE LOOPS

    // For loops are for when you know how many times a piece of code needs to run.

    $counter = 0;
    while ($counter <= 10) {
        echo $counter . "<br>";
        $counter++;
    }

    $seconds = 0;
    $running = true;
    
    // This is an infinite loop. We will use a stop button.
    while ($running) {

        if(isset($_POST["stop"])) {
            $running = false;
        }
        else {
            $seconds++;
            echo $seconds . "<br>";
        }
    }
?>