<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach( $strings as $string ) {

    $vowelCount = preg_match_all('/[aeoiu]/', $string );
    $reverseString = strrev( $string );

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reverseString <br>";
}
   
   

?>

