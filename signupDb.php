<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
  echo "server not connected";
}
if(!mysqli_select_db($con,'placement_prep'))
{
  echo "not database";
}
$name=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="INSERT INTO users(fullname, email, password)
VALUES('$name', '$email', '$password')";
if(!mysqli_query($con,$sql))
{
  echo "not inserted";
}
else{
  echo "inserted";
}
header("refresh:0; url=login.php");
?>