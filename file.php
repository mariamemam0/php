<?php
//function helps me to write in the file without opening the file 
//file_put_contents("data.txt","Amr@com,01552113161"."\n",FILE_APPEND);
// $data = file_get_contents("data.txt");
 //echo $data;


 //readfile("data.txt");

 //$data = file("data.txt");


//open file 
 $file = fopen("data.txt","w+");

//write file
fwrite($file ,"mariam emam ,mariamemem@com,01552"."\n");
fwrite($file ,"maram emam ,mariamemem@com,0155"."\n");
fwrite($file ,"farida emam ,mariamemem@com,0155");
rewind($file);
while(!feof($file)){
   echo fgets(stream: $file)."<br>";
}

//close file
fclose($file);


/////////////
//to Read the data that i save



?>