<!DOCTYPE html>
<html>
<head>
	<title>services</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css3.css">
</head>
<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$db="dbms";

	$email = $_POST["email"];
	 $name = $_POST["name"];
	 $city = $_POST["city"];
	 $count = $_POST["count"];

	$conn = mysqli_connect($host,$user,$password,$db);
	if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{	
		#mysqli_query($conn,"SELECT * FROM data");
		#$id = mysqli_query($conn,"SELECT count(name) from signin");
		$info = mysqli_query($conn,"SELECT Empty FROM tables");
		$row = $info->fetch_assoc();
		$avl = intval($row["Empty"]);

		#echo $avl;
		if($count>4)
		{
			echo '<script language="javascript">';
        	echo 'alert("Maximum 4 tables can be booked at a time")';
        	echo '</script>';
        	include 'services.php';
		}
		if($avl<$count)
		{
			echo '<script language="javascript">';
        	echo 'alert("Currently requested no of tables not available")';
        	echo '</script>';
        	include 'services.php';
		}
		else
		{
			mysqli_query($conn,"UPDATE tables SET Empty =Empty-$count where id =1");
			mysqli_query($conn,"UPDATE tables SET Busy =Busy+$count where id =1");
			mysqli_query($conn,"INSERT INTO booking(cust_name,no_of_tables) VALUES('$name',$count)");
			$info2 = mysqli_query($conn,"SELECT id from booking where cust_name='$name' ");
			$row = $info2->fetch_assoc();
			echo "Hello $name<br>";
			echo "Your booking id is ";
			echo $row["id"];
			echo "<br>";
			echo "Show it to the restaurant manager";

		echo "	<br>";
			echo    '	<a href="csignin.html" class="btn btn-primary">Customer Page</a>';
			#echo "Your booking id is"."$row["id"]\n";
			#echo "Show it to the restaurant manager";
		}
		#readfile("localhost/rahul/second.html");
		#echo file_get_contents("http://localhost/rahul/second.html");

		
	}
?>

