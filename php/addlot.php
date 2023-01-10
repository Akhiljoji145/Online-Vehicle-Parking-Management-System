<?php
include("connection.php");
$lot_code=$_POST['lot_code'];
$lot_type=$_POST['lot_type'];
if($lot_code=="")
{
	echo '<script>alert("ENTER LOT CODE STARTING WITH AS")</script>';
}
else if(preg_match("/^AS00.*$/", $lot_code))
{
$sql="insert into lots values ('','$lot_code','','OUT','$lot_type')";
$result=mysqli_query($conn,$sql);
if($result==TRUE)
{
    echo'<script>alert("inserted successfully")</script>';
}
else
{
echo'<script>alert("not inserted")</script>';
}
}
else
{
echo'<script>alert("ENTER LOT CODE STARTING WITH AS")</script>';	
}
?>