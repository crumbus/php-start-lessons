<form action="lesson6.2.php" method="post">
    <p>Please enter your name here: </p><input type="text" name="name"></p>
    <p>Please select your sex: <select name="sex">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    unset($_POST['submit']);
    if ($sex == 'male') {
        echo "Welcome Mr. $name.";
    } else {
        echo "Welcome Mrs. $name.";
    }
}