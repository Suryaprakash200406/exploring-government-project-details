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
            border:solid black 3px;
           }
            table th {
              color:white;
              font-family:Arial;
            }
            table td{
              text-align:center;
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
            <th bgcolor=purple>Budget allocation</th>
            <th bgcolor=purple>Maximum amount</th>
            <th bgcolor=purple>Final amount</th>
            <th bgcolor=purple>Contracter Name</th>
            <th bgcolor=purple>Contracter Address</th>
        </tr>
        <tr>
            <td bgcolor=lightyellow><?php echo $row["Budget_allocation"];?></td>
            <td bgcolor=lightyellow><?php echo $row["Maximum_amount"];?></td>
             <td bgcolor=lightyellow><?php echo $row["Final_amount"];?></td>
             <td bgcolor=lightyellow><?php echo $row["Contracter_name"];?></td>
             <td bgcolor=lightyellow><?php echo $row["Contracter_address"];?></td>
        </tr></table><br>
      </center>  
      <?php
    }
    ?>
</body>
</html>