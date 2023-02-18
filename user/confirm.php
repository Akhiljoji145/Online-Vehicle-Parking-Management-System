<?php
include("../php/connection.php");
session_start();
$vehi_no=$_SESSION['vehi_no'];
$up="update vehicles set confirm='YES' where vehi_no='$vehi_no'";
$query=mysqli_query($conn,$up);
if($query==TRUE)
{
	echo'<script>alert("updated successfully")</script>';
}
else
{
	echo'<script>alert("not updated successfully")</script>';
}
?>