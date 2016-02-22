<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 
	$sql = "SHOW FULL COLUMNS from `score`";
    $result = mysql_query($sql) ;
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
?>