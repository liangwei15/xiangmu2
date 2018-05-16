	<?php 
	$tid=$_POST["tid"];
	$typename=$_POST["typename"];
	include_once('./system/dbConn.php'); 
	include_once('./system/myFunc.php');
	connect();
	$sql="select * from articletype where typename='$typename' and tid!=$tid";
	$rs=mysql_query($sql);
	 if(mysql_affected_rows()==1)
	 {
	 	redirect('type.php','视频类型名重复');
	 	die();
	 }
	$sql="update articletype set typename='$typename' where tid=$tid";
	echo $sql;
	$rs=mysql_query($sql);
	if($rs)
	 {
	 	header('location:type.php');
	 }
	 else redirect('type.php','视频类型修改失败');
	 ?>