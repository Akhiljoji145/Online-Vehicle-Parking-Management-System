<?php
session_start();
include("../php/connection.php");
$vehi_no=$_SESSION['vehi_no'];
$sql="SELECT * FROM vehicles WHERE vehi_no='$vehi_no'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
$_SESSION['type']=$row['type'];
echo"<html>
    <head>
        <style>
            table
            {
                background-color: black;
                color:white;
            }
        </style>
    </head>
    <body>
    <form action='../php/Transaction.php' method='POST'>
    <div class='form'>
    <table align='center'>
        <tr>
            <td>time of transfer:</td>
            <td><input type='time' name='time' required></td>
        </tr>
        <tr>
            <td>date of transfer:</td>
            <td><input type='date' name='date' required></td>
        </tr>
        <tr>
            <td>amount:</td>
            <td><input type='text' name='amount' required></td>
        </tr>
        <tr>
            <td ><input type='submit' name='submit'></td>
        </tr>
    </table>
    </form>
    </body>
</html>";
?>