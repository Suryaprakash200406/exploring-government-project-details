<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details Update</title>
    <style>
    
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Project Details</h1>
        <form name="update"  action="updatepro.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Id:</label>
                <input id="name" type="text" name="Id" placeholder="Id number of the Project"><br><br> 
                <label for="name1">Name:</label>
                <input id="name1" type="text" name="name1" placeholder="Name of the project"><br><br>
                <label for="location">District:</label>
                <input id="location" type="text" name="location" placeholder="Location of the Project"><br><br><br>
                <label for="Level_of_project">Address:</label>
                <textarea id="Level_of_project" name="Level_of_project" placeholder="Enter Address"></textarea><br><br>
                <h2>FINANCE</h2><br>
                <label for="Budget allocation">Budget allocation:</label>
                <input type="text" id="Budget allocattion" name="Budget_allocation" placeholder="Enter budget allocation"><br><br>
                <label for="Maximum amount">Maximum amount:</label>
                <input type="text" id="Maximum amount" name="Maximum_amount" placeholder="Enter maximum amount"><br><br>
                <label for="Final amount">Final amount:</label>
                <input type="text" id="Final amount" name="Final_amount" placeholder="Enter final amount"><br><br>
                <label for="Contracter name">Contracter name:</label>
                <input type="text" id="Contracter name" name="Contracter_name" placeholder="Enter contracter name"><br><br>
                <label for="Contracter address">Contracter address:</label>
                <input type="text" id="Contracter address" name="Contracter_address" placeholder="Enter Contracter address"><br><br>
                
            </div>
            <div class="form-group">
                <h2>OTHERS</h2>
                <label for="Rules">Rules:</label>
                <textarea id="Rules" name="Rules" placeholder="Enter rules"></textarea><br><br>
                <label for="Time period">Starting date:</label>
                <input type="date" id="Time period" name="Time_period" placeholder="Enter starting date"></input><br><br>
                <label for="Time period1">Finishing date:</label>
                <input type="date" id="Time period1" name="Time_period1" placeholder="Enter finishing date"></input><br><br>
                
                <label for="update1">Status</label>
                <input id="update1" name="Update_project" placeholder=""><br><br>
                
                <input type="file" name="prname">
             
               <!--  <label for="delete1">Delete_project</label>
                <input id="delete2" name="Delete_project" placeholder=""></textarea><br><br> -->
            </div>
            <input type="submit" value="Update Details" name="upload"> 
        </form>
    </div>
</body>     
</html>
