<?php

//Regular variable
$x = 10;
echo "Using Regular variable : " . $x;  // need to use $ sign

echo "<br> <hr>";

//Constant variable
define("num", 50);   // false
echo "Using Constant variable (default) : " . num;  // not need to use $ sign

echo "<br>";

define("num1", 50, false);   // false
echo "Using Constant variable (false) : " . num1;  // not need to use $ sign


//This may not work is newer versions of PHP

define("a", 60, true);
echo "Using Constant variable (true) : " . A;  // not need to use $ sign

?>