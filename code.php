<?php
session_start();
require 'dbcon.php';

if(isset($_POST['sup_rdv']))
{
    $id = mysqli_real_escape_string($con, $_POST['sup_rdv']);

    $query = "DELETE FROM rdv WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "rendez-vous supprimé";
        header("Location:indexRdv.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "suppression échouée";
        header("Location: indexRdv.php");
        exit(0);
    }
}

if(isset($_POST['modi_rdv']))
{
    $id = mysqli_real_escape_string($con,  $_POST['id']);

    $nom= mysqli_real_escape_string($con, $_POST['nom']);
    $email= mysqli_real_escape_string($con, $_POST['email']);
    $num= mysqli_real_escape_string($con, $_POST['num']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $time = mysqli_real_escape_string($con, $_POST['time']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $query = "UPDATE rdv SET nom='$nom', email='$email',num='$num', date='$date', description='$description' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "rdv mofifié";
        header("Location:indexRdv.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "modification échouée";
        header("Location: indexRdv.php");
        exit(0);
    }

}

if(isset($_POST['rdv_save']))
{
if(!empty($_POST['nom']) &&!empty($_POST['email']) &&!empty($_POST['num']) &&!empty($_POST['date']) &&!empty($_POST['time']) ) 
    $nom =  $_POST['nom'];
    $email =  $_POST['email'];
    $num =  $_POST['num'];
    $date =  $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];

    $query = "INSERT INTO rdv (nom,email,num,date,time,description) VALUES ('$nom','$email','$num','$date','$time','$description')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
       echo " ajout reussit  ";
       header("Location:indexRdv.php");
       exit(0);
        
    }
    else
    {
        echo  "ajout echoué ";
        header("Location:indexRdv.php");
        exit(0);
    }
}



?>