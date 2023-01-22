<?php
include("connection.php");
$lot_code=$_POST['lot_code'];
$lot_type=$_POST['lot_type'];
error_reporting(0);
$sql="select lot_code,type from lots where lot_code='$lot_code' and type='$lot_type'";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query))
{
	$lot=$row['lot_code'];
	$type=$row['type'];
}
if($lot_code!=$lot && $lot_type!=$type)
{
	$sql1="insert into lots values ('','$lot_code','','OUT','$lot_type')";
	if(preg_match("/^AS00.*$/", $lot_code))
	{
		$query1=mysqli_query($conn,$sql1);
		echo'<script>alert("inserted successfully")</script>';

	}
	else 
	{
		echo'<script>alert("Enter code starting with AS00")</script>';
	}
}
else
{
 echo'<script>alert("already inserted")</script>';	
}
?>
