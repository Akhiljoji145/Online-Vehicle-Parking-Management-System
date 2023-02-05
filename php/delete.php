<?php
include("connection.php");
$vehi_no=$_SESSION['vehi_no'];
$sql = "SELECT * FROM vehicles WHERE vehi_no='$vehi_no' AND type='pre'";
$query = mysqli_query($conn,$sql);
$result=mysqli_num_rows($query);

if ($result== 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
        $timestamp = $row['time_arr'];
        
        if (time() - $timestamp >= 7200) {
            
            $sql1= "DELETE FROM vehicles WHERE vehi_no='$vehi_no'";
            $query=mysqli_query($conn,$sql1);
            $sql2="UPDATE pre_lot SET vehi_no='',lot_status='OUT'";
            $query=mysqli_query($conn,$sql2);

        }
    }
} 
else {
    

}


?>