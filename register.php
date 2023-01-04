<?php
include("php/connection.php");
$username=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$vehi_no=$_POST['vehi_no'];
$password=$_POST['pass'];
$chpassword=$_POST['password'];
if($password==$chpassword)
{
    $sql="insert into users values('','$username','$age','$email','$vehi_no','$password')";
    $query=mysqli_query($conn,$sql);
	if($query>0)
	{
		echo'<script>alert("registered successfully")</script>';
	}
	else
	{
		echo '<script>alert("entered password does not match")</script>';
	}
}
?>