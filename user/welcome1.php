<?php
session_start();

include('../php/connection.php');
echo"
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
			  background-color:#fffb80;
		  }
      .menu a{
        color:blue;
        text-decoration:none;
        text-align:center;
        
      }
      .menu a:hover
      {
        color:red;
      }
      .menu li
      {
        text-align:center;
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
          background-image:url('../images/background1.jpg');
          background-size:100% 100%;
      
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
            marquee
            {
              background-color:darkgreen;
              font-size:24px;
              color:white
            }
            

     
  </style>
  </head>
    <body>
      <div class='grid'>
		<div class='header'>
    <img src='../images/logo1.jpg' height='100' width='100'/>
    <h1>User</h1>
    </div>
    <div class='link'>
     <ul class='ul'>
        <li class='li'><a class='left' href='../home.html'>Home</a></li>
        <li class='li'><a class='left' href='#news'>News</a></li>
        <li class='li'><a class='left' href='#contact'>Contact</a></li>
        <li class='li right'><a class='right' href='../php/logout.php'>logout</a></li>
      </ul>
      <marquee>If You Car Is Parked In Lot Then You Must Confirm It By Clicking The Confirm To Confirm It....</marquee>
    </div>
		<div class='menu'>
        <ul>
         
          
          <li><a href='viewvehicle.php' target='frame4'>View Vehicle</a></li>
          <hr>
          <li><a href='prebooking.php' target='frame4'>PreBooking</a></li>
          <hr>
  </ul>
  </div>
  
  <iframe class='main iframe' name='frame4'></iframe>
  </div>
  </body>
  </html>";

?>