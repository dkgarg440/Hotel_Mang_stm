<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
       <div class="login-box">	
       <div class="row">
       <div class="col-md-6 login-left">
      	<h2>Login Form</h2>
      	<form action="http://localhost/dbms/login.php" method="post">
             <div class="form-group">
      			<label>username</label>
      			<input type="text" name="username" class="form-control required ">
      		 </div>
      		
      		<div class="form-group">
      	    	<label>Password</label>	
      	    	<input type="Password" name="password" class="form-control required">
      	    </div>
      	    
      	    <button class="btn btn-primary" type="submit">Submit</button>

      	</form>
      	
      </div>

      
      
        </div>
      	</div>
</div>    


</body>
</html>>