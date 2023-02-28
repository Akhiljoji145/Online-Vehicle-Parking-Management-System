<?php
include("../php/connection.php");
$sql1="select lot_code from lots where lot_status='OUT'";
$result=mysqli_query($conn,$sql1);

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
   background-color:black;
   color:white;
   }
   table
   {
    background-color:#348ff7;
    width:250px;
   }
   th
   {
    color:white;
   }
    </style>
    <script>
function validateForm() {
  // Get the form inputs
  var vehiName = document.forms['myForm']['vehi_name'].value;
  var vehiType = document.forms['myForm']['vehi_type'].value;
  var vehiNo = document.forms['myForm']['vehi_no'].value;
  var lotCode = document.forms['myForm']['lot_code'].value;
  var phNo = document.forms['myForm']['phno'].value;
  var date = document.forms['myForm']['date'].value;
  
  // Check if any field is empty
  if (vehiName == '' || vehiType == 'select one' || vehiNo == '' || lotCode == '' || phNo == '' || date == '') {
    alert('All fields must be filled out');
    return false;
  }
  
  // Check if phone number is valid
  if (!/^[0-9]{10}$/.test(phNo)) {
    alert('Invalid phone number');
    return false;
  }
  
  // If everything is fine, submit the form
  return true;
}
</script>

    
    </head>
    <body>
        <form name='myForm' action='../php/addvehiclecheck.php' method='POST'>
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
        <tr>
        <th><span>Vehicle no:</span></th>
        <td><input type='text' name='vehi_no' required></td>
        </tr>
        <tr><th><span>Lot no:<span></th>
        <td>
        <select name='lot_code' required>";
        while($row2=mysqli_fetch_assoc($result))
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
        <tr>
        <th><span>Date of arrival:</span></th>
        <td><input type="date" name="date" required></td>
        </tr>
        <tr>
        <td colspan="2"><input class="submit" type="submit" name="submit" onclick="return validateForm()"></td>
        </tr>
    </form>
   
    </body>
</html>';
?>