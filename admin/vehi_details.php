<?php
include('../php/connection.php');
$sql="SELECT * FROM vehicles WHERE status='IN'";
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
</tr>
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

<td><a href='transactiondetails.html'><button>view</button></td></a></tr>";
}
}



