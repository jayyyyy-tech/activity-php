<?php
// <!-- Write a function that accepts an array of integers. This function must return the same array without odd numbers. -->

function removeOdd($numbers) {
     $result = array_filter($numbers, function($num) {
        return $num % 2 === 0;
    });

    return $result;
}

$numArr = [1,2,3,4,5,6,7,8,9,10];
$result = removeOdd($numArr);

print_r($result);
// <!-- [2,4,6,8,10] -->