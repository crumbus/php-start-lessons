<?php

if (isset($_POST['name']) && (!empty($_POST['name']))) {
    $name = $_POST['name'];
    $last_time = time();
    setcookie('name', $name, time() + 15);
    setcookie('last_time', $last_time, time() + 15);
    if (!isset($_COOKIE['visits'])) {
        $_COOKIE['visits'] = 0;
    }
    setcookie('visits', $_COOKIE['visits'], time() + 15);
    $visit_date = 'Time and date of your last visit ' . date("d F Y h:i:s A", $_COOKIE['last_time']);
    $visits ='You are here ' . ($_COOKIE['visits'] = $_COOKIE['visits'] + 1) . ' times.';
} else {
    $name = 'Guest';
    $visit_date = '';
    $visits = '';
}
?>

<p>You are <?php echo $name ?></p>
<p><?php echo $visit_date; ?> </p>
<p><?php echo $visits; ?> </p>
<form action="lesson7.1.1.php" method="post">
    <input type="submit" name="home">
</form>

