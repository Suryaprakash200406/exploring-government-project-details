<!DOCTYPE html>
<html>
    <head>
        <title>About page</title>
        <style>
            body{
                margin:0;
                padding:0;
                display: flex;
                flex-direction:column;
            }
            .firstsection{
                background-image: url("headingimageabout.jpg");
                background-repeat:no-repeat;
                background-position:center;
                background-size:cover;
                filter:brightness(40%);
                height:420px;
                width:100%;

            }
            .secondsection{
                height:470px;
                width:100%;
                background-color: rgb(240,240,240);
                display:flex;
                flex-direction:row;
                gap:8rem;
                align-items: center;
                justify-content: center; 
            }
            .bottomspace{
                height:100px;
                width:100%;
                background-color:rgb(240,240,240);
                display:grid;
                place-content:center;
            }
            .picbox{
                height:350px;
                width:300px;
                background-color: white;
                border-radius:10px;
                margin-top:55px;   
                overflow:hidden;
                margin-bottom:50px; 
                box-shadow:0 0 15px rgba(0,0,0,0.8);  
            }
              button{
                height:45px;
                width:150px;
                background:rgb(3,125,235);
                color:white;
                border-radius:25px;
                font-size:16px;
                font-family:Arial,"sans-serif";
                border:2px solid rgb(0,238,215);
                box-shadow:0 0 6px rgb(14,205,250);
                transition:0.3s all;
                font-weight:550;
            }
            button:hover{
                background-color:rgb(10,151,166);
                height:50px;
                width:160px;
                font-size:17px;
            }
            #box1{
                border:4px solid rgb(171,171,171);
            }
            #box2{
                border:4px solid rgb(8,172,185);
            }
            #box3{
                border:4px solid rgb(183,253,255);  
            }     
            #box1:hover{
                position:relative;
                bottom:8px;
            }
            #box2:hover{
                position:relative;
                bottom:8px;
            }
            #box3:hover{
                position:relative;
                bottom:8px;
            }
            .picbox p{
                font-size:25px;
                font-family:'Lucida Console';
                font-weight:600;
                letter-spacing:2px;
                color:grey;
            }
            .middlesection{
                height:300px;
                width:100%;
            }
            .middlesection img{
                position:relative;
                bottom:275px;
                left:82%;
            }
            .middlesection b{
                display:flex;
                justify-content:center;
                font-size:85px;
                font-family:"Curlz MT ", cursive;
                font-weight:550;
                position:relative;
                top:-100px;
                right:30px;
                color:rgb(136,158,179);
            }
            .middlesection :nth-child(1){
                color:white;
                font-family:'Lucida Console';
                font-size:40px;
                position:relative;
                bottom:100%;
                display:flex;
                justify-content:center;
                letter-spacing:1px;
                font-weight:540;
            }
            .secondsection a{
                text-decoration:none;
            }
            .middlesection :nth-child(2){
                position:relative;
                display:flex;
                justify-content:center;
                bottom:100%;
                color:white;
                font-family:'Poppins', sans-serif;
                font-size:17px;
            }
        </style>
    </head>
    <body>
        <div class="firstsection"></div>
        <div class="middlesection"><p>Join us as we build a stronger nation</p><p>Now you can create an innovative nation <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;together with your government</p>
        <b>Read this Please!</b><img src="aboutmiddleimg.jpg" alt="image" height="260" width="150"></div>
       <div class="boxsection"> <div class="secondsection">
           <a href="purpose.php"><div class="picbox" id="box1"><img src="purpose.jpg" alt="image" height="270" width="300"><center><p class="names">Purpose</p></center></div></a>
            <a href="use.php"><div class="picbox" id="box2"><img src="usesimage.jpg" alt="image" height="270" width="300"><center><p class="names">Uses</p></center></div></a>
            <a href="instructionpage.php"><div class="picbox" id="box3"><img src="instructionimg.jpg" alt="image" height="270" width="300"><center><p class="names"> Instructions</p></center></div></a>
        </div></div>
        <div class="bottomspace"><a href="Newone.php"><button>Go to Home</button></a></div>
     </body>
</html>