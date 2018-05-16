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
    <title>管理首页</title>
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

         <?php require_once('./header.php');  ?>
 
  
    <section style="padding:100px 0px 0px 0px;" >
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-lg-offset-3  col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 ">
                    <div class="alert alert-info">
                        <div class="media">
                        <div class="pull-left">
                            <img src="assets/img/admin.png" class="img-responsive" />
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">管理员界面</h3>
                            <p>
                               作为管理员应做到对本系统进行合理管理与信息统计
                            </p>
                             <a href="index-admin.php" class="btn btn-primary" target="_blank" >进入管理员登陆界面</a>
                        </div>
                    </div>
                        
                   
                    </div>
                  
                </div>
                
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
