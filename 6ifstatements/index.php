<?php
    // $age = 101;

    // if ($age >= 100) {
    //     echo "You are too old to enter this site.";
    // }
    // elseif ($age >= 18) {
    //     echo "You may enter this site.";
    // }
    // elseif ($age <= 0) {
    //     echo "That wasn't a valid age.";
    // }
    // else {
    //     echo "You must be 18+ to enter.";
    // }

    // Not sure what site we're making here.

    // $adult = false;

    // if ($adult == true) {
    //     echo "You may enter this site.";
    // }
    // else {
    //     echo "You must be an adult to enter.";
    // }

    // OR

    // if ($adult) {
    //     echo "You may enter this site.";
    // }
    // else {
    //     echo "You must be an adult to enter.";
    // }

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if ($hours <= 0) {
        $weekly_pay = 0;
    }
    elseif ($hours <= 40) {
        $weekly_pay = $hours * $rate;
    }
    else {
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week."
?>