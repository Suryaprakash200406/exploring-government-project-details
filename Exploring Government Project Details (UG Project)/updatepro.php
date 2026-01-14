<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("testing",$con);

$Id=$_POST['Id'];
$name1=$_POST['name1'];
$location=$_POST['location'];
$Budget_allocation=$_POST['Budget_allocation'];
$Maximum_amount=$_POST['Maximum_amount'];
$Final_amount=$_POST['Final_amount'];
$Contracter_name=$_POST['Contracter_name'];
$Contracter_address=$_POST['Contracter_address'];
$Rules=$_POST['Rules'];
$Time_period=$_POST['Time_period'];
$Time_period1=$_POST['Time_period1'];
$Level_of_project=$_POST['Level_of_project'];
$Update_project=$_POST['Update_project'];
$Delete_project=$_POST['Delete_project'];

/* echo"$Level_of_project"; */

$prname = $_FILES['prname']['name'];

/* echo "$prname"; */

/* echo "$Id $location $Budget_allocation $Maximum_amount $Final_amount $Contracter_name $Contracter_address $Rules $Time_period $Time_period1 $Level_of_project $Update_project $Delete_project";  */

$query="INSERT INTO updatepro2(Id,name1,location,Budget_allocation,Maximum_amount,Final_amount,Contracter_name,Contracter_address,Rules,Time_period,Time_period1,Level_of_project,Update_project,Delete_project,prname)".
"VALUES('$Id','$name1','$location','$Budget_allocation','$Maximum_amount','$Final_amount','$Contracter_name','$Contracter_address','$Rules','$Time_period','$Time_period1','$Level_of_project','$Update_project','$Delete_project','$prname')";

mysql_query($query) or die('Error, query failed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            padding:0;
            background-color:skyblue;
            display:flex;
            justify-content:center;
            margin-top:10%;
        }
        .box{
            height:300px;
            width:500px;
            background-color:white;
            border-radius:20px;
            box-shadow:0 0 7px black;
        }
        .box h1{
            color:navy;
            font-family:arial;
            text-align:center;
            font-size:45px;
            position:relative;
            top:85px;
        }
    </style>
</head>
<body>
<div class="box"><h1>Project Updated</h1></div>
</body>
</html>