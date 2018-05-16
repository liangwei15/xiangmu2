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
    <style type="text/css">
        #offer_img{
            width: 5rem;
            height: 5rem;
        }
    </style>
</head>
<body>
   
    <?php   require_once('./header.php');
  include_once('./system/dbConn.php'); ?>
    <section id="main" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9">
                 
                     <h3>商品需求列表</h3>
                      
                   <div class="hr-div"> <hr /></div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>编号</th>
                                            <th>名称</th>
                                            <th>类别</th>
                                             <th>图片</th>
                                             <th>简介</th>
                                             <th>参考价格</th>
                                             <th>需求交换的物品</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sql="select * from articles a, articletype at where a.arttype=at.tid and outin=1";
                                        connect();
                                            $rs=mysql_query($sql);
                                            while($row = mysql_fetch_assoc($rs))
                                            {
                                             ?>
                                           

                                        <tr>
                                            
                                            <?php $i=1; ?>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row["artname"]; ?></td>
                                            <td><?php echo $row["typename"]; ?></td>
                                            <td><img id="offer_img" src="./images/poster/<?php echo $row['pic']; ?>"></td>
                                            <td><?php echo $row["artintro"]; ?></td>
                                            <td><?php echo $row["price"] ?></td>
                                            <td><a href="artedit.php?<?php echo $row['artid']; ?>" class="label label-default">修改 </a> &nbsp;<a href="artdelete?<?php $row['artid']; ?>" class="label label-danger">删除 </a> </td>
                                        </tr>
                                       <?php $i++;  } ?>
                                         
                                    </tbody>
                                </table>
                            </div>
                   
                   
                        
                     
                    </div>
               <?php require_once('./menu.php'); ?>
            </div>
        </div>
    </section>
<?php require_once('footer.php'); ?>
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>

</body>
</html>
