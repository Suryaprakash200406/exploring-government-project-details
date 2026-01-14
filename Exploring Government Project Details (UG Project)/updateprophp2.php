<?php
$id = $_GET['id'];

$con = mysql_connect("localhost","root","");
mysql_select_db("testing", $con);
$result=mysql_query("select * from updatepro2 where Id='$id'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
          border:solid black;
          border-radius:5px;
        }
        table th{
          font-family:Arial;
          color:white;
          background-color:green;
        }
        table td{
          text-align:center
        }
    </style>
</head>
<body>
    <?php
    while($row=mysql_fetch_array($result))
    {
        ?>
      <center>
        <table border=1 width=100% cellpadding=5 class="table">
        <tr>
            <th bgcolor=skyblue>Id</th>
            <th bgcolor=skyblue>Name</th>
            <th bgcolor=skyblue>District</th>
            <th bgcolor=skyblue>Address</th>
            <th bgcolor=skylblue>Cost</th>
            <th bgcolor=skyblue>Rules</th>
            <th bgcolor=skyblue>Starting date</th>
            <th bgcolor=skyblue>Finishing date</th>
            <th bgcolor=skyblue>Status</th>
      
           <!--  <th bgcolor=skyblue>Update</th>
            <th bgcolor=skyblue>Delete</th> -->
        </tr>
        <tr>
            <td bgcolor=lightyellow><?php echo $row["Id"];?></td>
            <td bgcolor=lightyellow><?php echo $row['name1'];?></td>
            <td bgcolor=lightyellow><?php echo $row["location"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Level_of_project"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Budget_allocation"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Rules"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Time_period"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Time_period1"];?></td>
            
            <td bgcolor=lightyellow><?php echo $row["Update_project"];?></td>
             <!--   <td bgcolor=lightyellow><?php echo $row["Delete_project"];?></td> -->
        </tr></table><br>
      </center>  
      <?php
    }
    ?>
</body>
</html>