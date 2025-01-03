<?php

$vowels = ["a","e","i","o","u"];
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string) {

    $reversedString = strrev($string);

    $count = 0;

    foreach($vowels as $vowel) {

        $countVowel = strpos($string, $vowel);

        if($countVowel) {
            $count ++;
        }

    }

    echo "Original String: $string, Vowel Count: $count, Reversed String: $reversedString <br>";

}

?>