<?php
require 'connector.php';
$name = 'customers';

$sql = "select * from $name
";
$result=$mysqli->query($sql);
if($result!==false)
    if($result->num_rows>0)
        while($row = $result->fetch_assoc()){
            echo "id : ".$row['Customer_Id'].",/br>";
            echo "name : ".$row['name'].",/br>";
            echo "email: ".$row['email'].",/br>";
            echo "contact : ".$row['contact'].",/br>";
        }
    else
        echo "<b>Empty dataset :</b>";
else 
    echo"<b>Error</b>".$result;
?>