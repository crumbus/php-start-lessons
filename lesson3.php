<?php

//Task 1
//$x = 15;
//const MIN = 10;
//const MAX = 50;
//if ($x >= MIN && $x <= MAX) {
//    echo 'Task 1: <br> + <hr>';
//} else {echo 'Task 1: <br> - <hr>';
//}


//Task 3
$GLOBALS['arr'] = [];
function arrCreate () {
    global $arr;
    for($i = 0; $i < 10; $i ++) {
        $arr [$i] = mt_rand(0,5);
        }
}
arrCreate();

$data = $GLOBALS['arr'];
$elements = [];
$selected = array_rand($GLOBALS['arr'], 3);
foreach ( $selected as $key ) {
    $elements[] = $data[$key];
}
if (count(array_unique($elements)) < count($elements)) {
    echo 'Error. The same array values are present.';
    } else {
        $final = array_sum($elements) / count($elements);
        echo $final;
}

