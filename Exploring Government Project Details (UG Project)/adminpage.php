<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            gap:270px;
            justify-content:center;
            background-color:rgb(232, 190, 235);
        }
        .box{
         height:270px;
         width:300px;
         border:solid 3px black;
         position:relative;
         top:110px;
         background-color:white;
         overflow:hidden;
         display:flex;
         flex-direction:column;
         border-radius:15px;
         transition:2s;
        }
        .box b{
            color:rgb(42,115,161);
            text-align:center;
            position:relative;
            top:30px;
            font-family:Arial;
        }
        .box hr{
            position:relative;
            bottom:38px;
        }
        .box p{
            position:relative;
            bottom:27px;
        } 
        a{
            color:blue;
            text-decoration:none;
        }
        #box1:hover{
           height:380px;
           transition:0.3s  all;
           
        }
        #edit{
            position:relative;
            top:60px;
        }
         .boxes{
            position:relative;
            right:75px;
            display:flex;
            flex-direction:row;
            gap:8rem;

         }
         #update{
            position:relative;
            left:87px;
            top:25px;
         }
         .box a{
            text-decoration:none;
            color:rgb(75,132,180);
         }
         #getproj{
            position:relative;
            top:95px;
         }
         #box2:hover{
           height:350px;
           transition:0.3s all;
         }
    </style>
</head>
<body>
    <div class="boxes">
    <a href="updateproject.php"><div class="box" id="box1"><img src="updateimage.jpg" width=300 height="200"><b id="update">Update Projects</b></a><b id="edit"><a href="viewedit.php" >Edit Status</a></b><b id="getproj"><a href="yearonly.php">Get Reports</a></b></div>
    <a href="Viewcom.php"><div class="box" id="box2"><img src="complaint.jpg" width=300><b><hr><p>View Complaints</p></b></a><b><a href="cyearonly.php">Get Reports</a></b></div>
    </div>
</body>
</html>