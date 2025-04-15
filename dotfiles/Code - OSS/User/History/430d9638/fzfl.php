<?php
$user = "Samuel Decarnelle";
echo "Hello world! ", "I'm ".$user;

$total = 0;
$addition = "+";
$a = 5;
$b = 5;

$some = $a.$addition.$b;
$cal = $a + $b;

print $some;
print $cal;

$a = $a * 5;
print $a;

if ($a !== 25) {
    print "Youhou !!!";
}

if (isset($user)){
    echo "Variable is set";
}else {
        echo "variable is not set";
}

echo strval($a);

// Instruction
#if (condition){
#   do
#}elif (condition){
#   do
#}else{
#   do
#}

echo ($caca ? "True":"False");