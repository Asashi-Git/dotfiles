<?php

# For each number from 1 to 100, print in one ligne :
# - Fizz, if the number is / by 3.
# - Buzz, if the number is / by 5.
# - FizzBuzz, if the number is / by 3 and 5.
# Else print the number.

for ($i = 1; $i < 101; $i++){
    echo "\n";
    if ($i %3== 0 && $i %5== 0) {
        print("FizzBuzz \n");
    }elseif ($i %3== 0) {
        print("Fizz \n");
    } elseif ($i %5== 0) {
        print("Buzz \n");
    } else{
        print($i);
    }}
    echo "\n";
    echo "proute";