<?php

$firstname = $post['Fname'];
$lastname = $post['Lname'];
$date = $post['date'];
$time = $post['time'];


mysql_connect("localhost", 'root', 'prelim' ,'rent');
mysql_select_db(rent);
$sql = "SELECT * FROM `data`";
mysql_select_db(data):

if(submit)
	echo "please do come on time";
