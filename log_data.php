<?php
$con=mysqli_connect("localhost","root","","sampledb");
$username=$_POST["name"];
$password=$_POST["pass"];
session_start();

$sql="SELECT * FROM tbl_login WHERE username = '$username' AND password = '$password'";
$e=mysqli_query($con,$sql);

if(mysqli_num_rows($e)>0)
{
while($row = mysqli_fetch_array($e))
	{
		if(($username=$row['username']) && ($password=$row['password']))
		{ 
			$_SESSION['uname']=$username;
            header("Location:user_interface.php");
           
		}
	}
}
else
{
    
header("Location:homesample.html");   
}
mysqli_close($con);
?>