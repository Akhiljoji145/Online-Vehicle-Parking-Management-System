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
        }
        input
        {
            height:20px;
            width:100px;
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
                <td><input type="submit" name="submit-search"></td>
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
        	if($queryResult > 0)
        	{
        		echo"<table border='1'>
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
                 <td>$row[5]</td>
                 
                 </tr>";
                }
                echo"</table>";
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