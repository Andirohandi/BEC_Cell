<?php
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "test";
	
	$con = mysql_connect($host,$user,$pass);
	mysql_select_db($db,$con);

?>