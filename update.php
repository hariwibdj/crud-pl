<?php
require "config.php";
$id = $_GET['id'];



$resul = mysqli_query($mysqli,"SELECT * FROM users WHERE id = '$id'");
while($users_data=mysqli_fetch_assoc($resul)){
    $name   = $users_data['name'];
    $mobile = $users_data['mobile'];
    $email  = $users_data['email'];

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Registrasi User</h1>

        <form action="update.php" method="post" name="formuser">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name"  name="name" value="<?=$name; ?>" >
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile"  name="mobile" value="<?=$mobile; ?>" >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="email" value="<?=$email; ?>" >
        </div>
        
        <div class="mb-3">
            <input type="submit" value="Update" class="btn btn-primary" name="submit">
            <input type="reset" value="Cancel" class="btn btn-warning">
        </div>

        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>