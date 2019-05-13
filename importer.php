<?php 
$json=file_get_contents('data.json');

#print_r($json)

$data= json_decode($json,true);

foreach ($data as $row ) {
#print_r($row)
$id =$row['apps'];
}






$sql="INSERT INTO list_app ('usuario', 'drive', 'skype', 'hangoust', 'maps', 'remote', 'gmail', 'keep', 'fotos') VALUES ('dsfsddfa', '0', '0', '0', '0', '0', '0', '0', '0');";
