<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
body{
	background-color: #FFA500
}
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<?php

		$conn = mysqli_connect("localhost","root","","dbms");
		if(!$conn)
		die("connection failed".mysqli_connect_error());
	else
	{
		$info = mysqli_query($conn,"SELECT * FROM dish");
		if($info->num_rows>0)
		{	echo "<table> <tr> <th>ID</th> <th>Name</th>   <th>Price</th> </tr>";
			while($row = $info->fetch_assoc())
			{	echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td> </tr>"; }
		echo "</table>";
		}
	}

?>
    <br><br>


<a href="control.php" class="btn btn-primary">Back To Admin Page</a>
 <br><br>
  <a href="index.php" class="btn btn-primary">logout</a>
</body>
</html>