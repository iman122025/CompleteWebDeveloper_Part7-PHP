<?php

    echo '<h1>Welcome to Arrays in Php!</h1>';

    $myArray = array('Pizza', 'Chocolate', 'Coffee');

    // echo $myArray;  This work just in old versions

    print_r($myArray);
    echo '<br><br>';
    echo $myArray[2];
    echo '<br><br>';
    echo "I'm still going!";
    echo '<br><br>';

    $anotherArray[0] = 'Pizza';
    $anotherArray[1] = 'Yoghurt';

    print_r($anotherArray);
    echo '<br><br>';

    $thirdArray = array(
        'France' => 'French',
        'USA' => 'English',
        'Germany' => 'German'
    );

    print_r($thirdArray);

    echo '<br><br>';
    $anotherArray[] = 'Salad';
    print_r($anotherArray);

    echo '<br><br>';
    unset($thirdArray['Germany']);
    print_r($thirdArray);

    echo '<br><br>';

    $name = 'Rob';

    unset($name);

    if (isset($name)) {
        echo $name;
    } else {
        echo 'The variable $name has been unset.';
    }

?>