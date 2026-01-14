<?php
$con= mysql_connect("localhost","root","");
mysql_select_db("testing",$con);
$Id=$_POST['Id'];
$location=$_POST['location'];
mysql_query("select location from updatepro2 where ")
?>