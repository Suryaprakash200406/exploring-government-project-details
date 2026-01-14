<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:lightgreen;
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
            background-color:black;
            position:relative;
            top:50px;
            display:flex;
            flex-direction:column;
            gap:1rem;
            width:20%;
            left:38%;
            padding:25px;
        }
        label{
            color:white;
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
            top:120px;
            left:33%;
            display:flex;
            gap:5rem;
        }
        a{
            font-size:20px;
            color:navy;
        }
    </style>
</head>
<body>
    <h1>Enter the Year to find Projects</h1>
    <form action="yearonlyphp.php" method="post">

        <label for="year1">YEAR</label>
        <input type="number" id="year1" name="year1" min="2000" max="2030" required>

        <input type="submit" value="Show Projects">
    </form>
    <div id="link">
    <a href="year.php">Get Projects by Month</a>
    <a href="district.php">Get Projects by District</a></div>
</body>
</html>