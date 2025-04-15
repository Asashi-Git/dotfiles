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

#echo ($condition ? "True":"False");


//--------------------------------------    Les Tableaux ----------------------------------
#
#Tableau
#   $tab = [1, 2, 3];
#   $tab[0] += 3;
#   $tab[3] = 4;
#   $tab[] #Put in the end of the tabble
