<?php
//function helps me to write in the file without opening the file 
file_put_contents("data.txt","Amr@com,01552113161"."\n",FILE_APPEND);
/*
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
while(!feof($file)){
   echo fgets(stream: $file)."<br>";
}
*/

?>