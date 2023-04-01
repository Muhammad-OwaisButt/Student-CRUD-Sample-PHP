<?php

// step 1

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// step 2

$con = mysqli_connect('localhost','root','','student');

if(mysqli_connect_error())
{
    echo "Database connection failed";
}

// step 3

$qry = "Insert into users(Name,Email,Password) values ('$username','$email','$password')";

// step 4

$result = mysqli_query($con,$qry);

if($result)
{
    header("location:login.php");
}
else
{
    echo "Data is not saved successfully";
}

?>