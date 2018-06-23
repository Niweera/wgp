<?php
	$name=$_POST["stu-name"];
	$tel=$_POST["stu-telephone"];
	$id=$_POST["stu-id"];
	$course=$_POST["stu-course"];
	$sex=$_POST["stu-sex"];
	$hobbies=$_POST["stu-hobbies"];
	
	$link=mysql connect("localhost","root","1995")or die("Sorry Didnot");
	mysql select db("dbname")or die("No DB Found");
	$sql="INSERT INTO student1 (stu-name, stu-telephone, stu-id, stu-course, stu-sex, stu-hobbies)
	VALUES('$name','$tel','$id','$course','$sex','$hobbies[0], $hobbies[1], $hobbies[2], $hobbies[3]')";
	mysql query($sql, $link);
	echo "Student".$name."was entered";
	echo"<hr>";
	mysql close($link);
	$result=mysql query($sql, $link);
?>

$db_select = mysqli_select_db("user_database",$connection);
		if (!$db_select) {
			die("Database selection failed: ". mysqli_error());
		}
	
	
	
	
	
	
	
	
	
