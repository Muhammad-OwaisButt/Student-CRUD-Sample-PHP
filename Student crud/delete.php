<?php

$id = $_GET['id'];

$con = mysqli_connect('localhost','root','','student');

if(mysqli_connect_error())
{
    echo "Database connection failed";
}

$qry = "DELETE FROM student where ID = '$id'";

$result = mysqli_query($con,$qry);

if($result)
{
    header("location:index.php");
}

?>