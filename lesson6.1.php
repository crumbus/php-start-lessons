<body>
<form action="lesson6.1.php" method="post">
    <p>A: <input type="text" name="a"/></p>
    <p>B: <input type="text" name="b"/></p>
    <p>C: <input type="text" name="c"/></p>
    <p>D: <input type="text" name="d"/></p>
    <p>E: <input type="text" name="e"/></p>
    <p>F: <input type="text" name="f"/></p>
    <p>G: <input type="text" name="g"/></p>
    <p><input type="submit" name="submit"/></p>
</form>

<?php

if (isset($_POST['submit'])) {
    $a = ($_POST['a']);
    $b = ($_POST['b']);
    $c = ($_POST['c']);
    $d = ($_POST['d']);
    $e = ($_POST['e']);
    $f = ($_POST['f']);
    $g = ($_POST['g']);
    unset($_POST['submit']);
    $min = min($_POST);
    $max = max($_POST);
    $average = round(array_sum($_POST) / (count($_POST)), 2);
    echo "Task 1:<br> Min value is $min; <br> Max value is $max; <br> Average is $average <hr>";
}

?>
