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
  $tid=$_GET['tid'];?> 
    
    <section id="main" >
        <div class="container" >
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9">
                 
                      <form class="form-horizontal" method="POST" action="doTypeEdit.php" enctype="multipart/form-data">
<?php $sql="select * from articletype where tid=$tid";
$rs=mysql_query($sql);
$row=mysql_fetch_assoc($rs);
 ?>
  <div class="form-group">
   <input type="hidden" name="tid" value=<?php echo $row["tid"]; ?>>
    <label for="typename" class="col-md-2 control-label">物品类别名称</label>
    <div class="col-md-10">
      <input type="text" class="form-control" id="typename" placeholder="typename" name="typename" value="<?php echo $row['typename'];?>"  >
    </div>
  </div>

      
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" value="修改">
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
