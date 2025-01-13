<?php

function add()
{
    static $x =0;
   $x++;
   echo $x."<br>";
}


add();
add();
add();
add();

?>