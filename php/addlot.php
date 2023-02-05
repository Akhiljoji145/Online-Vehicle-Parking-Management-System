<?php
include("connection.php");
$lot_code=$_POST['lot_code'];
$sql="select lots.lot_code,pre_lot.lot_code from lots,pre_lot where lots.lot_code=pre_lot.lot_code";
$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);
if($result==0)
{
if($lot_code=="lot")
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
	$sql2="insert into pre_lot values ('','$lot_code','','OUT')";
	if(preg_match("/^AS00.*$/", $lot_code))
	{
		$query1=mysqli_query($conn,$sql2);
		echo'<script>alert("inserted successfully")</script>';

	}
	else 
	{
		echo'<script>alert("Enter code starting with AS00")</script>';
	}
}
}
else
{
   echo'<script>alert("already inserted")</script>';
}
?>
