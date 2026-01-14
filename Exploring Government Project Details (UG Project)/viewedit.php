<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("testing", $con);
$result=mysql_query("select * from updatepro2");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr td{
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
       <div class=""> <table border=1 width=80% cellpadding=5 cellspacing=1 class="table">
       <tr>
    <th bgcolor=skyblue>Id</th>
    <th bgcolor=skyblue>Name</th>
    <th bgcolor=skyblue>District</th>
    <th bgcolor=skyblue>Cost</th>
    <th bgcolor=skyblue>Status</th>
    <!-- <th bgcolor=skyblue>Delete</th> -->
    <th bgcolor=skyblue>Update Status</th>
    
     </tr>
      <tr>
        <?
      $Id=$row['Id'];
      ?>
      <td bgcolor=lightyellow><?php echo $row ["Id"];?></td>
      <td bgcolor=lightyellow><?php echo $row['name1'];?></td>
      <td bgcolor=lightyellow><?php echo $row ["location"];?></td>
      <td bgcolor=lightyellow><?php echo $row ["Budget_allocation"];?></td>
      <td bgcolor=lightyellow style="font-weight:bold;"><?php echo $row['Update_project'];?></td>
     <!--  <td bgcolor=lightyellow><a href="delete.php?id=<?php echo $Id; ?>">Delete</a></td> -->
      <td bgcolor=lightyellow><a href="edit.php?id=<?php echo $Id;?>">Update Status</a></td>
     </tr>
     </table></div><br></center>
    <?php
     }
     ?>      
</body>
</html>