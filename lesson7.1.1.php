<?php
//if (isset($_POST['home'])) {
//    var_dump($_COOKIE['visits']) ;
//}
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
    $result = "Dear Friend, $name!";
} else {
    $result = 'Guest';
}

//echo '<pre>';
?>

<form action="lesson7.1.2.php" method="post">
    <p>Hi <?php echo $result ?></p>
    <p>Please enter your name in field.</p><input type="text" name="name">
    <input type="submit" name="submit">
</form>

<?php var_dump($_COOKIE); ?>