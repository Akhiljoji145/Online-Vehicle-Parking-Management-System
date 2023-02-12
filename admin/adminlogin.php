<?php
include('../php/connection.php');
$username=$_POST['name'];
$password=$_POST['pass'];
$sql="SELECT ad_name,ad_password FROM admin WHERE ad_name='$username' AND ad_password='$password'";
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_array($query);
if($result>0)
{
	header("location:admin.html");
}
else
{
echo'<script>alert("login not successfully");window.location.href="adminlogin.html"</script>';
}
?>