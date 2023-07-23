<?php
    session_start();
    require 'dbcon.php';

	$name=$_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>cabinet dentaire </title>
    
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">
<!--
   <div class="contact-info">
      <p> <i class="fas fa-map"></i> mumbai, india - 400104 </p>
      <p> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </p>
      <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
   </div>
 -->
   <nav class="navbar">

      <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <!--a class="fas fa-tools"></a--> cabinet medicale  </a>

      <div class="links">
         <a href="userhomerdv.php"> historiques de mes rendez-vous</a>
         <a href="rdv.php">prendre un rendez-vous</a>
         
         <a href="logout.php" >logout </a>
</div>

   </nav>

</header>

<section class="home" id="home">

   <div class="image">
      <img src="imageDEN/Oral care-amico.svg" alt="">
   </div>

   <div class="content">
      <h3>  bienvenu <?php  echo $name ?></h3>
      <p> bienvenue sur votre espace , notre équipe vous remercie de votre confiance et vous souhaite un prompt rétablissement. </p>
      <a href="rdv.php" class="btn">prenez rendez-vous </a>
   </div>

</section>


