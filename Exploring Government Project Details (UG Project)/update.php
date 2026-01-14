<?php

$Id=$_POST['Id'];
$con=mysql_connect("localhost","root","");
mysql_select_db("testing", $con);
$Update_project=$_POST['Update_project'];


/* echo "$Id";
echo "$Update_project"; */

mysql_query("update updatepro2 set Update_project='$Update_project' where Id='$Id'") ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:lightblue;
        }
        h1{
            display:grid;
            place-content:center;
            position:relative;
            top:250px;
            color:blue;
            font-size:45px;
        }
    </style>
</head>
<body>
<h1>Status updated successfully</h1>
</body>
</html>
