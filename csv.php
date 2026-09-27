<?php

include 'db.php';

header('Content-type:text/csv');
header('Content-Disposition:attachment;filename=details.csv');
$output=fopen("php://output",'w');
fputcsv($output,array("ID","name","salary"));
$result=$con->query("select * from products");
while($row=$result->fetch_assoc()){
    fputcsv($output,$row);
}

?>