<?php
	

	$amount = $_POST["Amount"];
	$c_name = $_POST["Name"];

	$conn = mysqli_connect("localhost","root","","dbms");
		if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{
		mysqli_query($conn,"INSERT INTO bill (c_name,amount) VALUES('$c_name',$amount) ");
		#include 'all_bill.php';
		include 'all_bill.php';
	}



?>