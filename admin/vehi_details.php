<?php
include('../php/connection.php');
$sql="select  `vehi_name`, `vehi_type`, `vehi_no`, `lot_no`, `contact_no`, `time_arr`, `date_arr`, `status` from vehicles";
$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);
if($result > 0)
{
echo'
<table border="1">
<tr>

<th>vehi_name</th>
<th>vehi_type </th>
<th>vehi_no</th>
<th>lot_no</th> 
<th>contact_no</th>
<th>time_arr</th>
<th>date_arr</th>
<th>status</th>
';
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

<td><a href='transaction.html'><button>view</button></td></tr>";
}
}



