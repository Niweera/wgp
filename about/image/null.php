<?php 
include '../connection.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$confirm = $_POST['confirm'];
$value = strcmp($password, $confirm); 
if($value === 0){
	$sql="INSERT INTO customer(FirstName,LastName,Email,ContactNo,Password) VALUES ('$fname','$lname','$email','$contact','$password')";	
	if ($conn->query($sql) === TRUE) {
 	//$welcome = "New record created sucessfully";
 	header("Location: http://localhost/wgp/signin/login.php");
	 } else {
	echo "Error:".$sql."<br>".$conn->error;
	}
}else{
	echo "Password not match!";
}




$conn->close();
 
 