<?php
    session_start();
    require 'dbcon.php';

	$name=$_SESSION["username"];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

   


   <!-- custom css file link  -->
   
    <title>liste des rendez-vous médicales</title>
</head>
<body>
  
    <div class="container mt-4">

    <?php include('message.php'); ?>

   

</nav>

	
	

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
                                    
                                    <th>nom</th>
                                    <th>email</th>
                                    <th>num</th>
                                    <th>date</th>
                                    <th>heure</th>
                                    <th>description</th>
                                </tr>
                              

                            </thead>
                            
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM rdv where nom='$name'" ;
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $rdv)
                                        {
                                            ?>
                                            <tr>
                                                
                                                <td><?= $rdv['nom']; ?></td>
                                                <td><?= $rdv['email']; ?></td>
                                                <td><?= $rdv['nom']; ?></td>
                                                <td><?= $rdv['date']; ?></td>
                                                <td><?= $rdv['time']; ?></td>
                                                <td><?= $rdv['description']; ?></td>
                                               
                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> vous n'avez pas encore pris un rendez-vous  </h5>";
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




</body>
</html>
