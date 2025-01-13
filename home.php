<?php
echo "<ul>";
echo "<li>{$_POST['fname']}</li>";
echo "<li>{$_POST['lname']}</li>";
echo "<li>{$_POST['email']}</li>";
echo "<li>{$_POST['addr']}</li>";
echo "<li>{$_POST['phone']}</li>";
echo "</ul>";

?>
<table>
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
</tr>
<tr>
<?php 
foreach($_POST as  $value){
    echo "<td>$value</td>";
}
?>
    </tr>

</table>




