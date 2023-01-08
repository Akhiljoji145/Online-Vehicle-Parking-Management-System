<?php
include("php/connection.php");
$username=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$vehi_no=$_POST['vehi_no'];
$sql="insert into users values('','$username','$age','$email','$vehi_no')";
$query=mysqli_query($conn,$sql);
if($query>0)
{
	echo'<script>alert("registered successfully")</script>';
}
else
{
    echo '<script>alert("entered password does not match")</script>';
}

?>