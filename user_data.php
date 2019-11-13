<?php
$con=mysqli_connect("localhost","root","","sampledb");
session_start();
echo $_SESSION['uname'];
?>