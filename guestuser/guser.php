<?php
include("../php/connection.php");
$vehi_no=$_POST['vehi_no'];
$sql="SELECT * FROM  vehicles WHERE vehi_no='$vehi_no' AND status='IN' AND type='lot'";
$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);
if($result>0)
{
	echo'<table align="center" border="1">
	<tr>
	<td>vehi_id</td>
	<td>vehi_name</td>
	<td>vehi_type</td>
	<td>vehi_no</td>
	<td>lot_no</td>
	<td>contact_no</td>
	<td>time of arrival</td>
	<td>date of arrival</td>
	<td>status</td>
	<td>type</td></tr>';
while($row=mysqli_fetch_row($query))
{
   echo"<tr>
   <td>$row[0]</td>
   <td>$row[1]</td>
   <td>$row[2]</td>
   <td>$row[3]</td>
   <td>$row[4]</td>
   <td>$row[5]</td>
   <td>$row[6]</td>
   <td>$row[7]</td>
   <td>$row[8]</td>
   <td>$row[9]</td>
   </tr>
   </table>";
   

}
}
?>