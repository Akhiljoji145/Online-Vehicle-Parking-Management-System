<?php
session_start();
include("../php/connection.php");
$vehi_no=$_SESSION['vehi_no'];
$sql="select * from pre_lot where vehi_no='$vehi_no'";
$query=mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);
if(!$result>0)
{
 $sql1="select lot_code from pre_lot where lot_status='OUT'";
 $query1=mysqli_query($conn,$sql1);
 $result1=mysqli_num_rows($query1);
if($result1>0)
{
echo"<html>
    <head>
    <style>
    table
    {
      background-color:#01658a;
      width:300px;
    }
    tr
    {
     padding:10 40;
    }
   span
   {
   float:left;
   }
   th
   {
   width:116px;
   color:white;
   }
   .submit
   {
   height:20px;
   width:300px;
   }

    </style>   
    </head>
    <body>
        <form action='../php/prebooking.php' method='POST'>
        <table align='center' border='0' height='400px' width='400px'>
        <tr>
        <th><span>vehicle name:<span></th>
        <td><input type='input' name='vehi_name' required></td>
        </tr><br><br>
        <tr>
        <th><span>vehicle type:</span></th>
        <td>
        <select name='vehi_type' required>
        <option>select one</option>
        <option value='twowheeler'>Two Wheeler</option>
        <option value='fourwheeler'>Four Wheeler</option>
        </select>
        </td>
        </tr>
        
        <tr><th><span>Lot no:<span></th>
        <td>
        <select name='lot_code' required>";
        while($row2=mysqli_fetch_assoc($query1))
        {
         echo"<option>";
         print_r($row2['lot_code']);
         echo"</option>";
        }
        echo'</select></td>
        </tr>
        <tr>
        <th><span>Contact no:</span></th>
        <td><input type="text" name="phno" required></td>
        </tr>
        <tr>
        <th><span>Time of arrival:<span></th>
        <td><input type="time" name="time" required></td>
        </tr>
        <tr>
        <th><span>Date of arrival:</span></th>
        <td><input type="date" name="date" required></td>
        </tr>
        <tr>
        <td colspan="2"><input class="submit" type="submit" name="submit"></td>
        </tr>
    </form>
   
    </body>
</html>';
}
else
{
    echo "<h4 style='color:white;'>No Empty Lots<h4>";
}
}
else
echo"the vehicle already in a lot";

?>