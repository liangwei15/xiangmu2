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
    <title>用户管理</title>
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
    <?php require_once('./header.php'); 
    include_once('./system/dbConn.php'); ?>
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 ">

                     <h3>所有用户列表</h3>
                      <div class="hr-div"> <hr /></div>
                                    <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>用户名</th>
                                            <th>真实姓名</th>
                                            <th>性别</th>
                                            <th>电话</th>
                                            <th>邮箱</th>
                                           <th>地址</th>
                                           <th>操作</th>    
                                        </tr>
                                    </thead>
                                    <?php connect();
                                    $sql="select * from  users order by uid desc";
                                    $rs=mysql_query($sql);
                                    $i=1;
                                     ?>
                                    <tbody>
                                        <?php while ($row=mysql_fetch_assoc($rs))
                                    { ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                             <td><?php echo $row['uname']; ?></td>
                                            <td><?php echo $row['rname']; ?></td>
                                            <td><?php if($row['gender']) echo '女';  else echo '男'; ?></td>
                                            <td><?php echo $row['tel']; ?></td>
                                            <td><span class="label label-info"><?php echo $row['email']; ?></span></td>
                                            <td><?php echo $row['address']; ?></td>
                                              <td><a href="userEdit.php?uid=<?php echo $row['uid']; ?>" class="label label-success">修改</a><a href="userDelete.php?uid=<?php echo $row['uid']; ?>" class="label label-success">删除</a></td>

                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                   

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
