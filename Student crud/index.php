
<html lang="en-us">
<header>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>Student Data</title>
</header>

<body>
<a class="btn btn-success" href="addstudent.php">Add Student</a>
<a class="btn btn-secondary" href="logout.php">LOG OUT</a>
<h2><?php session_start(); echo $_SESSION['authentication']; ?></h2>

<?php

if($_SESSION['authentication'])
{
    $con = mysqli_connect('localhost','root','','student');

if(mysqli_connect_error())
{
    echo "Connection failed";
}

$qry = "SELECT * FROM student";

$results = mysqli_query($con,$qry);
?>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Phone no.</th>
        <th>Address</th>
        <th colspan="2">Actions</th>
    </tr>


<?php

foreach($results as $row)
{
    echo"<tr>
         <td>".$row['ID']."</td>
         <td>".$row['Name']."</td>
         <td>".$row['Fathername']."</td>
         <td>".$row['Phoneno']."</td>
         <td>".$row['Address']."</td>
         <td><a class='btn btn-primary' href='edit.php?id=". $row['ID']."'>Edit</a></td>
         <td><a class='btn btn-danger' href='delete.php?id=". $row['ID']."'>Delete</a></td>
         <tr>";
}
}
else
{
    header("Location:login.php");
}
?>
</table>
<hr>
</body>
</html>
