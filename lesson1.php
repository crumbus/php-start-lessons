<?php

//Task 1
//one string comment
/* multi string comment
yeah we did */
echo 'Task 1: <br> Hello Pidor <br> <hr>';

//Task 2
$pravoslavieTv = '';
$manufacturerAddress = '';
$vehicleColor = '';
$waterTempCelsius = '';
$phoneModel = '';
echo 'Task 2: <br> Done<br><hr>';


//Task 3
$first = 3;
$second = 5;
$third = 8;
$sum = ($first+$second+$third);
echo 'Task 3: <br>' . $sum . '<br>';

$result = 2+6+2/5-1;
echo 'Result is ' . $result . '<br><hr>';

//Task 4
$a = 3;
$b = 4;
$c = &$a;
$d = &$b;
echo 'Task 4: <br> Variable $a = ' . $a . '<br>' . 'Variable $a = ' .  $b . '<br>' ;
echo 'Variable $c = ' . $c . '<br>' . 'Variable $d = ' .  $d . '<br><hr>' ;

//Task 5
const constantine = 41;
const fortune = 33;
const constantine = 40;
echo 'Task 5: <br>' . constantine;