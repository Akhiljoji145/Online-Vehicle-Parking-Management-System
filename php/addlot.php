<?php
include("connection.php");
$lot_code=$_POST['lot_code'];
error_reporting(0);
$sql="select lot_code from lots where lot_code='$lot_code'";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query))
{
	$lot=$row['lot_code'];
	
}
if($lot_code!=$lot && $lot_type="pre")
{
	$sql1="insert into lots values ('','$lot_code','','OUT')";
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
