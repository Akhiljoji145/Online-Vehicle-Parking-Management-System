<?php
session_start();

include('../php/connection.php');

if (strlen($_SESSION['email']==0 && $_SESSION['user_id']==0  )) {
  header('location:../home.php');
} 

  else{?>
<html>
    <head>
      <style>
		  .grid
		  {
			  display: grid;
			  grid-template-areas: 'header header header header header header'
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
        ul {
    list-style-type: none;
    margin: 0;
    padding:10 10 10 10;
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
		  .right{
			  float:right;
		  }
         </style>
  </head>
    <body>
      <div class="grid">
		<div class="header"> 
			<img src="../images/LOGO.png" height="100" width="100"/><h1>Hi,<?php echo $_SESSION['username']?></h1>
			<a class="right" href="../php/logout.php">Logout</a>
		</div>
		<div class="menu">
        <ul>
          <li>User Id : <?php echo $_SESSION['user_id'] ?></li>
          <hr>
          <li><a href="viewvehicle.php" target="frame4">View Vehicle</a></li>
          <hr>
  </ul>
  </div>
  
  <iframe class="main" name="frame4"></iframe>
  </div>
  </body>
  </html>
<?php }
?>