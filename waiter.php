<!DOCTYPE html>
<html>
<head>
  <title>Application form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css4.css">
</head>
<body>

    
<form action="apply_w.php" method="post">
  <div class="container">

<h1>Personal Information</h1>
 
<div class="form-group">
    
     <label for="m_name">Name</label>
    <input type="text" name="Name" class="form-control" id="m_name" placeholder="Deepak Garg" required>
  </div>
  <div class="form-group"> 
  <label for="m_degree">Degree</label>
    <input type="text" name= "Degree" class="form-control" id="m_degree" placeholder="MBA" required>
  </div> 
<div class="form-group">
    <label for="m_Address">City</label>
    <input type="text" name = "City" class="form-control" id="m_Address" placeholder="City" required>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="m_email">Email</label>
      <input type="email" name = "Email" class="form-control" id="m_email" placeholder="abc12@example.com" required>
    </div>
    
  </div>
  <button class="btn btn-primary" type="submit">Submit</button>
</div>
</form>
  
</body>
</html>