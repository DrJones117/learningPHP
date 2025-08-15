<?php
    // I Love Cookies!!!
    //           -name-          -value-        -expiration time- (86400(1 day) * 2 (2 days))           
    setcookie("fav_cookie", "ChocolateChip", time() + (86400 * 2), "/");
    //                                                               ^
    //                                                               |
    //                                                           file path

    setcookie("fav_drink", "CocaCola", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ChocolateIceCream", time() + (86400 * 4), "/");

    // To delete cookie, set time to "- 0";
    //              |
    ///            \/
    // setcookie("fav_dessert", "ChocolateIceCream", time() - 0, "/");

    // Print cookie
    foreach ($_COOKIE as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if (isset($_COOKIE["fav_food"])) {
        echo "BUY SOME {$_COOKIE["fav_cookie"]}!!!";
    }
    else {
        echo "I don't know your favorite food.";
    }
?>