<?php
include("connection.php");
$vehi_no=$_POST['vehi_no'];
$time=$_POST['time'];
$date=$_POST['date'];
$amount=$_POST['amount'];
$sql="SELECT * FROM  vehicles where vehi_no='$vehi_no'";
$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);
$row=mysqli_fetch_assoc($query);
if($row['type']='pre')
{
    $sql1="UPDATE vehicles SET vehi_no='',status='OUT' WHERE vehi_no='$vehi_no'";
    $sql2="UPDATE pre_lot SET vehi_no='',lot_status='OUT' WHERE vehi_no='$vehi_no'";
    $query1=mysqli_query($conn,$sql1);
    $query2=mysqli_query($conn,$sql2);
    
    if($query1==TRUE && $query2==TRUE)
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
    $sql3="UPDATE vehicles SET vehi_no='',status='OUT' WHERE vehi_no='$vehi_no'";
    $sql4="UPDATE lots SET vehi_no='',lot_status='OUT' WHERE vehi_no='$vehi_no'";
    $query3=mysqli_query($conn,$sql3);
    $query4=mysqli_query($conn,$sql4);
    
    if($query3==TRUE && $query4==TRUE)
    {
        echo"updated";
    }
    else
    {
        echo"not updated";
    }
    }
?>