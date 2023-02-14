<?php
session_start();
include("connection.php");
$vehi_name = $_POST['vehi_name'];
$vehi_type=$_POST['vehi_type'];
$vehi_no=$_SESSION['vehi_no'];
$lot_no=$_POST['lot_code'];
$phno=$_POST['phno'];
$arrtim=$_POST['time'];
$sql="INSERT INTO `vehicles` VALUES ('','$vehi_name','$vehi_type','$vehi_no','$lot_no','$phno','$arrtim','IN','pre')";
$query=mysqli_query($conn,$sql);
if($query==TRUE)
{
    echo"<p style='color:white'>inserted successfully</p>";
$sql1="UPDATE `pre_lot` SET `lot_status`='IN',vehi_no='$vehi_no' WHERE lot_code='$lot_no'";
$query1=mysqli_query($conn,$sql1);
if($query1==TRUE)
{
    echo"<p style='color:white'>updated successfully<p>";
}
else
echo"<p style='color:white'>not updated</p>";
}
else
{
echo"<p style='color:white'>not inserted successfully";
}


?>