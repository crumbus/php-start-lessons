<?php

$db = new mysqli('localhost', 'admin', 'x909c9f0');
mysqli_set_charset($db, 'utf8mb4_general_ci');

$query = mysqli_query($db, "SELECT * FROM books_list");

while ($row = mysqli_fetch_row($query)) {
    echo $row['name'];
}