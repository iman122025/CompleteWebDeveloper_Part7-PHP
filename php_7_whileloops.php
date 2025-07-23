<?php

    echo '<h1>Welcome to While Loops in Php!</h1>';


    /* $i=1;

    while ($i<20) {

        echo $i;
        $i++;
    } */


    ////////////////////

    /* $i = 0;

    $array = array("Apple", "Banana", "Grape");

    while ($array[$i]) {

        echo $array[$i];

        // echo "key: $i Value: {$array[$i]}";

        $i++;
    } */

    ////////////////////


    /* $i = 0;

    $array = array('Apple', 'Banana', 'Grape');

    while (isset($array[$i])) {

        echo $array[$i];

        // echo "key: $i Value: {$array[$i]}<br>";

        $i++;
    } */

    ///// Another  way


    $i = 0;
    $array = array("Apple", "Banana", "Grape");

    while ($i < 3) {

        // echo $array[$i] . "<br>";

        //echo $array[$i];

        echo "key: $i Value: {$array[$i]}<br>";

        $i++;
    }


?>