
<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db="dbms";

	$id = $_POST["ID"];
	 $salary = $_POST["salary"];
	 
	 #$pasword = $_POST["Password"];

	$conn = mysqli_connect($host,$user,$password,$db);
		if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{
		mysqli_query($conn,"UPDATE Waiter set Salary = $salary where id = $id");
		#include 'all_bill.php';
		#echo "Successful";
		mysqli_close($conn);
		include 'all_waiter.php';
	}



?>