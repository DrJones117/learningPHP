<?php
    // String Functions
    // $username = "David Judah Kahler";
    $username = array("David", "Judah", "Kahler");
    $phone = "123-456-7890";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username);
    // $username = str_pad($username, 20, 0);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "Judah");
    // $count = strlen($username, "Judah");
    // $index = strpos($username, "u");
    // $firstname = substr($username, 0, 5);
    // $lastname = substr($username, 6);
    // $fullname = explode(" ", $username);
    $username = implode("-", $username);


    $phone = str_replace("-", "/", $phone);
    $phone = strpos($phone, "9");

    echo $username;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $equals;
?>