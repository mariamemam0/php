
<table border="2"> 
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Password</th>


  </tr>
<?php
//read from file
//fopen - fgets - close
//file->array
//file_get_contents ->string
//read_file ->read and print

  $std_array = file("data.txt");
 
  foreach($std_array as $std){
    echo "<tr>";
     $std_data = explode(",",$std);
     foreach($std_data as $row){
        echo "<td>$row</td>";
     }
    echo "</tr>";
  }
    


?>
</table>