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
                            
                            
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>sexe</th>
                                    <th>age</th>
                                    <th width: 120px;>Maladie chronique </th>
                                    <th>assurance maladie</th>
                                    <th>image</th>

                                        
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                  
                                  if(isset($_POST['dossier_rdv'])) {

                                  $nom = mysqli_real_escape_string($con, $_POST['dossier_rdv']);

                                    $query = "SELECT * FROM dossier_medi where nom='$nom'";
                                    
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
                                               
                                            </tr>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>"; ?>

                                        <a href="dossier_create.php" class="btn btn-primary float-end">Ajouter un dossier </a></a>
                                        <?php
                                        
                                    }
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