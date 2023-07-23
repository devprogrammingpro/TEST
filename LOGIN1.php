

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


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from login where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["username"]=$username;

		header("location:userhome.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["username"]=$username;
		
		header("location:dashboard.php");
	}

	else
	{
		echo "username or password incorrect";
	}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>cabinet dentaire </title>
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
<center>
<section class="contact" id="contact">

   <h1 class="heading"> <span> login  </span> form </h1>

   <div class="row">


	<br><br><br><br>
	<div class= "login">
	<div class="row">
	<form action="#" method="POST">

         <h3> </h3>

         <div class="inputBox">
		 <input type="text"  name="username" required
		 placeholder="username">
		  </div>

	<br><br>
    
	     <div class="inputBox">
		 <input type="password"  name="password" required
		 placeholder="password">
		   </div>

	
	<br><br>
	<div class="container-login100-form-btn">
		                  <input class="btn" type="submit" value="Login">
						    
	</div>
	</div>

	</form>


	</div>

</section>
   </center>

</body>
</html>

