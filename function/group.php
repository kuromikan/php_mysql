<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 
	$sql = "select `subject`,avg(`score`),max(`score`),min(`score`),count(*) from `score` group by `subject`";
    $result = mysql_query($sql) ;
	echo "列出各科目平均、最高、最低、筆數<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
		
	$sql = "select `usr_id`,avg(`score`),max(`score`),min(`score`),count(*) from `score` group by `usr_id`";
    $result = mysql_query($sql) ;
	echo "列出各成員平均、最高、最低、筆數<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
	
	
?>