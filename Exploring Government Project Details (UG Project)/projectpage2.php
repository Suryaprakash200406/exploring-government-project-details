
<!DOCTYPE html>
<html>

<head>
   <title>Project</title>
   <style>
      body {
         background-color: rgb(230, 255, 255);
      }
      .box {
         height: 230px;
         width: 700px;
         border: 2px solid rgb(117, 146, 142);
         background-color: white;
         border-radius: 20px;
      }

      .projects {
         margin-top: 55px;
         display: flex;
         flex-direction: column;
         align-items: center;
      }

      .box img {
         margin-right: 65%;
         margin-top: 40px;
      }

      .box h2 {
         font-size: 40px;
         color:black;
         font-family:Arial;
      }
  
   .text{
        position:relative;
        bottom:80%;
        left:10%; 
      }
      .box p{
      position: relative;
      top:60px;
      right:9%;
      color:rgb(139, 139, 139);
      }
      button{
         margin-left:53%;
         position:relative;
         top:23px;
         padding:10px;
         background-color:  rgb(62, 226, 255);;
         border-radius:15px;
         width:130px;
         color:white;
         font-family:Poppins, sans-serif;
         font-size:15px;
         font-weight: 550;
         border:rgb(0, 160, 223) solid 2px;
      }
      button:hover{
         background-color:rgb(0, 163, 204);
      }
      #butsearch{
         position:relative;
         top:20px;
      }
      .box .text b{
        color:black;
      }
      #location{
         position:relative;
         left:-30px;
         top:20px;
         font-family:Poppins,sans-serif;
         font-size:15px;
      }
      #searchbut{
         background-color:pink;
         color:black;
         height:40px;
         width:70px;
         border-radius:5px;
         position:relative;
         top:0px;
         right:200px;
      }
      form input{
           position:relative;
           left:400px;
           width:300px;
           height:30px;
           border-radius:15px;
           border:grey solid 2px;
      }
      #district
      {
         background-color:#ed0cb9;
         color:white;
         border:none;
         height:40px;
         width:150px;
         position:relative;
         right:250px;
         margin-right: 30px; /* Adjust margin to create spacing */
         border-radius:20px;
         font-weight:400;  
      }
      #district:hover{
      background-color:#fa55d3;
      border:purple solid 3px;
      }
      /* Responsive adjustments */
      @media (max-width: 768px) {
         #district {
            margin-right: 0; /* Remove right margin on smaller screens */
            width: auto; /* Allow button to adjust width based on content */
            display: block; /* Change display to block for full width */
            margin-bottom: 10px; /* Add some bottom margin for spacing */
         }
      }
      #sp{
         background-color:purple;
         color:white;
         height:40px;
         width:150px;
         border-radius:0px;
         border:blue;
         font-weight:400;
         border-radius:20px;
      }
      #sp:hover{
         border:pink solid 3px;
      }
      #buts{
         display:flex;
         flex-direction:row;
         margin-left:480px;
      }
   </style>
</head>

<body>
   <div id="buts">
   <a href="projectdistrict.php"><button id="district" >Select District</button></a>
   <a href="search.php"><button id="sp" >Search Project</button></a></div>
<!-- <form action="search.php" method="GET">
         <input type="text" name="project_id" placeholder="    Enter project id...">
         <button type="submit" id="searchbut">search</button>
</form>   -->
   <?php
     $con=mysql_connect("localhost","root","");
     mysql_select_db("testing",$con);


     $res = mysql_query("select * from updatepro2");
     while($row = mysql_fetch_array($res))
     {
      $Id= $row['Id'];
      $location = $row['location'];
   ?>

   <!-- <center>
      <div class="searchoption"><input class="search" type="search" placeholder="Enter project Name..."></div>
      <div class="searchoption"><input class="search" type="search" placeholder="Enter location..."></div>
      <div class="searchoption"><input class="search" type="search" placeholder="Enter starting date..."></div>
      <input type="submit" value="Search" id="butsearch">
   </center> -->

   <center>
      
      <div class="projects">
         <div class="box">
            <img src="<?php echo $row['prname'];?>" width="180" height="140" id="img1">
           <div class="text"><h2><b>Id:</b> <?php echo "$Id"; ?> </h2><div id="location"><p><b>Location:</b> <?php echo $location;?></p></div><a href='financeandabout.php?id=<?php echo $Id; ?>'><button>View</button></a></div>
      
      <?php
     }
     ?>
   </center>
</body>

</html>