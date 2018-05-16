<?php

include_once('./system/dbConn.php');
include_once('./system/myFunc.php');

$name=$_POST['username'];
$pwd=$_POST['password'];
connect();
$row="select * from admins where adminname='$name' and adminpassword='$pwd' ";

$rs=mysql_query($row);
$num=mysql_num_rows($rs);
if($num>0){
    session_start();
    $_SESSION["adminname"]=$name;
    header('location:offer-shop.php');
}
else{
    echo "用户名或密码错误，3秒后重新登陆";
    header('location:index-admin.php');
//    echo "<script>alert('密码错误，请重新输入');location='index-admin.php'</script>";
}

//if($row){
//
//    if($pwd !=$row['password'] || $name !=$row['username']){
//
//        echo "<script>alert('密码错误，请重新输入');location='index-admin.php'</script>";
//      //  exit;
//    }
//    else{
//        $_SESSION['username']=$row['username'];
//        $_SESSION['adminid']=$row['adminid'];
//       // echo "<script>alert('登录成功');location='index,php'</script>";
//    }
//
//}else{
//  //  echo "<script>alert('您输入的用户名不存在');location='index-admin.php'</script>";
// //   exit;
//};

?>