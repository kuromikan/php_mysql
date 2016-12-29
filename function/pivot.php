<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 
	$sql = "SELECT `subject`,AVG(`score`)
FROM `score`
GROUP BY `subject`
";
    $result = mysql_query($sql) ;
	echo "轉換前各科平均<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}


	$sql = "SELECT 
AVG(case when `subject`='C' then `score` end)as 'C',
AVG(case when `subject`='database' then `score` end)as 'database'
FROM `score`
";
    $result = mysql_query($sql) ;
	echo "<br>轉換後各科平均<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}

?>