<?php
if (isset($_POST['answer3'])) {
    session_start();
    $_SESSION['answer3'] = $_POST['answer3'];
}
if (($_SESSION['answer1'] == 1) && ($_SESSION['answer2'] == 2) && ($_SESSION['answer3'] == 3)) {
    echo 'You are god damn right!';
} else {
    echo 'Fuck UPPPPP!!!';
}
session_destroy();