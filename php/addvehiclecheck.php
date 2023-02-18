<?php
session_start();
include("connection.php");
$vehi_name = $_POST['vehi_name'];
$vehi_type=$_POST['vehi_type'];
$vehi_no=$_POST['vehi_no'];
$lot_no=$_POST['lot_code'];

$phno=$_POST['phno'];
$arrtim=$_POST['time'];
$arrdate=$_POST['date'];
$sql="INSERT INTO `vehicles` VALUES ('','$vehi_name','$vehi_type','$vehi_no','$lot_no','$phno','$arrtim','$arrdate','IN','lot','YES')";
$query=mysqli_query($conn,$sql);
if($query==TRUE)
{
    echo"inserted successfully";
$sql1="UPDATE `lots` SET `lot_status`='IN',vehi_no='$vehi_no' WHERE lot_code='$lot_no'";
$query1=mysqli_query($conn,$sql1);
if($query1==TRUE)
{
    echo"updated successfully";
}
else
echo"not updated";
}
else
echo"not inserted successfully";
?>
