<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<?php
echo "<ul>";
echo "<li>{$_POST['fname']}</li>";
echo "<li>{$_POST['lname']}</li>";
echo "<li>{$_POST['email']}</li>";
echo "<li>{$_POST['addr']}</li>";
echo "<li>{$_POST['phone']}</li>";
echo "</ul>";

?>
<table class="table table-dark">
<tr class="table-active">
    <th scope="row">First Name</th>
    <th scope="row">Last Name</th>
    <th scope="row">Email</th>
    <th scope="row">Address</th>
    <th scope="row">Phone</th>
</tr>
<tr class="table-active">
<?php 
foreach($_POST as  $value){
    echo "<td class='table-active'>$value</td>";
}
?>
    </tr>

</table>
</body>
</html>




