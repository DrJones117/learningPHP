<?php
    // Shows everything you need to know about the current web page enviroment.


    foreach ($_SERVER as $key => $value) {
        echo "{$key} = {} <br>";
    }
?>