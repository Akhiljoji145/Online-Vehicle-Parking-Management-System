<?php
include("connection.php");
$query="select user_id,username,age,email from users";
$result=mysqli_query($conn,$query);
echo"<html>
<head>
<style>
table
{
	border:1px solid black;
	border-collapse:collapse;
}
th
{
	background-color:black;
	color:white;
	border-right:1px solid white;
}
td
{
   border-left:1px solid black;
   background-color:white;
}
</style>
</head>
<body>
<table align='center'>
<tr>
<th>user id</th>
<th>username</th>
<th>age</th>
<th>email</th>

</tr>";
while($row = mysqli_fetch_row($result))
{
   echo"<tr>
   <td>$row[0]</td>
   <td>$row[1]</td>
   <td>$row[2]</td>
   <td>$row[3]</td>
   </tr>";
}
echo"</table>
</body>
</html>";
?>