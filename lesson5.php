<?php

//Task 1
$products = array(
    array('name' => 'Телевизор', 'price' => '400', 'quantity' => 1),
    array('name' => 'Телефон', 'price' => '300', 'quantity' => 3),
    array('name' => 'Кроссовки', 'price' => '150', 'quantity' => 2),
);

function purchaseAmounts($array)
{
    $sum = 0;
    $selected = 0;
    foreach ($array as $item) {
        $sum += $item['price'];
        $selected += $item['quantity'];
    }
    echo "Task 1:<br> Total purchases is $sum!<br> Total selected items is $selected <hr>";
}

purchaseAmounts($products);

//Task 2
//Снова не хочу квадратных уровнений
//echo 'Task 2:<br>
//Снова не хочу квадратных уровнений<hr>';

//Task 3 & 4 in one case
$digits = [];
function deleteNegatives(&$array)
{
    for ($i = 0; $i < 20; $i++) {
        $array[$i] = (mt_rand(-50, 50));
    }
    foreach ($array as $key => $value) {
        if ($value < 0) {
            unset($array[$key]);
        }
    }
}

deleteNegatives($digits);
echo 'Task 3 & 4 in one case:<br>Selection positive values:<br><pre>';
print_r($digits);