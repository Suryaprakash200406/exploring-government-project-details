<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("testing",$con);
$result=mysql_query("select * from comp2");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:rgb(234, 213, 237);
        }
           table{
            background-color:rgb(230,237,242);
            border:rgb(105,14,94) 2px solid;
           }
        
    </style>
</head>
<body>
   
    <?php
    /* connected query alread written */
     while($row=mysql_fetch_array($result))
     {
      ?>
      <center>
       <div id=""> <table border=1 width=80% cellpadding=5 cellspacing=1 class="table">
       <tr>
    <th bgcolor=lightgreen>Name</th>
    <th bgcolor=lightgreen>email</th>
    <th bgcolor=lightgreen>adhar</th>
    <th bgcolor=lightgreen>mobile</th>
    <th bgcolor=lightgreen>Date</th>
    <th bgcolor=lightgreen>Project ID</th>
    <th bgcolor=lightgreen>complaint</th>
    <th bgcolor=lightgreen>Evidence</th>
   

     </tr>
     <?php
     $fname=$row['fname'];
     ?>
      <tr>
      <td bgcolor=lightyellow><?php echo $row ["name"];?></td>
      
      <td bgcolor=lightyellow><?php echo $row ["email"];?></td>
      <td bgcolor=lightyellow><?php echo $row ["adhar"];?></td>
      <td bgcolor=lightyellow><?php echo $row ["mobile"];?></td>
      <td bgcolor=lightyellow><?php echo $row ['date'];?></td>
      <td bgcolor=lightyellow><?php echo $row ['Project_id'];?></td>
      <td bgcolor=lightyellow><?php echo $row ["complaint"];?></td>
      <td bgcolor=lightyellow><a href="files/<?php echo $row['fname'];?>" target="new window">Evidence</a></td>
     </tr>
     
      </table><br><!-- <input  type="checkbox" value="Verified"></div><br></center> -->
    <?php
     }
     ?>   
</body>
</html>
