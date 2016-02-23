<?php
header("Content-Type:text/html; charset=utf-8");
$hostname_ttc_cable = "localhost";
$database_ttc_cable = "sample_db";
$username_ttc_cable = "root";
$password_ttc_cable = "1234";
$ttc_cable = mysql_pconnect($hostname_ttc_cable, $username_ttc_cable, $password_ttc_cable) or trigger_error(mysql_error(),E_USER_ERROR); 
if (!$ttc_cable)
	{
		die('無法連線: ' . mysql_error());
	}
mysql_query('SET NAMES UTF8');
if(!mysql_select_db($database_ttc_cable,$ttc_cable))
	{
		die("無法使用資料庫");
	}

?>