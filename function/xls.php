<?php
header("Content-Type:text/html; charset=utf-8");
header("Content-type: application/vnd.ms-excel"); //文件內容為excel格式
header("Content-Disposition: attachment; filename=score".date("YmdHis").".xls;"); //將PHP轉成下載的檔案指定名稱與副檔名.xls
include("../conn/mysql.inc.php"); 
?>
<HTML xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">
<head><meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8"></head>
<body>
<table border="1">
<tr>
<?php
$sql = "SHOW FULL COLUMNS from `score`";
    $result = mysql_query($sql) ;
		while($row = mysql_fetch_assoc($result))
		{
			echo"<td>$row[Field]</td>";
		}
?>
</tr>
<tr>
<?php
	$sql = "select * from `score`";
    $result = mysql_query($sql) ;
		while($row = mysql_fetch_row($result))
		{
			foreach($row as $value)
			{
				echo "<td>$value</td>";
			}
			echo "</tr><tr>";
		}


?>
</tr>
</table>

</body>
</html>