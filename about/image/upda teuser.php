<?php
	session_start();
        
    if(!isset($_SESSION['user_id']))
    {
      header('location: ../login');
      exit;
    }
    include '../dbconf/dbh.php';

    $id = $_POST['custID'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contact'];
 
     $sql = "UPDATE customer SET FirstName='$fname', LastName='$lname', ContactNo=$contactNumber WHERE CuID=$id";
     if (mysqli_query($conn, $sql)) {
        echo "<script>alert(\"Successfully Updated!\");</script>";
    } else {
        echo "<script>alert(\"Error Occured!\");</script>";
        header('location: ../user');
    }
    header('location: ../user');
?>