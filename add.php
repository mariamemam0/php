<?php 
//file to write inside it
//1-fopen - fwrite- fclose
//2-file_put_content(file,data,file_append)


 $data = implode(",",$_GET);
file_put_contents("data.txt","\n".$data,FILE_APPEND);

header("Location:list.php");

?>
