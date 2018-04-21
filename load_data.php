<?php
$file = fopen("./files/data3.csv","r");

$data_array = [];

while(! feof($file))
  {
	$data_array[] = fgetcsv($file);
  }

fclose($file);

echo json_encode($data_array);