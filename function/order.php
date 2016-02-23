<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 
	$sql = "select * from `score` order by `score` ASC";
    $result = mysql_query($sql) ;
	echo "依照score做排序<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
		
	$sql = "select * from `score` order by `score` DESC";
    $result = mysql_query($sql) ;
	echo "依照score做反排序<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
	
	$sql = "select * from `score` order by `usr_id` ASC";
    $result = mysql_query($sql) ;
	echo "依照usr_id做排序<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
		
	$sql = "select * from `score` order by `usr_id` DESC";
    $result = mysql_query($sql) ;
	echo "依照usr_id做反排序<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
		
	$sql = "select * from `score` order by `score` ASC,`usr_id` DESC";
    $result = mysql_query($sql) ;
	echo "依照score做排序再依usr_id做反排序<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}	
	
?>