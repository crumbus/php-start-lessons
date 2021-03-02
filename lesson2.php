<?php

//Task 1
$types = array(
$a = 152,
$b = '152',
$c = 'London',
$d = array(152),
$e = 15.2,
$f = false,
$g = true);
echo 'Task 1: <br>';
foreach ($types as $item) {
    echo gettype($item) . '<br>';}
echo '<hr>';


//Task 2
$a = 10;
$b = 5;
echo 'Task 2:<br>' . $a . ' из ' . $b . ' студентов посетили лекцию.<br>';
echo "$a из $b студентов посетили лекцию.<hr>";

//Task 3
$start = 'Доброе утро';
$middle = ' дамы ';
$end = 'и господа';
$sentence = $start;
$sentence .= $middle;
$sentence .= $end;
echo "Task 3:<br> $sentence <hr>";

//Task 4
$first = array ('element1', 'element2', 'element3', 'element4', 'element5');
$second = array ('item1', 'item2', 'item3', 'item4', 'item5',);
$first['element'] = 'elementX';
unset($second[0]);

echo 'Task 4: <pre>';
print_r($first);
print_r(@$second);
echo '</pre><br>';
echo ("{$first[2]} <br> {$second[2]} <br>");
echo 'Array $first contain ' . count($first) . ' elements<br>';
echo 'Array $second contain ' . count($second) . ' elements<hr>';