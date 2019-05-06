<?php 
$json=file_get_contents('data.json');

#print_r($json)

$data= json_decode($json,true);

foreach ($data as $row ) {
#print_r($row)
$id =$row['apps'];
}


$sql ="INSERT INTO mdm ('apps','estado') VALUES ($id);";