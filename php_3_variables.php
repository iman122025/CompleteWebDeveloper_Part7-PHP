<?php

    echo '<h1>Welcome to Variables in Php!</h1>';

    $test = 'I"m a variable !';

    $test2 = 'Me too !';

    $number = 75;

    $name = 'Rob!';

    $a = 'name';

    echo $test;

    echo '<br><br>';

    echo $test2;

    echo '<br><br>';

    echo $test . $test2;

    echo '<br><br>';

    echo (($number + 42) / 21 + 17);

    echo '<br><br>';

    echo $name;

    echo '<br><br>';

    // echo "My name is $name";

    echo 'My name is ' . $name;

    echo '<br><br>';

    echo $$a;

?>