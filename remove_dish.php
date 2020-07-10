<?php
	

	$id = $_POST["ID"];
	

	$conn = mysqli_connect("localhost","root","","dbms");
		if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{
		mysqli_query($conn,"DELETE FROM dish where id = $id ");
		#include 'all_bill.php';
		#echo "Successful";
		mysqli_close($conn);
		include 'all_dish.php';
	}



?>