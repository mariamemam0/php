<?php
$x -=10;
function add($y)
{
    global $x;
    $z =$x+$y;
    echo $z;
}


add(20);

?>