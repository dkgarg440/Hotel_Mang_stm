<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
body{
	background-color: #FFA500
}
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db="dbms";

	$email = $_POST["email"];
	 $name = $_POST["name"];
	 $username = $_POST["username"];
	 $pasword = $_POST["pasword"];
	# echo "string";

	$conn = mysqli_connect($host,$user,$password,$db);
	if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{	
		#mysqli_query($conn,"SELECT * FROM data");
		#$id = mysqli_query($conn,"SELECT count(name) from signin");
		$info = mysqli_query($conn,"SELECT * FROM customers where username='$username' ");
		if($info->num_rows>0)
		{
			        echo '<script language="javascript">';
        echo 'alert("username exists")';
        echo '</script>';
        include 'csignin.html';
		}
		else
		{
		
		mysqli_query($conn,"INSERT INTO customers (name,username,email,pasword)
		VALUES ('$name','$username','$email','$pasword')");

		        echo '<script language="javascript">';
        echo 'alert("Registration Successful")';
        echo '</script>';
		
		echo "<h2>Hello $name</h2>";
		#include 'customers.php';
		#echo "<h1> Book table</h1>";
		?>

  <?php

  ?>
  <br>
  <h4>want to book a table?</h4>
  <a href="services.php" class="btn btn-primary">book</a>
  <br> <br>
<a href="index.php" class="btn btn-primary">logout</a>
  <?php



		#readfile("localhost/rahul/second.html");
		#echo file_get_contents("http://localhost/rahul/second.html");
}
		
	}
?>
