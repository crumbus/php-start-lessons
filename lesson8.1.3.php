<?php
if (isset($_POST['answer2'])) {
    session_start();
    $_SESSION['answer2'] = $_POST['answer2'];
}
?>

<p>Выбирете первый вариант ответа:</p>
<form action="lesson8.1.4.php" method="post">
    <p><input type="radio" name="answer3" value="1"> Первый вариант</p>
    <p><input type="radio" name="answer3" value="2"> Второй вариант</p>
    <p><input type="radio" name="answer3" value="3"> Третий вариант</p>
    <input type="submit" name="submit">
</form