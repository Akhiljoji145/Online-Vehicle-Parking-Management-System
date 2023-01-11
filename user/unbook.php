<?php
include('../php/connection.php');
session_start();
$vehi_no=$_SESSION['vehi_no'];
$sql="DELETE FROM vehicles WHERE vehi_no='$vehi_no'";
$sql2="UPDATE lots SET vehi_no='',lot_status='OUT' WHERE vehi_no='$vehi_no'";
$result=mysqli_query($conn,$sql);
$result2=mysqli_query($conn,$sql2);
if($result==TRUE && $result2==True)
{
	echo"unbooking done successfully";
}
?>