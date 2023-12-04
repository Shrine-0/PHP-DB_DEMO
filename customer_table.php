<?php
require 'connector.php';
$name = 'customers'; 
$sql = "CREATE TABLE $name (
    Customer_Id int auto_increment,
    name varchar(30) not null,
    email varchar(45) not null,
    contact int not null,
    Order_Id int ,
    primary key(Customer_Id),
    foreign key(Order_Id) references orders(Order_Id)
)";
if ($mysqli->query($sql)===TRUE)
    echo "<b>Table : $name created successfully</b><br>";
else 
    echo "<b>$name Table creation error :</b> $mysqli->error<br>";

?>