<?php

$file = fopen("prodacts.csv","r");
$prodacts=[];

$i=0;
while(($line = fgetcsv($file)) !== FALSE){
	$prodacts[$i]["title"] = $line[0];
	$prodacts[$i]["price"] = $line[1];
	$prodacts[$i]["description"] = $line[2];
	$prodacts[$i]["owner"] = $line[3];
	$i++;
}

$json_prodacts = json_encode($prodacts);
echo $json_prodacts;

?>