<?php

$Fname = $_GET['firstname'];
$Lname = $_GET['lastname'];
$date = $_GET['date'];
$time = $_GET['time'];


mysql_connect("localhost",'root','');
mysql_select_db('rent');
$sql = mysql_query("SELECT * FROM `sked`");


echo "please do come on time";
?>
