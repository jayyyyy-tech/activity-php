<?php
// Write a function that accepts a 2-dimensional array of numbers. This function must return the number of instances of the number 
function countOnes($arr) {
    $count = 0;


    foreach ($arr as $row) {

        foreach ($row as $num) {

            if ($num === 1) {
                $count++;
            }
        }
    }

    return $count;
}

$numArr = [
    [1, 2, 1, 1],
    [2, 3, 5, 1, 5, 6],
    [6, 20, 1, 5]
];

$result = countOnes($numArr);
echo $result;
// ---> 5