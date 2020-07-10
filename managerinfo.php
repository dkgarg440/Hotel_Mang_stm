<!DOCTYPE html>
<html>
<head>
  <title>managerinfo</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron">
  <h1 class="display-4">Manager</h1>
  <p class="lead">To view details of all managers</p>
  <hr class="my-4">
  <a href="all_manager.php" class="btn btn-primary">View</a>
</div>


<form action="http://localhost/dbms/add_manager.php" method="post">
   <div class="container">
 <h1>add manager </h1>


    <div class="form-group">
    <label for="m_id">Application id</label>
    <input type="text" class="form-control" name ="id" id="m_id"  placeholder="1" required>
  </div>
      <div class="form-group">
    <label for="m_id">Salary</label>
    <input type="text" class="form-control" name="Salary" id="m_id" placeholder="1" required>
  </div>

    
  
  <button type="submit" class="btn btn-primary">Add</button>
</div>
</form>

<form action="http://localhost/dbms/remove_manager.php" method = "post">
 
  <div class="container">
 <h1>Remove manager </h1>
  <div class="form-group">
    <label for="m_id">manager id</label>
    <input type="text" class="form-control" name = "ID" id="m_id" placeholder="1" required>
  </div>

 
    
  
  <button type="submit" class="btn btn-primary">Remove</button>
</div>
</form>

<form action="http://localhost/dbms/salary_manager.php" method="post">
 
  <div class="container">
 <h1>Change Salary </h1>
  <div class="form-group">
    <label for="w_id">Manager id</label>
    <input type="text" class="form-control" name="ID" id="w_id" required>
  </div>
    <div class="form-group">
    <label for="w_id">Updated Salary</label>
    <input type="text" class="form-control" name="salary" id="w_id" required>
  </div>

 
    
  
  <button type="submit" class="btn btn-primary">Change</button>
</div>
</form>
    

<div class="jumbotron">
  <h1 class="display-4">Application Details</h1>
    <hr class="my-4">
  <a href="all_am.php" class="btn btn-primary">View</a>
    <br><br>
  <a href="control.php" class="btn btn-primary">back to admin page</a>
  <br><br>
  <a href="index.php" class="btn btn-primary">logout</a>
</div>







</body>
</html>