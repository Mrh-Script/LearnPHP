<?php

$mark = 33;

if($mark >= 80 && $mark <=  100){
    echo "Your mark is {$mark} and Grade : A+";
}

else if($mark >= 50 && $mark <=  79){
    echo "Your mark is {$mark} and Grade : A";
}

else if($mark >= 0 && $mark <=  49){
    echo "Your mark is {$mark} and Grade : F";
}

else {
    echo "Please enter a valid mark!";
}


?>