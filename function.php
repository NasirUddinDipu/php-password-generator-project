<?php

function password_func($rang_value) {
    $password_array = array(
        "A", "B", "@", "1", "?", "^", "&", "G", "D", "I",
        "#", "J", "m", "N", "9", "10", "4", "8", "+", "%"
        );
    $add = "";
    for ($var = 1; $var <= $rang_value; $var++) {
        $random_number = rand(0, 20);
        if(array_key_exists($random_number, $password_array)){
            $add .= $password_array[$random_number];
        }     
    }
    return $add;
}
