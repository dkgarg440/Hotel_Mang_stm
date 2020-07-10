<?php
	

	$price = $_POST["Price"];
	$name = $_POST["Name"];

	$conn = mysqli_connect("localhost","root","","dbms");
		if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{
		mysqli_query($conn,"INSERT INTO dish (name,price) VALUES('$name',$price) ");
		#include 'all_bill.php';
		#cho "Successful";
		mysqli_close($conn);
		include 'all_dish.php';
	}



?>