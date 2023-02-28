<html>
    <style>
        .padding-left
        {
            padding-left: 30px;
        }
        label{
            font-size: 20px;
        }
        form{
            
            width:100%;
        }
        .padding-left1
        {
          padding-left: 100px;
          
        }
        .padding-left2
        {
          padding-left: 30px;
        }
        .input
        {
            height:30px;
            width: 200px;
        }
        table
        {
            border:1px solid black;
            height:100px;
            width:700px;
            background-color: #348ff7;
        }
        input
        {
            height:30px;
            width:100px;
        }
        td
        {
            font-size: 20px;
        }
        .submit
        {
            width:250px;
            background-color: black;
            color:white;
            border-radius: 15px;
        }
        .submit:hover
        {
            background-color:green;
        }
    </style>
    <body>
        <form method="POST">
        <table align="center">
            <tr >
                <td >search:</td>
                <td >from:</td>
                <td><input type="date" name="fr_date"></td>
                <td>to:</td>
                <td><input type="date" name="to_date"></td>
                <td><input class="submit" type="submit" name="submit-search"></td>
            </tr>
        </table>
        </form>
        <div class="search-container">
        <?php
        include("../php/connection.php");
        if(isset($_POST['submit-search']))
        {
        	$date1=$_POST['fr_date'];
        	$date2=$_POST['to_date'];
        	$sql="SELECT * FROM `transaction` WHERE date_of_trans between '$date1' and '$date2'";
        	$result=mysqli_query($conn,$sql);
        	$queryResult=mysqli_num_rows($result);
            $sum=0;
        	if($queryResult > 0)
        	{
        		echo"
                <html>
                <head>
                <style>
                table
                {
                    border-collapse:collapse;
                }
                
                
                </style>
                </head>
                <table border='1' align='center'>
                <tr>
                <th>transactionid</th>
                <th>vehicle no</th>
                <th>receipt no</th>
                <th>time</th>
                <th>date of transaction</th>
                <th>amount</th>
                </tr>";
                while($row=mysqli_fetch_row($result))
                {
                 echo"<tr>
                 <td>$row[0]</td>
                 <td>$row[1]</td>
                 <td>$row[2]</td>
                 <td>$row[3]</td>
                 <td>$row[4]</td>
                 <td>$row[5]</td>";
                $sum = $sum + $row[5];
                }

                echo"<tr>
                <td colspan='5' align='right'>Total Amount: </td>
                <td>$sum</td>
                </tr>
                </table>";
        	}
        	else
        	{
        		echo"<h2>there is no result between the dates that you have entered!</h2>";
        	}
        }
        ?>
        </div>
       
</body>
</html>