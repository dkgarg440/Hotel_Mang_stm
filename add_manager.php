<?php
		$host = "localhost";
	$user = "root";
	$password = "";
	$db="dbms";
	

	$id = $_POST["id"];
	$salary = $_POST["Salary"];
	#echo $id;
	

	$conn = mysqli_connect($host,$user,$password,$db);
		if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{
		$info = mysqli_query($conn,"SELECT name,email FROM app_m where app_m_id = $id ");
		$row = mysqli_fetch_assoc($info);
		$name = $row["name"];
		$email = $row["email"];
		#echo $row["name"];
		mysqli_query($conn,"INSERT INTO Manager (name,email,Salary) values('$name','$email',$salary)");
		mysqli_query($conn,"DELETE FROM app_m where app_m_id = $id ");
		#include 'all_bill.php';
		#echo "Successful";
		mysqli_close($conn);
		include 'all_manager.php';
	}



?>