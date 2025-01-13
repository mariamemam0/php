<?php

$array = [1,2,3,4,5,6,7];
echo "<ul>";
for($i = 0; $i<count($array); $i++){
    if($array[$i] == 5){
        exit;
    }
     echo  "<li>".$array[$i]."</li>";

}
echo "</ul>";
echo "*****After for******";
?>