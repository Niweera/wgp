<?php 
include '../dbconf/dbh.php';

 /*$name = $_POST['name'];
 $password = $_POST['password'];

$sql = "SELECT * FROM customer WHERE Email='$name' AND Password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        header("location:../index.php");
    }
} else {
    echo "Invalid Email or Password";
}
$conn->close();*/

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$sql = "select * from customer where Email = '".$email."'";
	$rs = mysqli_query($conn,$sql);
	$numRows = mysqli_num_rows($rs);
	
	if($numRows  == 1){
		$row = mysqli_fetch_assoc($rs);
		if(password_verify($password,$row['Password'])){
            echo "Password verified";
            $_SESSION['user'] = $email;
		}
		else{
			echo "Wrong Password";
		}
	}
	else{
		echo "No User found";
	}
}
?>


<?php
/*if(isset($_POST['login'])){
    $username= $_POST['name'];
    $password=$_POST['password'];
    
    $query = "SELECT email,password from customer WHERE email='$username'";
    $results = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($results);
    $hashword = $row['password'];
    
    $verify = password_verify($password, $hashword);
    if ($verify){
        $_SESSION['user'] = $username;
    }else{
        echo "Password or username is incorrect!";
    }
    if (isset($_SESSION['user'])){
        $username = $_SESSION['user'];
        header('Location: ../user');
         
    }

    
}*/



?>