<?php 
include_once('./system/dbConn.php');
$tid=$_GET['tid'];
connect();
$sql="select * from articles where arttype=$tid";
$rs=mysql_query($sql);
if(mysql_num_rows($rs)==0)
{
	$sql="delete from articletype where tid=$tid";
	mysql_query($sql);
	header("location:type.php");
}
 else die("该类型下有视频，删除失败");





 ?>
