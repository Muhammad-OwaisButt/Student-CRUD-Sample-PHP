<?php
$id = $_POST['id'];
$name = $_POST['name'];
$fathername = $_POST['fathername'];
$phoneno = $_POST['phoneno'];
$address = $_POST['address'];

$con = mysqli_connect('localhost','root','','student');

if(mysqli_connect_error())
{
    echo "Database connection failed";
}

$qry = "UPDATE `student` SET `Name`='$name',`Fathername`='$fathername',`Phoneno`='$phoneno',`Address`='$address' WHERE ID = $id ";

$result = mysqli_query($con,$qry);

if($result)
{
    header("Location:index.php");
}
else
{
    echo"Error";
}

?>