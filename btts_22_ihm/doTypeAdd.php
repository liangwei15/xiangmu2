<?php 
$typename = $_POST['typename'];
include_once('./system/dbConn.php');
	include_once('./system/myFunc.php');
	connect();
$sql =  "select * from articletype where typename='$typename'";

$rs=mysql_query($sql);
if(mysql_num_rows($rs))
{
	redirect("type.php","已存在".$typename."类型");
	//die()
}
else {
		$sql= "insert into articletype value(null,'$typename')";
		mysql_query($sql);
		header("location:type.php");
	}
 ?>

