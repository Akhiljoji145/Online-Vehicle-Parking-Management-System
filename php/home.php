<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
  {
    $vehi_no=$_POST['vehi_no']; 
    $sql="SELECT `user_id`, `username` , `email`, `vehi_no` FROM `users` WHERE vehi_no='$vehi_no'";
    $query=mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query);
    if($result>0){
		$_SESSION['email']=$result['email'];
    $_SESSION['user_id']=$result['user_id'];
		$_SESSION['vehi_no']=$result['vehi_no'];
		$_SESSION['username']=$result['username'];
      header("location:../user/welcome.php");
    }
    elseif (!$result>0) 
    {
       
       $sql1="SELECT * FROM  vehicles WHERE vehi_no='$vehi_no'";
       $query1=mysqli_query($conn,$sql1);
       $result1=mysqli_fetch_assoc($query1);
       $result2=mysqli_num_rows($query1);
       if($result2>0)
       {
         $_SESSION['vehi_no']=$result1['vehi_no'];
         header("location:../guestuser/gwelcome.html");
        }
        else
        {

        }
    }
    else
    {
    echo'<script>alert("login not successfull")</script>';
    }
    } 
?>