<?php
    // LOGICAL OPERATORS

    $temp = 15;
    $cloudy = true;

    // =================

    // AND
    // if ($temp >= 0 && $temp <=30) {
    //     echo "The weather is good!";
    // }
    // else {
    //     echo "The weather is BAD!!!";
    // }

    // OR
    // if ($temp > 0 || $temp > 30) {
    //     echo "The weather is BAD! <br>";
    // }
    // else {
    //     echo "The weather is good! <br>";
    // }

    // NOT
    // if (!$cloudy) {
    //     echo "It's sunny. <br>";
    // }
    // else {
    //     echo "It's cloudy. <br>";
    // }

    // =================

    $age = 15;
    $citizen = true;

    // if ($age >= 18 && $citizen) {
    //     echo "You can vote";
    // }
    // else {
    //     echo "You cannot vote!!!";
    // }

    // or...


    // This is more confusing than the first example, but it illustrates another way to use NOT.
    // if (
    //     !$age >= 18 && !$citizen) {
    //         echo "You cannot vote!!!";
    //     }
    // else {
    //     echo "You can vote";
    // }

    // =================

    $child = false;
    $senior = true;
    $ticket = null;

    if ($child || $senior) {
        $ticket = 10;
    }
    else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}";
?>