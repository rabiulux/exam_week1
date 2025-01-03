<?php

$strings = ["Hello", "World", "PHP", "Programming"];

// print_r( $strings );

echo "<br>";

foreach( $strings as $string ) {
    echo "Original String: " . $string . ", "
." Vowel Count: " 
. ", "
. "Reversed String: " . strrev($string)
. "<br>";
}


$c = 5;
$d = '5';
// Equal (==)
// Checks if two values are equal.
$result = ($c == $d); 
$result = ($c === $d); 
$result = ($c > 3);
echo ''. $result ."<br>";

function sum(int|string $num1,int|string $num2) {
    echo $num1+$num2;
   }
   sum("33","20");

echo "<br>";

function myName(?string $text): void {
    if ($text) {
    echo "Text is: $text<br>";
    } else {
    echo "No text provided.<br>";
    }
   }
   myName("null");
   myName(null);


   function sum2(...$numbers) {
    echo array_sum($numbers);
   }
   sum2(1,2,3,4,5);
   function sum3(...$numbers) {
    echo $numbers[0];
   }
   sum3(1,2,"3",4,5);

   $greet = function($name){
    echo "<br>This is ". $name ."";
   };

   $greet("rab");

   echo "<br>";

   function factorial($n){
        if($n == 0) {
            return 1;
    }else {
        return $n * factorial($n-1);
    }
   }
   echo "factorial " . factorial(5);

   echo "<br>";

   function getAge(): int {
    return 25;
   }
   function isAdult(int $age): bool {
    return $age >= 18;
   }
   echo getAge();
   echo isAdult(30)
   

   

?>

