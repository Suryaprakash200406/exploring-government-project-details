<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
            background-color:skyblue;
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
            background-color:green;
            border:8px yellow solid;
            border-radius:15px;
            box-shadow: 0 0 5px yellow;
        }
        h1{
            color:black;
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
            color:white;
        }
        form input[type=submit]{
            height:40px;
            width:135px;
            padding:10px;
            color:black;
            background-color:yellow;
            box-shadow:0 0 5px black;
            border:;
            position:relative;
            left:36%;
            top:10px;
            border-radius:10px;
            font-weight:bold;
        }
    </style>
</head>
<body>
  <h1>Select Year and Month to find Complaints</h1>
    <form action="cyearphp.php" method="post">
      <label for="year">Year</label>
      <input type="number" id="year" name="year" min="2000" max="2024" required>
      <label for="month">Month</label>
      <input type="number" id="month" name="month" min="1" max="12" required>
      
      <input type="submit" value="Show Complaints">
    </form>
</body>
</html>