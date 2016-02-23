<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 
	$sql = "select * from `score` where `score`>60";
    $result = mysql_query($sql) ;
	echo "只列出分數>60的資料<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
		
	$sql = "select * from `score` where `score`>60 AND `score`<80";
    $result = mysql_query($sql) ;
	echo "只列出分數>60以及分數<80的資料<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
	
	$sql = "select * from `score` where `score`>60 AND `usr_id`='S201600002'";
    $result = mysql_query($sql) ;
	echo "只列出分數>60以及usr_idS201600002為的資料<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}	
?>