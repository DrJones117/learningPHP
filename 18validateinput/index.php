<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
    // Sanitation versus Validation
    // Sanitation returns an empty string
    // Validation returns an error message
    // if (isset($_POST["login"])) {
    //     $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    //     $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    //     $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    //     echo "Hello {$username} <br>";
    //     echo "Your are {$age} years old! <br>";
    //     echo "Your email is {$email}! <br>";
    // }

    if (isset($POST_["login"])) {
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if (empty($age)) {
            echo "That number wasn't valid";
        }
        else {
            echo "You are {$age} years old!";
        }

        if (empty($email)) {
            echo "That email wasn't valid";
        }
        else {
            echo "You email is: {$email}!";
        }
    }
?>