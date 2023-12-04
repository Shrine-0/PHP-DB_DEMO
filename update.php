<?php
require 'connector.php';
$column = 'contact';
$table = 'customers';
$sql="update customers
set contact = 9860133845
where Customer_Id=0
";
if($mysqli->query($sql)===TRUE)
    echo "Updated column <b>$column</b> for table <b>$table</b> successfuly</br>";
else 
    echo "<b>Error while updating column $column for tabel $table : </b>$mysqli->error</br>";
?>