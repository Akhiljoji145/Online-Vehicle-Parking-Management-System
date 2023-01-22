<?php
session_start();

include('../php/connection.php');

if (strlen($_SESSION['email']==0 && $_SESSION['user_id']==0  )) {
  header('location:../home.html');
} 

  else{?>
<html>
    <head>
      <style>
		  .grid
		  {
			  display: grid;
			  grid-template-areas: 'header header header header header header'
        'link link link link link link'
				                   'menu menu main main main main';
		  }
		  .menu
		  {
			  grid-area: menu;
			  border:1px solid black;
			  
		  }
		  .main{
			  grid-area: main;
			  border:1px solid black;
			  width: 100%;
		  }
		  .header
		  {
			  grid-area: header;
			  border:1px solid black;
			  width:100%;
			  background-color: black;
      }
      .link
      {
        grid-area:link;
        border:1px solid black;
        width:100%;
      }
      
      ul 
      {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    li
    {
    padding-top:10px;
    padding-bottom:10px;
    font-size: 18px;
  }
    nav
    {
      border:1px solid black;
      width:200px;
      height:545px;
      float:left;
    }
        iframe
        {
          height:545px;
          width:1105px;
          float:left;
          border:1px solid black;
        }
        a
        {
          text-decoration:none;

        }
        a:hover
        {
          text-decoration:underline;
        }
		img
		  {
			 float:left;
		  }
		  h1
		  {
			 float:left;
			 color:white;
			 padding-left: 20px;
		  }
		  hr
      {
          border:1px solid black;
      }
		  .ul 
      {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        height:60px;
        background-color:darkslategray;
                
        }
        .left
        {
          display: block;
          padding: 8px;
          float:left;
          font-size:20px;
          color:white; 
        }
        .left:hover
            {
                text-decoration:underline;
                background-color: #1EA703;
            }
            .li
            {
              display: inline-block;
            }
            .right
            {
              display: block;
              padding: 8px;
              float:right; right;
              font-size:20px;
              color:white; 
            }
            .right:hover
            {
              text-decoration:underline;
              background-color: #1EA703;
            }

     
  </style>
  </head>
    <body>
      <div class="grid">
		<div class="header">
    <img src="../images/LOGO.png" height="100" width="100"/>
    <h1>User</h1>
    </div>
    <div class="link">
     <ul class="ul">
        <li class="li"><a class="left" href="#home">Home</a></li>
        <li class="li"><a class="left" href="#news">News</a></li>
        <li class="li"><a class="left" href="#contact">Contact</a></li>
        <li class="li right"><a class="right" href="../php/logout.php">logout</a></li>
      </ul>
    </div>
		<div class="menu">
        <ul>
         
          
          <li><a href="viewvehicle.php" target="frame4">View Vehicle</a></li>
          <hr>
          <li><a href="prebooking.php" target="frame4">PreBooking</a></li>
          <hr>
  </ul>
  </div>
  
  <iframe class="main" name="frame4"></iframe>
  </div>
  </body>
  </html>
<?php }
?>