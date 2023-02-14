<?php
session_start();
include("connection.php");
$vehi_no=$_SESSION['vehi_no'];
$type=$_SESSION['type'];
$time=$_POST['time'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$sql="SELECT * FROM  vehicles where vehi_no='$vehi_no'";
$query=mysqli_query($conn,$sql);
if($type=='pre')
{
    $sql1="UPDATE vehicles SET status='OUT' WHERE vehi_no='$vehi_no'";
    $sql2="UPDATE pre_lot SET vehi_no='',lot_status='OUT' WHERE vehi_no='$vehi_no'";
    $SQL="insert into transaction values('','$vehi_no','','$time','$date','$amount')";
    $query1=mysqli_query($conn,$sql1);
    $query2=mysqli_query($conn,$sql2);
    $query6=mysqli_query($conn,$SQL);
    
    if($query1==TRUE && $query2==TRUE && $query6==TRUE)
    {
        echo"updated";
    }
    else
    {
        echo"not updated";
    }
}
elseif($type=='lot')
{
    $sql3="UPDATE vehicles SET vehi_no='',status='OUT' WHERE vehi_no='$vehi_no'";
    $sql4="UPDATE lots SET vehi_no='',lot_status='OUT' WHERE vehi_no='$vehi_no'";
    $SQL1="insert into transaction values('','$vehi_no','','$time','$date','$amount')";
    $query3=mysqli_query($conn,$sql3);
    $query4=mysqli_query($conn,$sql4);
    $query5=mysqli_query($conn,$SQL1);
    if($query3==TRUE && $query4==TRUE && $query5==TRUE)
    {
        echo"updated";
    }
    else
    {
        echo"not updated";
    }
    }
    else
    {

    }
?>