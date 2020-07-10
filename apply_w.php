<?php
	$host = "localhost";    
	$user = "root";
	$password = "";
	$db="dbms";

	$email = $_POST["Email"];
	 $name = $_POST["Name"];
	 $degree = $_POST["Degree"];
	 $city   = $_POST["City"];
	 #$pasword = $_POST["Password"];

	$conn = mysqli_connect($host,$user,$password,$db);
	if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{	
		#mysqli_query($conn,"SELECT * FROM data");
		#$id = mysqli_query($conn,"SELECT count(name) from signin");
		
		mysqli_query($conn,"INSERT INTO app_w (name,email,degree,City)
		VALUES ('$name','$email','$degree','$city')");

	echo '<script language="javascript">';
	echo 'alert("Application Successfully Submitted")';
	echo '</script>';
		
		include 'index.php';

		#readfile("localhost/rahul/second.html");
		#echo file_get_contents("http://localhost/rahul/second.html");

		
	}
?>
