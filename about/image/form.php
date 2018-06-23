<!DOCTYPE html>
	<html>
		<head>
			<title>student details</title>
		</head>
		
		<body>
			<h1 align=center>Student Details</h1>
			<form action="inde2.php" method="post">
			<table border=1>
				<tr>
					<td>Name</td>
					<td><input type="text" name="stu-name" placeholder="Name"></td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td><input type="text" name="stu-telephone" placeholder="Telephone"></td>
				</tr>
				<tr>
					<td>Student ID</td>
					<td><input type="text" name="stu-id" placeholder="Student ID" ></td>
				</tr>
				<tr>
					<td>Course</td>
					<td>
						<select name="stu-course">
							<option>Java</option>
							<option>Visual Basic</option>
							<option>Database</option>
							<option>Software Engineering</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Sex</td>
					<td>
						<input type="radio" name="stu-sex" value="Male">Male
						<input type="radio" name="stu-sex" value="Female">Female
					</td>
				</tr>
				<tr>
					<td>Hobbies</td>
					<td>
						<input type="checkbox" name="stu-hobbies" value="Swimming" check>Swimming
						<input type="checkbox" name="stu-hobbies" value="Cricket" check>Cricket
						<input type="checkbox" name="stu-hobbies" value="Rugby" check>Rugby
						<input type="checkbox" name="stu-hobbies" value="Football" check>Football
					</td>
				</tr>
			</table>
			<br>
				<input type=submit>
			</form>
				
			<?php
				echo "<hr><font size=5>";
				echo"</font><br>Add Other Funcions here....";
			?>
		</body>
	</html>
				
				
				
						
					
						
						
