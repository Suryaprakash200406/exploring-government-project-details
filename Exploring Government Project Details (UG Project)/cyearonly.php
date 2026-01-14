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
        label{
            color:black;
        }
        form,h1{
            display:grid;
            place-content:center;
            position:relative;
            top:50px;
        }
        h1{
            position:relative;
            top:20px;
            font-family:arial;
        }
        form{
            height:170px;
            width:300px;
            border:8px solid blue;
            border-radius:10px;
            background-color:lightgreen;
            position:relative;
            top:90px;
            display:flex;
            flex-direction:column;
            gap:1rem;
            width:20%;
            left:38%;
            padding:25px;
        }
        label{
            color:black;
            font-weight:550;
        }
        input[type=number]{
            height:40px;
            border-radius:10px;
            border:4px solid black;
        }
        input[type=submit]{
            width:130px;
            height:30px;
            background-color:brown;
            color:white;
            border-radius:10px;
            border:3px solid white;
            position:relative;
            top:15px;
            left:5px;
        }
        #link{
            position:relative;
            top:170px;
            left: 27%;
            display:flex;
            gap:10rem;
        }
        a{
            font-size:20px;
            color:white;
        }
    </style>
</head>
<body>
    <form action="cyearonlyphp.php" method="post">
        <label for="year1">Year</label>
        <input type="number" name="year1" id="year1" min="2000" max="2030" required>

        <input type="submit" value="Show Complaints">
    </form>
    <div id="link">
    <a href="cyear.php">Get  Complaints  by  Month</a>
    <a href="cid.php">Get  Complaints  by  Specific  Project ID</a>
</div>
</body>
</html>