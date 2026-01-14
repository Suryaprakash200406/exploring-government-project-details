<!DOCTYPE html>
<htm>
    <head>
        <title>
            Newlogin
        </title>
        <style>
             body{
                margin:0;
                background-image: url("newloginimage.jpg");
                font-family: Poppins, sans-serif;
                display: flex;
                justify-content: center;
                margin-top:51px;
             }
             .box{
                 height: 520px;
                 width: 340px;
                 border-radius: 10px;
                 border: 1px rgba(255, 255, 255,0.5);
                 box-shadow: 0 0 20px rgba(255, 255, 255,0.5);
                 backdrop-filter: blur(15px);
                 background: rgba(255,255,255,0.25);
                 display:flex;
                 flex-direction: column;
                 align-items: center;
                 justify-content: center;
                 gap:20px;
                 padding-bottom: 10px;
                 border: solid white 2px;
             }
             .inputs{
                 border-radius:8px;
                 width:230px;
                 height: 40px;
                 border:none;
             }
             h2{
                font-family: Poppins, sans-serif;
                font-size: 30px;
                color:white;
             }
             .loginbut{
                background:rgb(0, 80, 133);
                width:250px;
                height:40px;
                border-radius:8px;
                border: none;
                color: white;
                display: flex;
                justify-content: center;
                padding-bottom:5px;
                font-size:15px;
             }
             .loginbut:hover
             {
                background-color: rgb(2, 111, 161);
             }
              .check{
              font-size: 13px;
              display: flex;
              flex-direction:row;
             }
             .clearbut{
              margin-left:48px;
             }
             .checkbox{
              margin-right:40px;
             }
             .checkbox b{
                color:white;
                position:relative;
                bottom:1.5px;
                left:3px;
                font-weight:500;
             }
             input{
                padding-left:6px;
             }
             
        </style>
    </head>
    <body>
    <form name="login" action="newloginphp.php" method="post">
         <div class="box">
            <h2>Login</h2>
                 <input type="email" name="email" placeholder="Enter your email" class="inputs" required>
                 <input type="password" name="password" placeholder="Enter password" class="inputs" required>
                 <input type="number" name="id" placeholder="Enter ID number" class="inputs" required>
                 <div class="check">
                <div class="checkbox"><input  type="checkbox" name="i am not robot" required><b>I am not robot</b></div>  
                    <button class="clearbut" type="reset">Clear</button> 
                </div>
                    <input type="submit" class="loginbut" value="Login">
           
         </div> </form>
    </body>
</ht