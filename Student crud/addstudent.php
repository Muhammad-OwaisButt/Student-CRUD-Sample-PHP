<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>Student Registration Form</title>
</head>
<body>

<h1 class="bg-warning text-center">Student Registration Form</h1>
<form action="studentdata.php" method="POST" class="w-50 mx-auto">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label>Father Name</label>
    <input type="text" class="form-control" name="fathername">
  </div>
  <div class="form-group">
    <label>Phone no.</label>
    <input type="text" class="form-control" name="phoneno">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address">
  </div>

  <button class="btn btn-success" type="submit">Add</button>
</form>

</body>


</html>


