<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:bLACK;
            margin:0;
        }
        form{ 
           position:relative;
           top:100px;
           gap:10px;
           left:40px;
           height:110px;
           width:700px;
        }
        select{
            height:40px;
            width:250px;
            border-radius:10px;
            border:4px solid orange;
            background-color:black;
            color:white;
            position:relative;
            top:58px;
        }
        label{
            position:relative;
            top:64px;
            color:white;
            font-size:25px;
            font-family:fantasy;
        }
        label, select{
            position:relative;
            left:35%;
        }
        label{
        margin-right:30px;
        position:relative;
        right:30px;
        }
       /*  form input[type=submit]{
            position:relative;
            left:50px;
            top:58px;
            border-radius:10px;
            width: 120px;
            background-color:orange;
            color:black;
            padding-bottom:-10px;
            font-weight:550;
            height:-20px;

        } */
        input[type=submit]{
            position:relative;
            left: 39%;
            top: 58px;
            border:white 3px solid;
            border-radius:10px;
            background-color:orange; 
            color:black;
            font-weight:550;
            height:40px;
            width:120px;
        }
input[type=submit]:hover{
            box-shadow:0 0 12px white;
}
#hr1{
width:100%;
background-color:skyblue;
height:15px;
position:relative;
top:70px;
}
            #hr2{
            width:100%;
            background-color:skyblue; 
            height:15px;
            position:relative;
            top:195px;
            }
        </style>
<body>
<hr id="hr1">
    <form action="districtphp.php" method="post">

        <label for="location">Choose District :</label>
       <select id="location" name="location" required>
            <option value="Ariyalur">Ariyalur</option>
            <option value="Chengalpattu">Chengalpattu</option>
            <option value="Chennai">Chennai</option>
            <option value="Coimbatore">Coimbatore</option>
            <option value="Cuddalore">Cuddalore</option>
            <option value="Dharmapuri">Dharmapuri</option>
            <option value="Dindigul">Dindigul</option>
            <option value="Erode">Erode</option>
            <option value="Kallakurichi">Kallakurichi</option>
            <option value="Kanchipuram">Kanchipuram</option>
            <option value="Kanniyakumari">Kanniyakumari</option>
            <option value="Karur">Karur</option>
            <option value="Krishnagiri">Krishnagiri</option>
            <option value="Madurai">Madurai</option>
            <option value="Mayiladuthurai">Mayiladuthurai</option>
            <option value="Nagapattinam">Nagapattinam</option>
            <option value="Namakkal">Namakkal</option>
            <option value="Nilgiris">Nilgiris</option>
            <option value="Perambalur">Perambalur</option>
            <option value="Pudukkottai">Pudukkottai</option>
            <option value="Ramanathapuram">Ramanathapuram</option>
            <option value="Ranipet">Ranipet</option>
            <option value="Salem">Salem</option>
            <option value="Sivagangai">Sivagangai</option>
            <option value="Tenkasi">Tenkasi</option>
            <option value="Thanjavur">Thanjavur</option>
            <option value="Theni">Theni</option>
            <option value="Thoothukudi">Thoothukudi</option>
            <option value="Tiruchirappalli">Tiruchirappalli</option>
            <option value="Tirunelveli">Tirunelveli</option>
            <option value="Tirupathur">Tirupathur</option>
            <option value="Tiruppur">Tiruppur</option>
            <option value="Tiruvallur">Tiruvallur</option>
            <option value="Tiruvannamalai">Tiruvannamalai</option>
            <option value="Tiruvarur">Tiruvarur</option>
            <option value="Vellore">Vellore</option>
            <option value="Viluppuram">Viluppuram</option>
            <option value="Virudhunagar">Virudhunagar</option>
        </select>
 
<!--  <input id="location" type="text" name="location" required> -->

        <input type="submit" value="Show Projects">
    </form>
    <hr id="hr2">
</body>
</html>