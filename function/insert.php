<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 
	$str=$_GET["subject"];
	
	$sql="INSERT INTO `sample_db`.`subject` (`id`, `subject`) VALUES (NULL, '$str');";
	$result = mysql_query($sql) ;
	
	$sql = "select * from `subject`";
    $result = mysql_query($sql) ;
	echo "科目總表<br>";
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
		

?>