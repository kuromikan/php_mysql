<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 
	$sql = "select * from `score`";
    $result = mysql_query($sql) ;
		while($row = mysql_fetch_row($result))
		{
			print_r($row);
			echo "<br>";
		}
?>