<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
<div class="mb-3">
<form action="add.php"method="get">
<label for="fname" class="form-label">First Name</label>
<input type="text" class="form-control" placeholder="First Name" name="fname" ><br>
<label for="lname" class="form-label">Last Name</label>

<input type="text"  class="form-control" placeholder="Last Name" name="lname" ><br>
<label for="email" class="form-label">Email</label>

<input type="text"  class="form-control" placeholder="Email" name="email"><br>
<label for="addr" class="form-label">Address</label>

<input type="text" class="form-control"  placeholder="Address" name="addr"><br>
<label for="phone" class="form-label">phone</label>
<input type="text"  class="form-control" placeholder="phone" name="phone" ><br>

    <input type="submit" class="form-control" value="Register">
</form>
</div>
</body>
</html>