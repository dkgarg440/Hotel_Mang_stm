<!DOCTYPE html>
<html>
<head>
	<title>waiterinfo</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron">
  <h1 class="display-4">Waiter</h1>
  <p class="lead">To view all details of waiters</p>
  <hr class="my-4">
  <a href="all_waiter.php" class="btn btn-primary">view</a>
</div>


<form action="http://localhost/dbms/add_waiter.php" method = "post">
   <div class="container">
 <h1>Add waiter </h1>

  <div class="form-group">
    <label for="w_id">Application id</label>
    <input type="text" class="form-control" name="app_id" id="w_id" placeholder="1">
  </div>
    <div class="form-group">
    <label for="m_id">manger id</label>
    <input type="text" class="form-control" name="m_id" id="m_id" placeholder="1">
  </div>
    <div class="form-group">
    <label for="m_id">Salary</label>
    <input type="text" class="form-control" name="Salary" id="m_id" placeholder="1">
  </div>

    
  
  <button type="submit" class="btn btn-primary">Add</button>
</div>
</form>

<form action="http://localhost/dbms/remove_waiter.php" method="post">
 
  <div class="container">
 <h1>remove waiter </h1>
  <div class="form-group">
    <label for="w_id">waiter id</label>
    <input type="text" class="form-control" name="ID" id="w_id" placeholder="1">
  </div>

 
    
  
  <button type="submit" class="btn btn-primary">remove</button>
</div>
</form>
<form action="http://localhost/dbms/salary_waiter.php" method="post">
 
  <div class="container">
 <h1>Change Salary </h1>
  <div class="form-group">
    <label for="w_id">Waiter id</label>
    <input type="text" class="form-control" name="ID" id="w_id">
  </div>
    <div class="form-group">
    <label for="w_id">Updated Salary</label>
    <input type="text" class="form-control" name="salary" id="w_id">
  </div>

 
    
  
  <button type="submit" class="btn btn-primary">Change</button>
</div>
</form>
    

<div class="jumbotron">
  <h1 class="display-4">Application details</h1>
    <hr class="my-4">
  <a href="all_aw.php" class="btn btn-primary">view</a>
    <br><br>
  <a href="control.php" class="btn btn-primary">back to admin page</a>
  <br><br>
  <a href="index.php" class="btn btn-primary">logout</a>
</div>







</body>
</html>