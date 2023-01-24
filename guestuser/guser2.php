<?php
session_start();
include("../php/connection.php");
$vehi_no=$_SESSION['vehi_no'];
$sql="SELECT * FROM  vehicles WHERE vehi_no='$vehi_no' AND status='IN' AND type='lot'";
$query=mysqli_query($conn,$sql);
$result1=mysqli_num_rows($query);
if($result1>0)
{
	echo"
	<html>
	<head>
	    <style>
	    table
	    {
	    	border:1px solid black;
	    	border-collapse:collapse;
	    }
	    .td
	    {
	    	
	    	background-color:black;
	    	color:white;
	    	border-right:white;
	    }

	    </style>
	    </head>
		<table align='center' border='1'>
		<tr class='td'>
		<td>vehicle name</td>
		<td>vehicle type</td>
		<td>vehicle no</td>
		<td>lot no</td>
		<td>contact no</td>
		<td>time of arrival</td>
		<td>date of arrival</td>

		</tr>";
		while($row=mysqli_fetch_array($query))
	{
        echo"<tr>
        
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td>$row[6]</td>
        <td>$row[7]</td>
        
        </tr>
		</table>";
}
}
?>