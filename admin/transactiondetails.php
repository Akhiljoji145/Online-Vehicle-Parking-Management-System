<?php
include("../php/connection.php");
$sql="select * from transaction";
$result=mysqli_query($conn,$sql);
echo"
<html>
<head>
<style>
table{
	border-collapse:collapse;
	border:1px solid black;
}
th
{
    background-color:black;
    border-right:1px solid white;
    color:white;
}
td
{
    background-color:white;
    color:black;
}
</style>
<table border='1' align='center'>
<tr>
<th>transactionid</th>
<th>vehicle no</th>
<th>receipt no</th>
<th>time</th>
<th>date of trans</th>
<th>amount</th>
</tr>";

while($row=mysqli_fetch_row($result))
{
    echo"<tr>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    </tr>
    </table>";
}
?>

