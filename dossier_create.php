<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title> creation des dossiers</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>ajouter un dossier 
                            <a href="indexdossier.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="codeDossier.php" method="POST"  enctype="multipart/form-data">
                               
                                     <div class="mb-3">
                                             <label>nom</label>
                                             <input type="text" name="nom" class="form-control">
                                      </div>

                                      <select name="sexe" class="mb-3">
                                      <option value="F">F</option>
                                     <option value="M">M</option>
                                     </select>
                                      
     
                                     <div class="mb-3">
                                             <label>age</label>
                                             <input type="text" name="age" class="form-control">
                                      </div>
     
                                      <div class="mb-3">
                                             <label>maladie chronique</label>
                                             <input type="text" name="maladie_chronique"  class="form-control">
                                      </div>
                                      <div class="mb-3">
     
                                             <label>assurence maladie</label>
                                             <input type="text" name="assurance_maladie" class="form-control">
                                      </div>
                                     
                                      <label for="image">Image : </label>
                                      <input type="file" name="image" id ="image" accept=".jpg, .jpeg, .png" > <br> <br>

                                 
                            <div class="mb-3">
                                <button type="submit" name="dossier_save" class="btn btn-primary"> sauvegardez </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
