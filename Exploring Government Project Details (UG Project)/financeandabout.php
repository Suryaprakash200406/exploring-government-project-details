<?php

$id = $_GET['id'];

?>


<!DOCTYPE html>
<html>
<head>
    <title>Details of a project</title>
    <style>
        body{
            margin:0;
            background-color:rgb(218, 243, 243);
            display: flex;
            flex-direction: row;
            justify-content: center;
            position:relative;
            top:110px;

            }
        .box{
            height: 430px;
            width: 430px;
            background-color:rgb(255, 255, 255);
            border-radius:15px;
            border:5px solid rgb(163, 221, 223);
            text-align:center;
            font-weight: 600;
            font-family: Poppins, sans-serif;
            font-size: 40px;
            padding-top: 10px;
            transition: all 0.5s;
            color:rgb(50, 108, 175);
        }
        .box:hover{
            background-color: rgb(255, 255, 255);
            height:450px;
            width:450px;
        }
        .box img :hover{
            height: 260px;
            width: 310px;;
        }
        #box1{
            margin-right: 65px;
        }
        #box2{
            margin-left: 65px;
        }
        .smallfont{
            font-size:15px;
            color:rgb(5, 0, 0);
            font-family:Poppins, sans-serif;
            padding-top:250px;
        }
        .fontsmall{
            color: grey;
            font-size:15px;
            padding-top: 70px;;
        }
        .box img{
            height:250px;
            width:300px;
            transition:all 0.5s;
        }
        .box  img:hover{
            height:260px;
            width:310px;
        }
        body a{
            text-decoration:none;
        }
    </style>
</head>
<body>
<a href='updateprophp.php?id=<?php echo $id; ?>'><div class="box" id="box1"> FINANCE<br><img src="financeimage.jpg" ><br><div class="fontsmall">Click to view the Finance details of the project</div></div></a>
<a href="updateprophp2.php?id=<?php echo $id;?>"><div class="box" id="box2">OTHERS<br><img src="projectdetailsimg.jpg" > <div class="fontsmall">Click  to view the Other details of the project</div></div></a>
</body>
</html>