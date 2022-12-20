<?php
include('../php/connection.php');
$sql="select * from vehicles";
$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);
if($result > 0)
{
echo'
<table border="1">
<tr>

<td>vehi_name</td>
<td>vehi_type </td>
<td>vehi_no</td>
<td>lot_no</td> 
<td>user_id</td>
<td>contact_no</td>
<td>time_arr</td>
<td>date_arr</td>
<td>status</td></tr>';
while($row=mysqli_fetch_row($query))
{
echo"<tr>

<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
<td>$row[4]</td> 
<td>$row[5]</td>
<td>$row[6]</td>
<td>$row[7]</td>
<td>$row[8]</td>
<td>$row[9]</td>
 </tr>";
}
}



