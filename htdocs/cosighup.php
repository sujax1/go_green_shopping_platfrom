<?php
$servername="localhost";
$username="root";
$password="";
$database_name="cosignup";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:".mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $username = $_POST['username'];
    $userid = $_POST['userid'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_query = "INSERT INTO signupform( username ,userid, email, password) VALUES('$username','$userid','$email','$password')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "You Have Successfully Been Registered With Us";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    header("LOCATION:collegeportalpage\collegeportalpage\index.html ");
    mysqli_close($conn);
}
?>