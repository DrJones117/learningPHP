<?php
    // FUNCTIONS!!!
    // A reusable set of instructions.

    // // function             We can insert thing into the function.
    // function happy_birthday($first_name) {
    //     echo "Happy Birthday!, {$first_name} <br>";
    // }

    // // use function | add the thing here.
    // happy_birthday("Your face...");

    // // we can call it as many times as we want...
    // happy_birthday("...is weird...");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // happy_birthday("LOL!!!");
    // // happy_birth... etc

    // ==================================================
    function is_even ($number) {
        $result = $number % 2;

        return $result;
    }

    echo is_even (11);

    // ==================================================

    function hypotenuse ($a, $b) {
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    }

    echo hypotenuse(4, 5);
?>