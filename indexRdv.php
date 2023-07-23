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

    <title>liste des rendez-vous médicales</title>
</head>
<body>
  
    <div class="container mt-4">

    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> détails 
                            <a href="rdv_create.php" class="btn btn-primary float-end">Ajouter rendez-vous</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Num</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM rdv";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $rdv)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $rdv['id']; ?></td>
                                                <td><?= $rdv['nom']; ?></td>
                                                <td><?= $rdv['email']; ?></td>
                                                <td><?= $rdv['nom']; ?></td>
                                                <td><?= $rdv['date']; ?></td>
                                                <td><?= $rdv['time']; ?></td>
                                                <td><?= $rdv['description']; ?></td>
                                                <td>
                                                     <a href="rdv_edit.php?id=<?= $rdv['id']; ?>" class="btn btn-success btn-sm">modifier</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="sup_rdv" value="<?=$rdv['id'];?>" class="btn btn-danger btn-sm">supprimer</button>
                                                    </form>
                                                   
                                                    <form action="rdv&dossier.php" method="POST" class="d-inline">
                                                        <button type="submit" name="dossier_rdv" value="<?=$rdv['nom'];?>" class="btn btn-danger btn-sm">Dossier</button>
                                                    </form>

                                                </td>

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