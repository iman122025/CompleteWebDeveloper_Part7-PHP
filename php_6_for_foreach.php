<?php

    echo '<h1>Welcome to For & Foreach in Php!</h1>';

    // $array=["Cat", "Dog", "Turtle", "Kangaroo"];

    $array = array('Cat', 'Dog', 'Turtle', 'Kangaroo');

    // print_r($array);

    foreach ($array as $key => $value) {
        echo "Key: $key Value: $value <br>";
    }

    // for($i=1; $i<=10; $i++)

    // for($i=1; $i<=10; $i=$i+2)

    // for($i=1; $i<=100; $i= $i+5)

    /*   for($i=500; $i>=100; $i=$i-5)
    {
        echo $i."<br>";
    } */

?>