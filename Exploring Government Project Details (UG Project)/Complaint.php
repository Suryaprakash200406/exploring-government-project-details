<!DOCTYPE html>
<html>
    <head>
        <title>Complaint Here</title>
        <style>
            body{
            background-color:#edfbff;
            margin:0;
            display:grid;
            place-content: center;
            }
           .box{
            height:820px;
            width:420px;
            background-color: #ad00d8;
            border-radius:20px;
            border: 4px solid rgb(255, 0, 212);
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            gap:20px;
            padding:8px;
            position:relative;
            top:40px;
            margin-left:27%;
           }
           .inbox{
            height:40px;
            width:250px;
            border-radius:10px;
            border:1px solid black;
           }
           .box h2{
            font-family:Poppins, sans-serif;
            font-weight: 600;
            font-size:40px;
            color:rgb(255, 255, 255);
            margin-bottom:50px;
           }
           .complebox{
            height:50px;
            width:250px;
            border: 1px solid black;
            border-radius:10px;
           }
           .butcom{
            background-color: #005214;
            height:43px;
            width:210px;
            border-radius:10px;
            border:2px solid rgb(253, 255, 122);
            font-weight: bold;
            font-size:15px;
            color:#ffffff;
            margin-bottom:20px;
           }
           .butcom:hover{
            background-color: rgb(44, 150, 62);
            color:white;
           }
           label{
              margin-right: 70px;
              font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
              color:rgb(255, 239, 19);
              font-weight:550;
           }
           .box hr{
            height:3px;
            background-color: rgb(224, 207, 160);
            width:100%;
            margin-bottom:10px;
           }
           ul{
            position: relative;
            top:90px;
            right:-5%;
            margin-bottom:15%;
           }
           .Disclaimer{
            position:relative;
            right:3%;
            top:140px;
            color:red;
            font-family:Arial, Helvetica, sans-serif;
            font-weight: 550;
           }
           ul li{
            font-size: 15px;
            font-family:  'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
           }
           #choosedate{
            position:relative;
            right:11%;
           }
           #pid{
            position:relative;
            right:50px;
           }
        </style>
    </head>
    <body><form action="complaintphp.php" method="post" enctype="multipart/form-data"> 
        <div class="box">
              <h2>Complaint</h2><hr>
              <input type="text" class="inbox" placeholder=" &nbsp;Enter your name..." name="name">
              <input type="email" class="inbox" placeholder="&nbsp;Enter your E-mail..." name="email" required>
              <input type="number" class="inbox" placeholder="&nbsp;Aadhar number..." name="adhar" maxlength="14" required>
              <input type="number" class="inbox" placeholder="&nbsp;Mobile number..." name="mobile" required>
              <label for="date" id="choosedate">Choose date</label>
              <input type="date" class="inbox" name="date" id="date">
              <label for="projectid" id="pid">Project ID</label>
              <input type="text" id="project id" class="inbox" placeholder="&nbsp;Enter the Project ID..." name="Project_id"  required>
              <label for="complaint"> Explain Your complaint</label>
              <textarea id="complaint" name="complaint" cols="32" class="complebox" rows="5" placeholder="&nbsp;Explain Your Complaint here..."></textarea> 
              <input type="file" name="fname">
              <input type="submit" class="butcom" value="Register Complaint" name="upload"></input>
        </div></form>
       <!--  <p class="Disclaimer">Disclaimer:</p>
        <ul>
           <li> The Complaint you post should be valueable and genuine. Government may take appropriate action against to you if you make fake complaints.</li>
           <li>Your Complaint will be considered only if that have a proper evidence.</li>
        </ul> -->
        <p class="Disclaimer">Disclaimer:</p>
        <ul>
            <li>The Complaint you post should be valueable and genuine.  Government may take appropriate action against you if you make fake complaints.</li>
            <li>Your Complaint will be considered only if that have a proper evidence.</li>
        </ul>
    </body>
</html>