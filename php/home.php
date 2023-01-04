<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
  {
    $vehi_no=$_POST['vehi_no']; 
    $sql="SELECT `user_id`, `username` , `email`, `vehi_no`, `password` FROM `users` WHERE vehi_no='$vehi_no'";
    $query=mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query);
    if($result>0){
		$_SESSION['email']=$result['email'];
        $_SESSION['user_id']=$result['user_id'];
		$_SESSION['vehi_no']=$result['vehi_no'];
		$_SESSION['username']=$result['username'];
      header("location:../user/welcome.php");
		
    }

    else
    {
    echo'<script>alert("login not successfull")</script>';
    }
    
    
    
} 
?>