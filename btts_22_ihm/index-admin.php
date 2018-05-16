<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->

<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>管理员登录</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />

    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Nova+Flat' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'/>

      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <?php require_once('./header.php');  ?>
    <section >
        <div class="container">
            <div class="row">

               
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h3>Admin Login </h3>
                    <form  method="post" action="doAdminLogin.php" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Username" name="username" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required="required" placeholder="Your Password" name="password" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="" class="btn btn-success" value="登录" />
                        </div>
                        <a href="#">Forgot Password ?</a>

                    </form>
                </div>
            </div>

        </div>

    </section>
    
    <?php require_once('./footer.php');?>

    <script src="assets/js/jquery-1.10.2.js"></script>

    <script src="assets/js/bootstrap.js"></script>

</body>
</html>
