<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <h1>Daftar User</h1>
    <h2> <a href="add.php" class="btn btn-primary" > Add New User</a> </h2>
    <table class="table table-hover">

        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
                <?php
                require "config.php";
                $result = mysqli_query($mysqli,"SELECT * FROM users ORDER BY id");
                while($user_data = mysqli_fetch_assoc($result)){
                ?>
        <tbody>
            <tr>
                <td><?=$user_data['id'];?></td>
                <td><?=$user_data['name'];?></td>
                <td><?=$user_data['mobile'];?></td>
                <td><?=$user_data['email'];?></td>
                <td> 
                    <a href="update.php?id=<?=$user_data['id'];?>" class="btn btn-warning">Edite Data</a>  
                    <a href="delete.php?id=<?=$user_data['id'];?>" class="btn btn-danger">Delete Data</a> 
                </td>
            </tr>
        </tbody>
                <?php

                }
                ?>
                

    </table>


   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>