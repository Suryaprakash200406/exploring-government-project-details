<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            display:grid;
            place-content:center;
            background-color:black;
        }
        form{
            position:relative;
            top:130px;
            height:200px;
            width:700px;
            border:green 8px solid;
            gap:50px;
            background-color:rgb(197,250,239);
            border-radius:10px;
            display:grid;
            place-content:center;
            padding-bottom:20px;
        }
        input[type=text]{
            background-color:wite;
            position:relative;
            bottom:5px;
            border:5px solid black;
            height:30px;
            width:200px;
            border-radius:10px;
        }
        label{
            font-family:Arial;
            font-size:23px;
            font-weight:550;
            position:relative;
            top:30px;
        }
        input[type=submit]{
            background-color:orange;
            color:black;
            font-weight:550;
            font-family:sans-serif;
            border-radius:5px;
            height:30px;
            width:170px;
            position:relative;
            left:20px;
            bottom:10px;
        }
</style>
</head>
<body>
    <form action="cidphp.php" method="post">
        <label for="Project_id">Project id:</label>
        <input type="text" name="Project_id" id="Project_id" required>

        <input type="submit" value="Show Complaints">
    </form>
</body>
</html>