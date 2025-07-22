<?php
    // VARIABLES

    // string
    $name = "Judah Kahler";
    $food = "pizza";
    $email = "email123@email.com";

    echo "STRINGS:<br>";
    echo "Hello {$name}!<br>";
    echo "Hello {$food}!<br>";
    echo "Your email is {$email}!<br>";

    echo "<br>";

    // integer
    $age = 21;
    $users = 2;
    $quantity = 3;

    echo "INTEGERS:<br>";
    echo "You are {$age} years old!<br>";
    echo "There are {$users} users online!<br>";
    echo "You sould like to buy {$quantity} items!<br>";

    echo "<br>";

    //float
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    echo "FLOATS:<br>";
    echo "Your gpa is {$gpa}<br>";
    echo "Your pizza is \${$price}!<br>";
    echo "The sales tax rate is: \${$tax_rate}<br>";

    echo "<br>";

    //boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    echo "Online status: {$online}<br>";

    echo "<br>";

    $total = null;

    echo "You have ordered {$quantity} x {$food}s!<br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";
?>