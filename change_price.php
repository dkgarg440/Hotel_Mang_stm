
<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db="dbms";

	$id = $_POST["ID"];
	 $price = $_POST["price"];
	 
	 #$pasword = $_POST["Password"];

	$conn = mysqli_connect($host,$user,$password,$db);
		if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{
		mysqli_query($conn,"UPDATE dish set price = $price where id = $id");
		#include 'all_bill.php';
		#echo "Successful";
		mysqli_close($conn);
		include 'all_dish.php';
	}



?>