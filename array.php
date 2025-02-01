<?php 
//$array = [2,4,5,6,7];

//$arraydata= array(1,2,3,4,5,6);



$data = range('a','z');
//for($i=0;$i<count($data);$i++){
  //  echo $data[$i]."<br>";
//}

//foreach($data as $value){
//    echo $value ."<br>";
//}
$id = 2;
$name = "mariam";
$email = "mariam@com";


$array_assoc = compact("id","name","email");


//$array_assoc=[
//];

foreach($array_assoc as $key=>$value){
    echo $key ."<br>";
}

