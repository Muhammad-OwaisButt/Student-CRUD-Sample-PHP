<?php

$id = $_GET['id'];

$con = mysqli_connect('localhost','root','','student');

if(mysqli_connect_error())
{
    echo "Database connection failed";
}

$qry = "SELECT * FROM student where ID = '$id'";

$result = mysqli_query($con,$qry);

foreach($result as $row)
{
    $name = $row['Name'];
    $fathername = $row['Fathername'];
    $phoneno = $row['Phoneno'];
    $address = $row['Address'];
}

?>
<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>Student Registration Form</title>
</head>
<body>
<h1 class="bg-warning text-center">Student Registration Form</h1>
<form action="updatestudent.php" method="POST" class="w-50 mx-auto">
<div class="form-group">
    
    <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>">
  </div>  
<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" value="<?php echo $name;?>">
  </div>
  <div class="form-group">
    <label>Father Name</label>
    <input type="text" class="form-control" name="fathername" value="<?php echo $fathername;?>">
  </div>
  <div class="form-group">
    <label>Phone no.</label>
    <input type="text" class="form-control" name="phoneno" value="<?php echo $phoneno;?>">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" value="<?php echo $address;?>">
  </div>

  <button class="btn btn-warning" type="submit">Update</button>
</form>

</body>


</html>