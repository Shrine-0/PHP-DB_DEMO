<?php
$mysqli = new mysqli("php-db","nischal","1234","php_db");

if ($mysqli->connect_error)
    die("Connection Error".$mysqli->connect_error);
else 
    echo "<b>Connection Successfull</b><br>";
// $mysqli->close();
?>