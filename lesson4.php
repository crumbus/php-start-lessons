<?php

//Task 1
$numbers = [];
for ($i = 1; $i < 26;) {
    $numbers[] = $i++;
}
echo 'Task 1:<br>' . array_sum($numbers) . '<br>';

while ($i <= 25) {
    $numbers[] = $i++;
}
echo array_sum($numbers) . '<br> <hr>';

//Task 2
echo 'Task 2: <br>';
for ($i = 1; $i < 9; $i++) {
    echo pow($i, 2) . '<br>';
}


//Task 3
$buttons = [];
echo 'Task 3: <br>';
for ($i = 1; $i < 11; $i++) {
    $buttons[] = 'Button ' . $i . '<br>';
}

echo "<ul>";
foreach ($buttons as $button) {
    echo "<li><a href=\"#\">$button</li>";
}
echo "<ul>";
