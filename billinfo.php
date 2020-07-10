<!DOCTYPE html>
<html>
<head>
  <title>billinfo</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron">
  <h1 class="display-4"></h1>
  <p class="lead">Click below to view all bills</p>
  <hr class="my-4">
  <a href="all_bill.php" class="btn btn-primary">view</a>
</div>


<form action="http://localhost/dbms/add_bill.php" method="post">
   <div class="container">
 <h1>Create a bill </h1>


    <div class="form-group">
    <label for="m_id">Customer Name</label>
    <input type="text" class="form-control" name ="Name" id="m_id"  placeholder="1">
  </div>
      <div class="form-group">
    <label for="m_id">Bill Amount</label>
    <input type="text" class="form-control" name="Amount" id="m_id" placeholder="1">
  </div>

    
  
  <button type="submit" class="btn btn-primary">Add</button>
      <br><br>
  <a href="control.php" class="btn btn-primary">back to admin page</a>
  <br><br>
  <a href="index.php" class="btn btn-primary">logout</a>
</div>
</form>


    








</body>
</html>