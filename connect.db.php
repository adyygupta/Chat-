<?php

 $db_host = 'localhost';
 $db_user = 'root';
 $db_pass = '';
 
 $db_name = 'chat';
 if($connection = mysql_connect($db_host, $db_user, $db_pass)){
	$feedback[] ='connected to database server...<br>';
    if($database = mysql_select_db($db_name, $connection)){
		$feedback[] = 'database has been selected..<br>';
	} else{
		$feedback[] = ' database is not found..<br>';
	}
 } else{
	 $feedback[] = 'unable to conect to MYSQL server..<br />';
 }
?>