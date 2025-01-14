<?php

//open file 
 $file = fopen("data.txt","w");

//write file
fwrite($file ,"mariam emam ,mariamemem@com,01552113161"."\n");
fwrite($file ,"maram emam ,mariamemem@com,01552113161"."\n");
fwrite($file ,"farida emam ,mariamemem@com,01552113161");



//close file
fclose($file);


/////////////
//to Read the data that i save
$file = fopen("data.txt","r");
$data = fgets(stream: $file);
$data = fgets(stream: $file);
$data = fgets(stream: $file);

echo $data;
?>