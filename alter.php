<?php
require 'connector.php';
$name = 'customers';
$sql="alter table $name
modify column contact int(10)
";
if($mysqli->query($sql)===TRUE)
    echo "<b>Successfully altered table $name</b></br>";
else 
    echo "<b>Error while altering table $name :</b> $mysqli->error</br>";
?>