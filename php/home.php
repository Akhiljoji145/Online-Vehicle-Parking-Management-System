<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
  {
    $emailcon=$_POST['email'];
    $password=$_POST['pass'];
    $sql="SELECT `user_id`,`username`,`email`, `password`, `id` FROM `users` WHERE email='$emailcon' AND password='$password'";
    $query=mysqli_query($conn,$sql);
    $result=mysqli_fetch_array($query);
    if($result>0 && $result['id']==1){
	  
      header("location:../admin/admin.html");
    }

    else if($result>0 && $result['id']==0){
		$_SESSION['email']=$result['email'];
        $_SESSION['user_id']=$result['user_id'];
		$_SESSION['username']=$result['username'];
		
      header("location:../user/welcome.php");
		
    }

    else
    {
    echo "not successfully";
    }
    
    
    
} 
?>