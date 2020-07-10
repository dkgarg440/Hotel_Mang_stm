
<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db="dbms";

	$id = $_POST["app_id"];
	 $mid = $_POST["m_id"];
	 $salary = $_POST["Salary"];
	 
	 #$pasword = $_POST["Password"];

	$conn = mysqli_connect($host,$user,$password,$db);
		if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{
		$info = mysqli_query($conn,"SELECT name,email FROM app_w where app_w_id = $id ");
		$row = mysqli_fetch_assoc($info);
		$name = $row["name"];
		$email = $row["email"];
		mysqli_query($conn,"INSERT INTO Waiter (m_id,name,email,Salary) values($mid,'$name','$email',$salary)");
		mysqli_query($conn,"DELETE FROM app_w where app_w_id = $id ");
		#include 'all_bill.php';
		#echo "Successful";
		mysqli_close($conn);
		include 'all_waiter.php';
	}



?>