<!DOCTYPE html>
<html>
<head>
	<title>services</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css3.css">
</head>
<body>
	<form action="http://localhost/dbms/booking.php" method = "post">
  <h1> Book table</h1>


<div class="form-group">
    
    <label for="inputAddress">Your Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="rahul">
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
  
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input">No of tables</label>
      <input type="text" class="form-control" name="count" id="input">
      <p style="color:red;">Maximum 4</p>
    </div>
  
    
  </div>
 
    
 
    <button type="submit" class="btn btn-primary">Book Now</button>
</div>

  </form>
<br> 
<h1>Your Bookings</h1>