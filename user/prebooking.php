<?php
include("../php/connection.php");
$sql1="select lot_code from lots where lot_status='OUT' AND type='pre'";
$result1=mysqli_query($conn,$sql1);

echo"<html>
    <head>
    <style>
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
        while($row2=mysqli_fetch_assoc($result1))
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
?>