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

    <title> modifier le rendez-vous</title>
</head>
<body>
  
    <div class="container mt-5">

    <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>modifier
                            <a href="indexRdv.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM rdv WHERE id='$id'";
                            $query_run = mysqli_query($con, $query);

                            
                                $rdv = mysqli_fetch_array($query_run);

                                ?>
                                <form action="code.php" method="POST">
                                    <input type="text" name="id" value="<?= $rdv['id']; ?>">

                                    <div class="mb-3">
                                        <label>nom</label>
                                        <input type="text" name="nom" value="<?=$rdv['nom'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>email</label>
                                        <input type="email" name="email" value="<?=$rdv['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>numero de telephone </label>
                                        <input type="text" name="num" value="<?=$rdv['num'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>date</label>
                                        <input type="date" name="date" value="<?=$rdv['date'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Heure</label>
                                        <input type="time" name="time" value="<?=$rdv['time'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>description</label>
                                        <input type="text" name="description" value="<?=$rdv['description'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="modi_rdv" class="btn btn-primary">
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