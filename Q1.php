<?php
// Write a function that accepts a string. This function must return the same string but without any vowels.

function removeVowels($str) {
    $vowels = ["a","e","i","o","u"];
    $result = str_replace($vowels,"" ,$str);

    return $result;

}

$result = removeVowels("The quick brown fox");
echo $result;
// ---> "Th qck brwn fx"