<!DOCTYPE html>
<html>
<head><title>Registration</title></head>
<body background="regimage.jfif">
<form action="reg_data.php" method="POST" enctype="multipart/form-data">
	<fieldset style="Background-color:MediumSeaGreen">
		<legend ><h1 style="Color:white">REGISTRATION</h1></legend>
		<br>
		<table colspace="10">
			<tr>
			<td>Name</td>
			<td><input type="text" required name="n1" required></td>
			</tr>
			<tr><td>Addresss</td>
			<td><textarea rows="4" cols="16" name="n2" required> </textarea></td>
			
			</tr>
			<tr>
			<td>Gender</td>
			<td><input type="radio" name="Gender" value="male" >Male
			<input type="radio" name="Gender" value="female">Female
			</td>
			</tr>
			<tr>
			<td>Course</td>
			<td><select name="drop_down">
				<option value="MCA" selected>MCA</option>
				<option value="CS">CS</option>
				<option value="EEE">EEE</option>
				<option value="EC">EC</option></select></td>
			</tr>
			<tr>
			<td>Email</td>
			<td><input type="email" name="emailaddres" required></td>
			</tr>
			<tr>
			<td>Userid</td>
			<td><input type="text" name="username" required></td>
			</tr>
			<tr>
			<td>Password</td>
			<td><input type="password" name="password" required></td>
			</tr>
			<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="password" required></td>
			</tr>
			<tr>
			<td>Upload image</td>
			<td><input type="file"  Value="Browse" name="img">
			</tr>
			<tr>
			<td><input type="checkbox" required>Accept Terms And Conditions</td>
			</tr>
			<tr><td> </td></tr>
			<tr>
			<td><input type="Submit" name="sub" Value="Submit">
			<input type="reset"></td>
			</tr>
			
		</table>
		
</fieldset>
</form>
</body>
</html>
			