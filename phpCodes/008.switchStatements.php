<?php

$mark = 79;

switch (true){

    case ($mark >= 80 && $mark <=  100) :
    echo  "Your mark is {$mark} and Grade : A+";
    break;

    case ($mark >= 50 && $mark <=  79) :
    echo "Your mark is {$mark} and Grade : A";
    break;

    case ($mark >= 0 && $mark <=  49) :
    echo  "Your mark is {$mark} and Grade : F";
    break;

    default :
    echo "Please enter a valid mark!";
 
}


?>