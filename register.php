<?php
include("php/connection.php");
$username=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$vehi_no=$_POST['vehi_no'];
$sql1="select * from users where vehi_no='$vehi_no'";
$query1=mysqli_query($conn,$sql1);
$result=mysqli_num_rows($query1);
if($result<0)
{
	$sql="insert into users values('','$username','$age','$email','$vehi_no')";
    $query=mysqli_query($conn,$sql);
	echo'<script>alert("registered successfully")</script>';
}
else
{
    echo '<script>alert("already registered"); window.location.href="register.html"</script>';
}

?>