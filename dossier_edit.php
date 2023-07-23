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
                            $query = "SELECT * FROM  dossier_medi WHERE id='$id'";
                            $query_run = mysqli_query($con, $query);

                            
                                $dossier_medi = mysqli_fetch_array($query_run);

                                ?>
                                <form action="codeDossier.php" method="POST" enctype="multipart/form-data">

                                <input type="text" name="id" value="<?= $dossier_medi['id']; ?>">
                                         
                                    <select name="sexe" class="mb-3">
                                 <option value="F">F</option>
                                <option value="M">M</option>
                                </select>

                                <div class="mb-3">
                                        <label>nom</label>
                                        <input type="text" name="nom" value="<?=$dossier_medi['nom'];?>" class="form-control">
                                 </div>
                                 

                                <div class="mb-3">
                                        <label>age</label>
                                        <input type="text" name="age" value="<?=$dossier_medi['age'];?>" class="form-control">
                                 </div>

                                 <div class="mb-3">
                                        <label>maladie chronique</label>
                                        <input type="text" name="maladie_chronique" value="<?=$dossier_medi['maladie_chronique'];?>" class="form-control">
                                 </div>
                                 <div class="mb-3">

                                        <label>assurence maladie</label>
                                        <input type="text" name="assurance_maladie" value="<?=$dossier_medi['assurance_maladie'];?>" class="form-control">
                                 </div>
                                
                                 <label for="image">Image : </label>
                                 <input type="file" name="image" id ="image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
                            
                             

                                    <div class="mb-3">
                                        <button type="submit" name="modi_dossier" class="btn btn-primary">
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