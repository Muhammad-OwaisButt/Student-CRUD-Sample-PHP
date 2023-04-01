<?php
session_start();

$user = 0;

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$con = mysqli_connect('localhost','root','','student');

if(mysqli_connect_error())
{
    echo "Database connection failed";
}

$qry= "SELECT * FROM users WHERE Name = '$username' and Email = '$email' and Password = '$password'";

$result = mysqli_query($con,$qry);

foreach($result as $row)
{
    if($row['Name']==$username && $row['Email']==$email && $row['Password']==$password)
    {
        $user =1;
    }
}

if($user==1)
{
    $_SESSION['authentication']=$username;
    header("Location:index.php");
}
else
{
    echo"Sorry!!! Your entered data is wrong";
}
?>