<?php 
$email=$_POST["email"];
$password=$_POST["password"];
$id=$_POST["id"];
/* echo "$email $password $id"; */
if($email=="prakashsurya8723@gmail.com"&&$password=="12345678"&&$id=="87654321")
{
  ?>
    <script>
        alert("Press 'OK' to Continue");
        window.location="adminpage.php";
    </script>
    <?
}
else{
    ?>
    <script> 
    alert("Incorrect email or password or id number");
    window.location="newlogin.php";
    </script>
    <?
}
?>