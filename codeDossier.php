<?php
session_start();
require 'dbcon.php';

if(isset($_POST['sup_dossier']))
{
    $id = mysqli_real_escape_string($con, $_POST['sup_dossier']);

    $query = "DELETE FROM  dossier_medi WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "dossier supprimé";
        header("Location:indexUsers.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "suppression échouée";
        header("Location:indexUsers.php");
        exit(0);
    }
}

if(isset($_POST['modi_dossier']))
{
    
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $nom= mysqli_real_escape_string($con, $_POST['nom']);
    $sexe= mysqli_real_escape_string($con, $_POST['sexe']);
    $age= mysqli_real_escape_string($con, $_POST['age']);
    $maladie_chronique= mysqli_real_escape_string($con, $_POST['maladie_chronique']);
    $assurance_maladie=mysqli_real_escape_string($con, $_POST['assurance_maladie']);
    $image=$_FILES["image"]["name"];
    
         move_uploaded_file($_FILES["image"]["tmp_name"] , "img/".$_FILES["image"]["name"] );
          $query = "UPDATE dossier_medi SET  nom='$nom',sexe='$sexe',age='$age',maladie_chronique='$maladie_chronique',assurance_maladie='$assurance_maladie',image= '$image' WHERE id='$id'";
          $query_run = mysqli_query($con, $query);

          if($query_run)
          {
           
              $_SESSION['message'] = "dossier mofifié";
              header("Location:indexdossier.php");
              exit(0);
          }
          else
          {
              $_SESSION['message'] = "modification échouée";
              header("Location:indexdossier.php");
              exit(0);
          }
      
          
      



}
if(isset($_POST['dossier_save']))
{
if(!empty($_POST['nom']) &&!empty($_POST['sexe']) &&!empty($_POST['age'])&&!empty($_POST['maladie_chronique'])&&!empty($_POST['assurance_maladie']) ) 
    
    

$nom= mysqli_real_escape_string($con, $_POST['nom']);
$sexe= mysqli_real_escape_string($con, $_POST['sexe']);
$age= mysqli_real_escape_string($con, $_POST['age']);
$maladie_chronique= mysqli_real_escape_string($con, $_POST['maladie_chronique']);
$assurance_maladie=mysqli_real_escape_string($con, $_POST['assurance_maladie']);
$image=$_FILES["image"]["name"];

     move_uploaded_file($_FILES["image"]["tmp_name"] , "img/".$_FILES["image"]["name"] );
     $query = "INSERT INTO dossier_medi (nom,sexe,age,maladie_chronique,assurance_maladie,image) VALUES ('$nom','$sexe','$age','$maladie_chronique','$assurance_maladie','$image')";
      
      $query_run = mysqli_query($con, $query);


    if($query_run)
    {
       echo " ajout reussit  ";
       header("Location:indexdossier.php");
       exit(0);
        
    }
    else
    {
        echo  "ajout echoué ";
        header("Location:indexdossier.php");
        exit(0);
    }
}



?>