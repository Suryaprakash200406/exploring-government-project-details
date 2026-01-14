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
            background-color:green;
            border-radius:15px;
            border:10px solid orange;
        }

    </style>
</head>
<body>
    

<?php

$con = mysql_connect("localhost","root","");
mysql_select_db("testing", $con);

    $Project_id = $_POST['Project_id'];

    /* echo "$Project_id";  */
 
    $result=mysql_query("select * from comp2 where Project_id = '$Project_id'");

    if(mysql_num_rows($result) > 0 )
    {
        while($row=mysql_fetch_array($result))
        {
          ?>
            <center>
       <div class=""> <table border=1 width=80% cellpadding=5 cellspacing=1 class="table">
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
     </table></div><br></center>  
      <?php
        }
        
    }
    else{
        echo "<div id='box'><h1 style='color:white; font-family:Arial; display:grid; place-content:center; position:relative;
        top:78px; font-size:35px;'>No Complaints found on the Specified Project ID</h1></div>";
    }
?>

</body>
</html>