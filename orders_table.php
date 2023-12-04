<?php
require 'connector.php';
$name = "orders";
$sql = "CREATE TABLE $name (
   Order_Id int auto_increment,
   number int ,
   name varchar(20),
   Primary key (Order_Id) 
)";
if ($mysqli->query($sql)===TRUE)
    echo "<b>Table $name created successfully</b><br>";
else 
    echo "<b>$name Table creation error : </b> $mysqli->error<br>";
?>