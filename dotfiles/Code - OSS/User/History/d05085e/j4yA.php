<?php 
function delete_cookies() {  
    foreach ($_COOKIE as $cookie_key => $cookie_value)   
        setcookie($cookie_key, "", 1);
        } 
    function print_cookies() {
          var_export($_COOKIE);
        } 
    function set_cookie($cookie_key, $cookie_value) {
          $_COOKIE[$cookie_key] = $cookie_value;
          setcookie($cookie_key, $cookie_value, time() + 3600);
        } 
    //set_cookie("value", "this is a delicious cookie"); 
    //print_cookies(); 
    //delete_cookies();

?> 