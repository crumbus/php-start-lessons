<?php
if (isset($_POST['answer1'])) {
    session_start();
    $_SESSION['answer1'] = $_POST['answer1'];
}
?>

<p>Выбирете первый вариант ответа:</p>
<form action="lesson8.1.3.php" method="post">
    <p><input type="radio" name="answer2" value="1"> Первый вариант</p>
    <p><input type="radio" name="answer2" value="2"> Второй вариант</p>
    <p><input type="radio" name="answer2" value="3"> Третий вариант</p>
    <input type="submit" name="submit">
</form