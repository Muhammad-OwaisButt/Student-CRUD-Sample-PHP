<?php

// step 1

$name = $_POST['name'];
$fathername = $_POST['fathername'];
$phoneno = $_POST['phoneno'];
$address = $_POST['address'];

// step 2

$con = mysqli_connect('localhost','root','','student');

if(mysqli_connect_error())
{
    echo "Database connection failed";
}

// step 3

$qry = "Insert into student(Name,Fathername,Phoneno,Address) values ('$name','$fathername','$phoneno','$address')";

// step 4

$result = mysqli_query($con,$qry);

if($result)
{
    header("location:index.php");
}
else
{
    echo "Data is not saved successfully";
}

?>