<?php
include("connection.php");
$lot_code=$_POST['lot_code'];
$lot_type=$_POST['type'];
if($lot_type=='pre')
{
	$SQL="SELECT * FROM pre_lot WHERE lot_code='$lot_code'";
	$QUERY=mysqli_query($conn,$SQL);
	$RESULT=mysqli_num_rows($QUERY);
	if($RESULT==0)
	{
	$sql="insert into pre_lot values('','$lot_code','','OUT')";
	if(preg_match("/^PS[0-9]{4}$/", $lot_code))
	{
		$query1=mysqli_query($conn,$sql);
		echo'<script>alert("inserted successfully")</script>';

	}
	else 
	{
		echo'<script>alert("Enter code starting with PS00")</script>';
	}
}
else
{
	echo'<script>alert("already inserted")</script>';
}
}
elseif($lot_type=='lot')
{
	$SQL1="SELECT * FROM lots WHERE lot_code='$lot_code'";
	$QUERY1=mysqli_query($conn,$SQL1);
	$RESULT1=mysqli_num_rows($QUERY1);
	if($RESULT1==0)
	{
	$sql1="insert into lots values('','$lot_code','','OUT')";
	if(preg_match("/^AS[0-9]{4}$/", $lot_code))
	{
		$query2=mysqli_query($conn,$sql1);
		echo'<script>alert("inserted successfully")</script>';

	}
	else 
	{
		echo'<script>alert("Enter code starting with AS00")</script>';
	}
}
else
{
	echo'<script>alert("already inserted");</script>';
}
}
else
{
	echo'<script>alert("not inserted successfully"); window.location.href="../admin/addloT.html</script>';
}

?>