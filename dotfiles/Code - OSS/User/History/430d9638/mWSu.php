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

isset($user) or $user;
isset($a) or $user;