<!DOCTYPE html>
<html>
      <head>
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Government Project Details</title>
        <style>
              body{
                margin:0;
            }
           .navigation{
            background-color:rgb(194, 252, 232);
            position:relative;
            bottom:20px;
            height:70px ;
            width: 100%;
           }
           .naviletter{
            display:flex;
            flex-direction:row;
            justify-content:space-between;
            list-style-type: none;
            margin-left:65%;
            margin-right:48px;
            position:relative;
            top:40px;
           }
           .navigation .naviletter a{
            text-decoration:none;
            font-size:17px;
            font-weight: 550;
            color:black;
            font-family:Arial, Helvetica, sans-serif;
           }
           .navigation .naviletter a:hover{
            color:rgb(90, 92, 0);
            text-decoration:underline;
           }
           iframe{
            position:relative;
            bottom:20px;
            overflow:hidden;
            border:0;
           }
            #head {
            height:200px;
            width:100%;
            background:white;
        }   
        #head p{
            margin-left:15%;
            position:relative;
            color:rgb(0,170,43);
            font-size:36px; 
            bottom:130px;
            font-family:Poppins, sans-serif;
            font-weight: 550;
            top:-110px;
        }
        .loginlogo{
          position:relative;
          bottom:100%;
          margin-left:93%;
        }
       /*  #head b{
          position:relative;
          bottom:115%;
          margin-left:89%;
          font-size:20px;
          color:black;
        } */
        </style>
      </head>
      <body>
       <!-- <div class="logo">
        </div>-->
        <div id="head">
          <img style="margin-top:55px; margin-left:30px;" src="TamilNadu_Logo.svg" alt="image" height="90" width="90">
          <p>EXPLORING THE GOVERNMENT PROJECT DETAILS</p>
          <a href="newlogin.php"><!-- <b>Office</b> --><img class="loginlogo" src="signinimg.jpg" alt="image" height="65" width="65"></a>
        </div>
<div class="navigation">
    <ul class="naviletter">
        <li><a href="Newone.php" target="frame">Home</a></li>
        <li><a href="projectpage2.php" target="frame">Project</a></li>
        <li><a href="Complaint.php" target="frame">Complaint</a></li>
        <li><a href="About.php" target="frame">About</a></li>
    </ul>
</div>
<iframe src="Newone.php" name="frame" height="700" width="100%">

</iframe>
      </body>
</html>