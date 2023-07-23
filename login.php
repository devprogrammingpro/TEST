
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
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Login Form </title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form action="#" method="POST">
        <div class="txt_field">
          <input type="text"  name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
       
        <input type="submit" value="Login">
        
      </form>
    </div>

  </body>
</html>
