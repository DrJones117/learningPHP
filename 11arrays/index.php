<?php
    $foods = array("apple", "orange", "banana", "coconut");


    // echo $foods[0]. "<br>";
    // echo $foods[1]. "<br>";
    // echo $foods[2]. "<br>";
    // echo $foods[3]. "<br>";

    // OR =====

    
    foreach($foods as $food) {
        echo $food. "<br>";
    }

    // Manipulating the array

    $foods[0] = "pineapple";

    // array_push($foods, "pineapple");
    // array_pop($foods);
    // array_shift($foods);
    $reversed_foods = array_reverse($foods);
    echo count($foods). "<br>";

    foreach($reversed_foods as $food) {
        echo $food. "<br>";
    }
    ?>