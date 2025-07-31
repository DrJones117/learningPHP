<?php
    // ASSOCIATIVE ARRAYS

    $capitals = array("USA" => "Washington D.C."
                    , "JAPAN" => "Tokyo"
                    , "SOUTH KOREA" => "Seoul"
                    , "INDIA" => "New Dehli");

    // Accessing the array
    // echo $capitals["USA"];
    // echo $capitals["JAPAN"];

    // Adding to the array
    $capitals["China"] = "Beijing";

    // Removing the last key value pair
    array_pop($capitals);

    // Access the keys
    $keys = array_keys($capitals);

    // Access the values
    $values = array_values($capitals);

    foreach($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    foreach($keys as $key) {
        echo "{$key} <br>";
    }

    foreach($values as $value) {
        echo "{$value} <br>";
    }

    // Changing the array
    // $capitals["USA"] = "Las Vegas";
    // echo $capitals["USA"];

?>
