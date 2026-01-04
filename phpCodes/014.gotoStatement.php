<?php

//Example 1
echo "Example : 1 <br><br>";

for($i = 1; $i <= 10; $i++){
    if($i == 5){
        goto abc;  // abc = a label that have to implement must anywhere in code
    }
    echo $i . "<br>";
}

abc:
echo "Printed upto {$i}";




//Example 2
echo "<br><br><hr><br> Example : 2 <br><br>";

$j = 1;
$saidHello = false;

loop:
for (; $j <= 10; $j++) {

    if ($j == 6 && !$saidHello) {
        $saidHello = true;
        goto hello;
    }

    echo $j . "<br>";
}

exit;

hello:
echo "Hello entered into the loop<br>";
goto loop;


?>