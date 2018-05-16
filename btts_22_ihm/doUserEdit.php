<?php 
	
	include_once('./system/dbConn.php'); 
	$uid=$_POST["uid"];
	$Username = $_POST["uname"];
   	$Gender = $_POST["gender"];
   	$Rname=$_POST["rname"];
   	$tel=$_POST["tel"];
   	$address=$_POST["address"];
   	$Email = $_POST["email"];
   
 // echo $Username,$Gender,$Birthdate,$Email;
//   	var_dump($_FILES);
   	
 //  var_dump($_FILES);
   connect();
   if ($_FILES['pic']['name']!="")
     {
    if ($_FILES['pic']['error']>0)
   switch ($_FILES['pic']['error']) {
    case 1:
      die ("文件大小超出PHP限制");
      break;
    case 2:
      die("文件大小超出HTML限制");
      break;
   }
   $sql = "select pic from users where uname='$Username'";
   $rs = mysql_query($sql);
   $row=mysql_fetch_assoc($rs);
    $pic=$row["pic"];
     
	 unlink("./images/img/$pic");
   $arr=array("jpg","jpeg","gif","png");
   $kz =explode(".", $_FILES["pic"]["name"]);
   $ex =$kz[count($kz)-1];
   if(!in_array($ex, $arr))
  {
   die("格式错误");
  // die("成功");
   }
   $fname = date("YmdHis").rand(100,999).".".$ex;
   move_uploaded_file($_FILES["pic"]["tmp_name"], "./images/img/$fname");
	$sql = "update users set pic='$fname' where uid='$uid'";
	mysql_query($sql);	
    mysql_free_result($rs);
}
	$sql = "update users set gender='$Gender',email='$Email',rname='$Rname',tel='$tel',address='$address' where uid = $uid"; 
 // echo "$sql";
	mysql_query($sql);
   header("location:admin-user-list.php");
?>
