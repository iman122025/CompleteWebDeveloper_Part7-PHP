<?php

    echo '<h1>Welcome to If in Php!</h1>';

    $number = 1;
    $otherNumber = 2;
    $thirdNumber = 2;

    // if ($number==1) {
    // if ($number==3) {
    // if ($number!=$otherNumber) {
    // if (!($number==$otherNumber)) {
    // if ($thirdNumber!=$otherNumber) {
    // if ($thirdNumber==$otherNumber AND $number==$otherNumber) {
    if ($thirdNumber == $otherNumber OR $number == $otherNumber) {
        echo 'True!';
    } else {
        echo 'False!';
    }

    // This codes just for show the result for screenshots

    echo '<br>';

    // echo "The result of '($number==1)' is true";

    // echo "The result of '($number==3)' is false";

    // echo "The result of '$number!=$otherNumber' is true";

    // echo "The result of '(!($number==$otherNumber))' is true";

    // echo "The result of '($thirdNumber!=$otherNumber)' is false";

    // echo "The result of '($thirdNumber==$otherNumber AND $number==$otherNumber)' is false";

    echo '<br>';

    // echo "The result of '($thirdNumber==$otherNumber OR $number==$otherNumber) ' is true";

?>