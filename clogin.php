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

    $name = $_POST["username"];
    $pasword = $_POST["password"];

    if(!$conn)
    die("connection failed".mysqli_connect_error());
  else
  {
    $info = mysqli_query($conn,"SELECT * FROM customers where username = '$name' and pasword = '$pasword' ");
    if($info->num_rows>0) {
        echo '<script language="javascript">';
        echo 'alert("Login Successful")';
        echo '</script>';

        echo "<h2>Hello $name</h2>";
        echo "<h3>Your Bookings</h3>";

        $info2 = mysqli_query($conn,"SELECT * from booking where cust_name=\"$name\" ");
            if($info2->num_rows>0)
        { echo "<table> <tr> <th>Booking ID</th> <th>Number of tables</th>   <th>Booking time</th> </tr>";
        while($row = $info2->fetch_assoc())
        { echo "<tr><td>".$row["id"]."</td><td>".$row["no_of_tables"]."</td><td>".$row["book_time"]."</td> </tr>"; }
        echo "</table>";
        }
        }
    
    
    
    else {
        echo '<script language="javascript">';
        echo 'alert("invalid credentials")';
        echo '</script>';
        include 'csignin.html';
      }
        
  }

?>
<br>
  <h4>want to book a table?</h4>
  <a href="services.php" class="btn btn-primary">book</a>
  <br><br>
<a href="index.php" class="btn btn-primary">logout</a>