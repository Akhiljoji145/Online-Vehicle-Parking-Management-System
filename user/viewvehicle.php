<?php
session_start();

include('../php/connection.php');

if (strlen($_SESSION['email']==0 && $_SESSION['user_id']==0)) {
    header('location:../user/siginform.php');
} 
else{ 
$id=$_SESSION['user_id'];
$sql="SELECT users.username,vehicles.* FROM users , vehicles WHERE users.user_id='$id' AND vehicles.user_id='$id' AND status='IN'";
$result=mysqli_query($conn,$sql);

if($result==TRUE)
{
echo"
<html>
<head>
<style>
table
{
border-collapse:collapse;
border:1px solid black
}
th
{
background-color:black;
color:white;
}
.border
{
border-right:white;
}

</style>
</head>
<body>
<table border='1' align='center'>
<tr class='border'>
<th>username</th>
<th>vehicle name</th>
<th>vehicle type</th>
<th>vehicle no</th>
<th>lot no</th>

<th>contact no</th>
<th>time of arr</th>
<th>date of arr</th>
<th>status</th>
</tr>
";
while($row = mysqli_fetch_row($result))
{
    echo"<tr>
    <td>$row[0]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
    <td>$row[5]</td>
    <td>$row[7]</td>
    <td>$row[8]</td>
    <td>$row[9]</td>
    <td>$row[10]</td>
    </tr>
   ";
    
}
echo"
</table>
</body>
</html>";
}
else {
echo"NO";
}
}
?>