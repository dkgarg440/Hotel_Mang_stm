<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db="dbms";

	$email = $_POST["email"];
	 $name = $_POST["name"];
	 $username = $_POST["username"];
	 $pasword = $_POST["Password"];

	$conn = mysqli_connect($host,$user,$password,$db);
	if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{	
		#mysqli_query($conn,"SELECT * FROM data");
		#$id = mysqli_query($conn,"SELECT count(name) from signin");
		
		mysqli_query($conn,"INSERT INTO customers (name,username,email,pasword)
		VALUES ('$name','$username','$email','$pasword')");
		
		include 'index.php';

		#readfile("localhost/rahul/second.html");
		#echo file_get_contents("http://localhost/rahul/second.html");

		
	}
?>
