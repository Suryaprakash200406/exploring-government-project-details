<?php
$Id=$_GET['id'];

?>
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
        form{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            position:relative;
            top:50px;
            height:450px;
            width:350px;
            border:solid black;
            padding-bottom:40px;
            left:37%;
            background-color:skyblue;
            border-radius:20px;
        }
        form input{
            width:65%;
            height:45px;
            border-radius:10px;
            border:2px solid black;
            box-shadow:5px black;
        }
        .sub{
            position:relative;
            top:40px;
            background-color:navy;
            color:white;
            font-size:16px;
        }
        .sub:hover{
            background-color:blue;
        }
        form label{
            font-family:Arial;
            font-size:20px;
            color:blue;
        }
    </style>
</head>
<body>
    <form name="r1" action="update.php" method="post">
        <label for="update1">Status</label>
     <input type="text" id="update1" value="" name="Update_project" ><br><br>
     <label for="Projectid">Project ID</label>
     <input id="Projectid" type="text" value='<?php echo "$Id";?>' name=Id >
     <input type="submit" value="submit" class="sub">    
    </form>
</body>
</html>
b