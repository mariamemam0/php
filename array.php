<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
  </tr>

<?php 
//$array = [2,4,5,6,7];

//$arraydata= array(1,2,3,4,5,6);



//$data = range('a','z');
//for($i=0;$i<count($data);$i++){
  //  echo $data[$i]."<br>";
//}

//foreach($data as $value){
//    echo $value ."<br>";
//}
//$id = 2;
//$name = "mariam";
//$email = "mariam@com";


//$array_assoc = compact("id","name","email");


$student_array=[
  [
    "id"=>1,
    'name'=>"mariam",
    "email"=>"mariam@com",
  ],
  [
    "id"=>2,
    'name'=>"amr",
    "email"=>"amr@com",
  ],
  [
    "id"=>3,
    'name'=>"maram",
    "email"=>"maram@com",
  ]

];


foreach($student_array as $student){
  echo "<tr>";
  foreach($student as $data){
    echo "<td>$data</td>";
  }
  echo "</tr>";

} 
$data = explode(",","mariam,mariam@com,mansoura");
echo "<pre>";
var_dump($data);
echo "</pre>";

$array = range("a","z");;
$data = implode("-", $array);
echo $data;
?>
</table>

