<!DOCTYPE html>
<html>
<head>
	<title>services</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css3.css">
</head>
<body>
	<div class="jumbotron">
  <h1 class="display-4">Welcome to our restuarent</h1>
  <p class="lead">Here u can book a table & enjoy the delicious food in restaurant.</p>
  <hr class="my-4">
  <p>To get more info about plss.. .</p>
  <a class="btn btn-primary btn-lg" href="about.php" role="button">About us</a><br/><br/>
    <a class="btn btn-primary btn-lg" href="all_dish.php" role="button">Full Menu</a>
</div>
</div>

<form action="http://localhost/dbms/booking.php" method = "post">
  <h1>Already have an account? Book your table now.</h1>


<div class="form-group">
    
    <label for="inputAddress">Username</label>
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
  <h3>Not Registered Yet?</h3>
  <a class="btn btn-primary btn-lg" href="csignin.html" role="button">Create Account</a>
</body>
</html>