<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Support Admin</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- Google	Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Nova+Flat' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <?php  require_once('./header.php');
  include_once('./system/dbConn.php');
  connect(); 
  $uid=$_GET['uid'];?> 
    
    <section id="main" >
        <div class="container" >
            <div class="row">
            	<?php $sql="select * from users where uid=$uid";
	$rs= mysql_query($sql);
	$row = mysql_fetch_assoc($rs);
 ?>
                <div class="col-lg-9 col-md-9 col-sm-9">
                 
                    <h3>请修改用户信息</h3>
<form method="post"  class="form-horizontal" action="doUserEdit.php"  enctype="multipart/form-data">
  <input type="hidden" name="uid" value=<?php echo $row["uid"]; ?>   >  

<div class="form-group">
    <label for="username" class="col-md-2 col-xs-2 control-label">用户名</label>
    <div class="col-md-10 col-xs-10">
   <input type="text" class="form-control" id="username" readonly="readonly" name="uname" value="<?php echo $row['uname']; ?>">
   </div>
</div>
<div class="form-group">
    <label for="username" class="col-md-2 col-xs-2 control-label">真实姓名</label>
    <div class="col-md-10 col-xs-10">
   <input type="text" class="form-control" id="rname"  name="rname" value="<?php echo $row["rname"]; ?>">
   </div>
</div>
<div class="form-group">
    <label  class="col-md-2 col-xs-2 control-label">性别</label>
<div class="col-md-10 col-xs-10">
  <label class="radio-inline">
 <input type="radio"  name="gender" value="0" <?php if($row["gender"]==0) echo "checked"; ?>>男</label>
<label class="radio-inline">
 <input type="radio"  name="gender" value="1" <?php if($row["gender"]==1) echo "checked"; ?>>女</label>
 </div>
</div>


<div class="form-group">
    <label  class="col-md-2 col-xs-2 control-label">头像</label>
<div class="col-md-10 col-xs-10">    
     <input type="file" name="pic">
原头像：<img src="./images/img/<?php echo $row['pic']; ?>" width="80px" height="80px" class="img-circle" name="beforepic">
</div>
</div>
<div class="form-group">
    <label for="address" class="col-md-2 col-xs-2 control-label">地址</label>
    <div class="col-md-10 col-xs-10">
   <input type="text" class="form-control" id="address"  name="address" value=<?php echo $row["address"]; ?>>
   </div>
</div>
<div class="form-group">
    <label  class="col-md-2 col-xs-2 control-label">电子邮件</label>
<div class="col-md-10 col-xs-10">    
   <input type="email" name="email" class="form-control"  value=<?php echo $row["email"]; ?>>
</div>
</div>


<div class="form-group">
    <label  class="col-md-2 col-xs-2 control-label">联系电话</label>
<div class="col-md-10 col-xs-10">    
   <input type="text" name="tel" class="form-control"  value=<?php echo $row["tel"]; ?>>
</div>
</div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 col-xs-10">
    <input type="submit"  class="btn btn-default" value="更新">
    </div>
  </div>
</form>
                    
                       
                     

                </div>
               <?php include_once('menu.php'); ?>
            </div>
        </div>
    </section>
   <?php require_once('./footer.php');?>
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>

</body>
</html>
