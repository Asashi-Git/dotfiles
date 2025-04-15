<?php

# For each number from 1 to 100, print in one ligne :
# - Fizz, if the number is / by 3.
# - Buzz, if the number is / by 5.
# - FizzBuzz, if the number is / by 3 and 5.
# Else print the number.

$i = 0;
for ($i = 0; $i < 101) {
    $i++;
    if ($i %3== 0) {
        print("Fizz");
    } elseif ($i %5== 0) {
        print("Buzz");
    } else{
        print($i);
    }}