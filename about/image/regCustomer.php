<?php 
include '../about/dbh.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];

$sql="INSERT INTO register_info(name,contact,email,password,confirm) VALUES ('$name','$contact','$email','$password','$confirm')";

if ($conn->query($sql) === TRUE) {
 	echo "New record created sucessfully";
 } else {
	echo "Error:".$sql."<br>".$conn->error;
}

$conn->close();
 
 ?>