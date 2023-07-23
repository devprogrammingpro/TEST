
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


if(isset($_POST['submit']))
{
if(!empty($_POST['nom']) &&!empty($_POST['email']) &&!empty($_POST['num']) &&!empty($_POST['date']) &&!empty($_POST['time']) ) 
    $nom =  $_POST['nom'];
    $email =  $_POST['email'];
    $num =  $_POST['num'];
    $date =  $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    $sql="SELECT*from rdv";
     $n=mysqli_query($data,$sql); 

     $d=0;

    for ($i=0; $i <mysqli_num_rows($n) ; $i++) { 
      $v1=mysqli_fetch_assoc($n); 
      $dateH=$time.":00";
      if ($date==$v1['date'] && $dateH==$v1['time']){
       $d=1;
       echo'<script>
       alert('.'"Saisi une autre date"'.')
       
       </script>';
     break;
      
      }  
     } 
     if( $d==0){        

    $query = "INSERT INTO rdv (nom,email,num,date,time,description) VALUES ('$nom','$email','$num','$date','$time','$description')";

    $query_run = mysqli_query($data, $query);

    if($query_run)
    {
       echo "rendez-vous confirmez ";
        
        
    }
    else
    {
        echo  "rendez-vous n'est pas confirmez ";
        
    }
   }

}
?>
</php>


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



<center>

<section class="contact" id="contact">

   <h1 class="heading"> <span>Planifier </span> une réunion  </h1>

   <div class="row">

      <!--iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.89592087332!2d72.8319697277345!3d19.14167056419224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1641269162899!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe-->

        <form action="#" method="POST">
         <h3>rendez-vous</h3>
         <div class="inputBox">
            <input type="text" name="nom" placeholder="nom">
            <input type="email" name="email"placeholder="email">
         </div>
         <div class="inputBox">
            <input type="number" name="num" placeholder="numero de telephone">
            <!--input type="text" placeholder="subject"-->
            <input type="date"name="date" class="box">
            <input type="time" name="time">
         </div>
         <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea>
         <input type="submit" name="submit" value="confirmez" class="btn">
      </form>

   </div>

</section>
   </center>

</body>
</html>
