<?php
    // transforming sensative data in letters, numbers, and symbols.


    $password = "yay123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("hamburger666", $hash)) {
        echo "You are logged in!";
    }
    else {
        echo "Incorrect password";
    }
?>