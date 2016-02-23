<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/mysql.inc.php"); 

function innerjoin()
{
	//$sql = "select * from `member`,`score` where `member`.`usr_id`=`score`.`usr_id`";
	//$sql = "select * from `member` join `score` on `member`.`usr_id`=`score`.`usr_id`";
	$sql = "select * from `member` inner join `score` on `member`.`usr_id`=`score`.`usr_id`";
    $result = mysql_query($sql) ;
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
}
function leftjoin()
{
	$sql = "select * from `member` left join `score` on `member`.`usr_id`=`score`.`usr_id`";
    $result = mysql_query($sql) ;
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
}
function rightjoin()
{
	$sql = "select * from `member` right join `score` on `member`.`usr_id`=`score`.`usr_id`";
    $result = mysql_query($sql) ;
		while($row = mysql_fetch_assoc($result))
		{
			print_r($row);
			echo "<br>";
		}
}
echo "inner join <br>";
innerjoin();
echo "left join <br>";
leftjoin();
echo "right join <br>";
rightjoin();
?>