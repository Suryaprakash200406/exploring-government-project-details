<?php

$Id=$_GET['id'];
$con = mysql_connect("localhost","root","");
mysql_select_db("testing",$con);

echo "$Id";
mysql_query("delete from updatepro2 where Id='$Id'") ;
echo "Deleted";

/* $link=mysqli_connect('localhost','root','','testing');
if(!$link){
    die('Connection error'.mysqli_connect_error());
}
$query="DELETE FROM updatepro2 WHERE Id=project2";
$result=mysqli_query_($link,$query);

if($result){
    echo "successfully Deleted";
}
else{
    echo "Not Deleted";
} */
?>