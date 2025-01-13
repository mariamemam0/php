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
    <td><?= $_POST['fname']?></td>
    <td><?= $_POST['lname']?></td>
    <td><?= $_POST['email']?></td>
    <td><?= $_POST['addr']?></td>
    <td><?= $_POST['phone']?></td>

</table>




