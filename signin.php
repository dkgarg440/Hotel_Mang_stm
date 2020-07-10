<!DOCTYPE html>
<html>
<head>
	<title>User Registration & Login Form</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
       <div class="login-box">	
       <div class="row">
       <div class="col-md-6 login-left">
      	<h2>Login Form</h2>
      	<form actions="clogin.php" method="post">
             <div class="form-group">
      			<label>username</label>
      			<input type="text" name="user" class="form-control" required>
      		 </div>
      		
      		<div class="form-group">
      	    	<label>Password</label>	
      	    	<input type="Password" name="Password" class="form-control" required>
      	    </div>
      	    
      	    <button type="submit" class="btn btn-primary">login</button>

      	</form>
      	
      </div>

      	<div class="col-md-6 login-right">
      	<h2>Register Here</h2>
      	<form actions="http://localhost/dbms/cust_reg.php" method="post">
      		<div class="form-group">
      			<label>username</label>
      			<input type="text" name="username" class="form-control" required>
      		</div>
      		<div class="form-group">
      	    	<label>Name</label>	
      	    	<input type="text" name="name" class="form-control">
      	    </div>
      	    <div class="form-group">
      	    	<label>Email</label>	
      	    	<input type="email" name="email" class="form-control">
      	    </div>
      		<div class="form-group">
      	    	<label>Password</label>	
      	    	<input type="Password" name="Password" class="form-control">
      	    </div>
      	    
      	    <button type="submit" class="btn btn-primary">Book Now</button>

      	</form>

        </div>
        </div>
      	</div>
</div>    


</body>
</html>