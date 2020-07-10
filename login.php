<?php

    $conn = mysqli_connect("localhost","root","","dbms");

    $name = $_POST["username"];
    $pasword = $_POST["password"];

    if(!$conn)
    die("connection failed".mysqli_connect_error());
  else
  {
    $info = mysqli_query($conn,"SELECT * FROM signin where username = '$name' and pasword = '$pasword' ");
    if($info->num_rows>0) {
        echo '<script language="javascript">';
        echo 'alert("Login Successful")';
        echo '</script>';
        include 'control.php';
      }
    
    
    
    else {
        echo '<script language="javascript">';
        echo 'alert("invalid credentials")';
        echo '</script>';
        include 'admin.php';
      }
        
  }

?>