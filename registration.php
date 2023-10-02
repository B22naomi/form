<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
      <form action="registration.php" method="post">
        <div class="form-group">
          <input class="form-control" type="text" name="fullname" placeholder="Full Name:">
        </div>
        <div class="form-group">
          <input class="form-control" type="email" name="email" placeholder="Email:">
        </div>
        <div class="form-group">
          <input class="form-control" type="password" name="password" placeholder="Password:">
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="repeat_password" placeholder="Repeat Password:">
        </div>
        <div class="form btn">
          <input class="btn-primary" type="submit" value="Register" name="Submit">
        </div>
      </form>
    </div>
</body>
</html>