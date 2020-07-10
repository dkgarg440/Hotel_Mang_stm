<!DOCTYPE html>
<html>
<head>
  <title>dishinfo</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron">
  <h1 class="display-4"></h1>
  <p class="lead">Click below to check Menu</p>
  <hr class="my-4">
  <a href="all_dish.php" class="btn btn-primary">Menu</a>
</div>


<form action="http://localhost/dbms/add_dish.php" method="post">
   <div class="container">
 <h1>add dish </h1>


    <div class="form-group">
    <label for="m_id">Name</label>
    <input type="text" class="form-control" name ="Name" id="m_id"  placeholder="1" required>
  </div>
      <div class="form-group">
    <label for="m_id">Price</label>
    <input type="text" class="form-control" name="Price" id="m_id" placeholder="1" required>
  </div>

    
  
  <button type="submit" class="btn btn-primary">Add</button>
</div>
</form>

<form action="http://localhost/dbms/remove_dish.php" method = "post">
 
  <div class="container">
 <h1>remove dish </h1>
  <div class="form-group">
    <label for="m_id">dish id</label>
    <input type="text" class="form-control" name = "ID" id="m_id" placeholder="1" required>
  </div>

 
    
  
  <button type="submit" class="btn btn-primary">remove</button>
</div>
</form>
 <form action="http://localhost/dbms/change_price.php" method = "post">
 
  <div class="container">
 <h1>Change price </h1>
  <div class="form-group">
    <label for="m_id">dish id</label>
    <input type="text" class="form-control" name = "ID" id="m_id" placeholder="1" required>
  </div>
    <div class="form-group">
    <label for="m_id">updated price</label>
    <input type="text" class="form-control" name = "price" id="m_id" placeholder="1" required>
  </div>

 
    
  
  <button type="submit" class="btn btn-primary">change</button>
      <br><br>
  <a href="control.php" class="btn btn-primary">back to admin page</a>
  <br><br>
  <a href="index.php" class="btn btn-primary">logout</a>
</div>
</form>   








</body>
</html>