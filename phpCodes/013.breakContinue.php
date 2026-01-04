<?php

// Regular Loop (Prints 1 to 10)
echo '<u><b>Numbers from (1 - 10) : </b></u><br>';
for ($i = 1; $i <= 10; $i++) {
    echo "Numbers are : " . $i . "<br>";
}

echo "<br><hr>";

// Uses of continue
echo '<u>Uses of <span style="color:red;">continue</span> to skip <b>Number 3</b></u><br>';

for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "Numbers are : " . $i . "<br>";
}


echo "<br><hr>";

// Uses of break
echo '<u>Uses of <span style="color:red;">break</span> to stop the loop upto <b>Number 3</b></u><br>';
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        break;
    }
    echo "Numbers are : " . $i . "<br>";
}

?>
