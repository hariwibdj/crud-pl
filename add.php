<?php
if(isset($_POST['submit'])){
    $name   = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email  = $_POST['email'];

    require "config.php";
    $resul = mysqli_query($mysqli, "INSERT INTO users(name,mobile,email) VALUES('$name','$mobile','$email')");
    if($resul){
        ?>
        <script>
            alert("data berhasil ditambah");
        </script>

        <?php
    }
    else
    {
        ?>
        <script>
            alert("data tidak berhasil ditambah");
        </script>

        
        <?php
    }
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

        <form action="add.php" method="post" name="formuser">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name"  name="name"  >
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Mobile</label>
            <input type="text" class="form-control" id="mobile"  name="mobile"  >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="email"  >
        </div>
        
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary" name="submit">
            <input type="reset" value="Cancel" class="btn btn-warning">
        </div>

        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>