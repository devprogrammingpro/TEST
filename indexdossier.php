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


    <title>liste des dossiers</title>
</head>
<body>
  
    <div class="container mt-4">

    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> détails 
                            <a href="dossier_create.php" class="btn btn-primary float-end">ajouter un dossier </a>
                            
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Sexe</th>
                                    <th>Age</th>
                                    <th >Maladie chronique </th>
                                    <th>Assurance maladie</th>
                                    <th>Image</th>

                                        
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM dossier_medi ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $dossier_medi)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $dossier_medi['id']; ?></td>
                                                <td><?= $dossier_medi['nom']; ?></td>
                                                <td><?= $dossier_medi['sexe']; ?></td>
                                                <td><?= $dossier_medi['age'];?></td>
                                                <td><?= $dossier_medi['maladie_chronique'];?></td>
                                                <td><?= $dossier_medi['assurance_maladie'];?></td>

                                                
                                                <td> <img src="img/<?php echo $dossier_medi["image"]; ?>" width = 100 title="<?php echo $dossier_medi['image']; ?>"> </td>
                                                
                                                <td>
                                                <a href="dossier_edit.php?id=<?= $dossier_medi['id']; ?>" class="btn btn-success btn-sm">modifier</a>
                                                    <form action="codeDossier.php" method="POST" class="d-inline">
                                                        <button type="submit" name="sup_dossier" value="<?=$dossier_medi['id'];?>" class="btn btn-danger btn-sm">supprimer</button>
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