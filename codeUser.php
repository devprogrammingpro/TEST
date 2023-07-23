<?php
session_start();
require 'dbcon.php';

if(isset($_POST['sup_user']))
{
    $id = mysqli_real_escape_string($con, $_POST['sup_user']);

    $query = "DELETE FROM login WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "utilisateur supprimé";
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

if(isset($_POST['modi_user']))
{
    
    $id = mysqli_real_escape_string($con,  $_POST['id']);
    $username= mysqli_real_escape_string($con, $_POST['username']);
    $password= mysqli_real_escape_string($con, $_POST['password']);
    $usertype= mysqli_real_escape_string($con, $_POST['usertype']);
   

    $query = "UPDATE login SET username='$username', password='$password',usertype='$usertype' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "compte mofifié";
        header("Location:indexUsers.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "modification échouée";
        header("Location: indexUsers.php");
        exit(0);
    }

}
if(isset($_POST['user_save']))
{
if(!empty($_POST['username'])&&!empty($_POST['password']) &&!empty($_POST['usertype']) ) 
    
    $username =  $_POST['username'];
    $password =  $_POST['password'];
    $usertype =  $_POST['usertype'];
    
    $query = "INSERT INTO login (username,password,usertype) VALUES ('$username','$password','$usertype')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
       echo " ajout reussit  ";
       header("Location:indexUsers.php");
       exit(0);
        
    }
    else
    {
        echo  "ajout echoué ";
        header("Location:indexUsers");
        exit(0);
    }
}



?>