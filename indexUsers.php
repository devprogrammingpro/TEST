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

    <title>liste des utilisateurs</title>
</head>
<body>
  
    <div class="container mt-4">

    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> détails 
                            <a href="user_create.php" class="btn btn-primary float-end">ajouter un compte </a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Usertype</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM login ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $login)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $login['id']; ?></td>
                                                <td><?= $login['username']; ?></td>
                                                <td><?= $login['password']; ?></td>
                                                <td><?= $login['usertype'];?></td>
                                                
                                                <td>
                                                <a href="user_edit.php?id=<?= $login['id']; ?>" class="btn btn-success btn-sm">modifier</a>
                                                    <form action="codeUser.php" method="POST" class="d-inline">
                                                        <button type="submit" name="sup_user" value="<?=$login['id'];?>" class="btn btn-danger btn-sm">supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>