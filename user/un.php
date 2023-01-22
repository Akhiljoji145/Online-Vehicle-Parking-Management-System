<?php
include('../php/connection.php');
if(isset($_POST['submit']))
 {
$vehi_no=$_POST['vehi_no'];
$sql="SELECT `vehi_no` FROM vehicles WHERE vehi_no='$vehi_no'";
$query=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($query))

{
	$_SESSION['vehi_no']=$result['vehi_no'];
	header("location:unwelcome.php");
}
}
?>