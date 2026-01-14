
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           height:100%;
           margin:0;
           display:flex;
           justify-content:center;
           align-items:center;
           padding-top:11%;
        }
        .box{
            height:300px;
            width:600px;
            background-color:rgb(230,230,230);
            margin:0 auto;
            padding-top:5%;
        }
         h2{
            color:green;
            font-family:"Lucida Console";
            font-weight:550;
            font-size:40px;
        } 
    </style>
</head>
<body>
<?php

//if(isset($_POST['upload']) && $_FILES['fname']['size']>0)
//{

$name=$_POST['name'];
$email=$_POST['email'];
$adhar=$_POST['adhar'];
$mobile=$_POST['mobile'];
$date=$_POST['date'];
$complaint=$_POST['complaint'];
$Project_id=$_POST['Project_id'];
/* echo "$Project_id"; */

/* echo "$complaint"; */

$fname = $_FILES['fname']['name'];

/*  echo "$fname"; */ 

$con = mysql_connect("localhost","root","");
mysql_select_db("testing",$con);


$query= "INSERT INTO comp2(name,email,adhar,mobile,date,complaint,fname,Project_id)". 
"VALUES('$name','$email','$adhar','$mobile','$date','$complaint','$fname','$Project_id')";

mysql_query($query) or die('Error, query failed');

/* echo "<br>File $filename uploaded<br>"; */
//}
?>
   <center> <div class="box"><h2>Complaint Registered Successfully</h2></div><center>
</body>
</html>
