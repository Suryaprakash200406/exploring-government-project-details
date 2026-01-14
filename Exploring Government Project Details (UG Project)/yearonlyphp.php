<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            background-color:black;
        }
        #box{
            position:relative;
            top:120px;
            left:125px;
            height:250px;
            width:80%;
            background-color:white;
            border-radius:15px;
            border:10px solid orange;
        }

       
    </style>
</head>
<body>
    

<?php

$con = mysql_connect("localhost","root","");
mysql_select_db("testing", $con);


if(isset($_POST['year1']))
{
    $year1 = $_POST['year1'];

   /* echo "$year1"; */
 
    $result=mysql_query("select * from updatepro2 where YEAR(Time_period) = $year1");

    if(mysql_num_rows($result) > 0 )
    {
        while($row=mysql_fetch_array($result))
        {
          ?>
           <center>
        <table border=1 width=100% cellpadding=5 class="table">
        <tr>
            <th bgcolor=skyblue>Id</th>
            <th bgcolor=skyblue>Location</th>
            <th bgcolor=skylblue>Cost</th>
            <th bgcolor=skyblue>Starting date</th>
            <th bgcolor=skyblue>Finishing date</th>
            <th bgcolor=skyblue>Status</th>
      

        </tr>
        <tr>
            <td bgcolor=lightyellow><?php echo $row["Id"];?></td>
            <td bgcolor=lightyellow><?php echo $row["location"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Budget_allocation"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Time_period"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Time_period1"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Update_project"];?></td>
        </tr></table><br>
      </center>  
      <?php
        }
    }
    else{
        echo "<div id='box'><h1 style='color:black; font-family:Arial; display:grid; place-content:center; position:relative;
        top:70px; font-size:40px;'>No Projects found on the Specified year</h1></div>";
    }
}
?>

</body>
</html>