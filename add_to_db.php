<?php
require 'connector.php';
$table_name='customers';
$sql = "insert into $table_name(name,email,contact)
values('nischal','tnischal18@gmail.com',980)
";
if($mysqli->query($sql)===TRUE)
    echo "Added successfully to the $table_name table</br>";
else
    echo "Error While adding to the Table : $table_name<br>$mysqli->error";
?>