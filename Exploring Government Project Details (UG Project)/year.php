<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:rgb(11,66,0);
        }
        form{
            position:relative;
            left:32.5%;
            top:40px;
            display:flex;
            justify-content:center;
            flex-direction:column;
            gap:15px;
            height:300px;
            width:35%;
            background-color:skyblue;
            border:8px yellow solid;
            border-radius:15px;
            box-shadow: 0 0 5px yellow;
        }
        h1{
            color:orange;
            font-size:38px;
            font-family:Poppins, sans-serif;
            text-align:center;
        }
        form input[type=number]{
            width:210px;
            height:30px;
            border-radius:10px;
            border:black 3px solid;
            position:relative;
            left:25%;
            bottom:15px;
        }
        form input[type=submit]:hover{
            box-shadow: 0 0 15px lightyellow;
            transition:0.1s all;
            
        }
        form label{
            position:relative;
            left:25%;
            bottom:15px;
            font-size:20px;
            font-family:fantasy;
        }
        form input[type=submit]{
            height:40px;
            width:120px;
            padding:10px;
            color:white;
            background-color:green;
            box-shadow:0 0 5px black;
            border:;
            position:relative;
            left:37%;
            top:10px;
            border-radius:10px;
            font-weight:bold;
        }
    </style>
</head>

<body>
    <h1>Select Year and Month</h1>
    <form action="yearphp.php" method="post" >
        <label for="year">Year:</label>
        <input type="number" id="year" name="year" min="2000" max="2099" required>
        <label for="month">Month:</label>
        <input type="number" id="month" name="month" min="1" max="12" required>

        <input type="submit" value="Show Projects">
    </form>
</body>
</html>