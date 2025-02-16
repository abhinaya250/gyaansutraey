<?php

// Connection for main database (myscheme)
$con= mysqli_connect("localhost", "root", "", "myscheme");
if (!$con) {
    die('Main Database Connection Failed: ' . mysqli_connect_error());
}

// Connection for recommendation database (find)
$con_recom = mysqli_connect("localhost", "root", "", "find");
if (!$con_recom) {
    die('Recommendation Database Connection Failed: ' . mysqli_connect_error());
}

?>

