<?php

$host="localhost";
$user="root";
$password="";
$db="cabinet_medicale";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}
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

      <a href="#" class="logo"> <i class="fas fa-heartbeat" ></i> <!--a class="fas fa-tools"></a--> Dashboard  </a>

      <div class="links">
         <a href="indexRdv.php"> rendez-vous</a>
         <a href="indexUsers.php">comptes</a>
         <a href="indexdossier.php">dossier medi</a>
         <a href="indexOrdo.html">ordonnance</a>
         <a href="logout.php" >logout </a>
      </div>

      

   </nav>

</header>

<section class="home" id="home">

   <div class="image">
      <img src="imageDEN/Oral care-amico.svg" alt="">
   </div>

   <div class="content">
   <h1 class="heading"> <span>bienvenue  </span>  sur votre espace administrateur</h1>
     
      <!--a href="rdv.php" class="btn">prenez rendez-vous </a-->
   </div>

</section>

