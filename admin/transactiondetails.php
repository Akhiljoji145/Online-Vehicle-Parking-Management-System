<?php
include("../php/connection.php");
$sql="select * from transaction";
$result=mysqli_query($conn,$sql);
echo"<table border='1'>
<tr>
<th>userid</th>
<th>vehicle no</th>
<th>receipt no</th>
<th>time</th>
<th>date of trans</th>
<th>amount</th>
</tr>";
while($row=mysqli_fetch_row($result))
{
echo"<tr>
<td>$row[1]</td>
<td>$row[2]</td>
<td>$row[3]</td>
<td>$row[4]</td>
<td>$row[5]</td>
<td>$row[6]</td>
</tr>";
}
echo"
</table>";
?>