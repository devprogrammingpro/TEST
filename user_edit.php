<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> modifier les comptes </title>
</head>
<body>
  
    <div class="container mt-5">

    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>modifier
                            <a href="indexUsers.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM login WHERE id='$id'";
                            $query_run = mysqli_query($con, $query);

                        
                                $login = mysqli_fetch_array($query_run);

                                ?>
                                <form action="codeUser.php" method="POST" enctype= multipart/form-data >

                                <input type="text" name="id" value="<?= $login['id']; ?>">
                                         
                                    <div class="mb-3">
                                        <label>username</label>
                                        <input type="text" name="username" value="<?=$login['username'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>password</label>
                                        <input type="password" name="password" value="<?=$login['password'];?>" class="form-control">
                                    </div>
                                    
                                <select name="usertype" class="mb-3">
                                 <option value="user">user</option>
                                <option value="admin">admin</option>
                                </select>
                             

                                    <div class="mb-3">
                                        <button type="submit" name="modi_user" class="btn btn-primary">
                                           modifier 
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            
                        

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>