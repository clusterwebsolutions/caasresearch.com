<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CAAS | Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body class="skin-blue">
<div class="wrapper">

<?php include('header.php') ?>
<!-- Left side column. contains the logo and sidebar -->
<?php include('menu.php')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Edit Editorial Board
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Edit Editorial Board</li>
    </ol>
</section>
<?php
extract($_GET);
include('../db_connect.php');
$row = mysql_fetch_assoc(mysql_query("select * from `editorial_board` where `id` = '$id'"));
?>
<!-- Main content -->
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Editorial Board Form</h3>
        </div><!-- /.box-header -->
        <!-- form start -->

        <form method="post" action="update_editorialboard.php"  enctype="multipart/form-data" data-toggle="validator">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <div class="box-body">

                <div class="form-group">
                    <label for="prof_name">Prof Name *</label>
                    <input type="text" class="form-control" name="prof_name" required="required" value="<?php echo $row['prof_name']?>">
                </div>

                <div class="form-group">
                    <label for="category">Category *</label>
                    <select class="form-control" name="category" placeholder="Company Name" required="required">
                        <option value=""> Select Category</option>
                        <option value="1" <?php if($row['category']==1){?> selected="selected" <?php }?>>CIJ MEDICAL RESEARCH</option>
                        <option value="2" <?php if($row['category']==2){?> selected="selected" <?php }?>>CIJ SCIENCE AND TECHNOLOGY</option>
                        <option value="3" <?php if($row['category']==3){?> selected="selected" <?php }?>>CIJ ENGINEERING RESEARCH</option>
                        <option value="4" <?php if($row['category']==4){?> selected="selected" <?php }?>>CIJ BASIC SCIENCE AND APPLIED RESEARCH</option>
                        <option value="5" <?php if($row['category']==5){?> selected="selected" <?php }?>>CIJ ENGINEERING  APPLICATIONS</option>
                        <option value="6" <?php if($row['category']==6){?> selected="selected" <?php }?>>CIJ MANAGEMENT SCIENCES</option>
                        <option value="7" <?php if($row['category']==7){?> selected="selected" <?php }?>>CIJ LANGUAGE AND RESEARCH</option>
                        <option value="8" <?php if($row['category']==8){?> selected="selected" <?php }?>>CIJ SCIENCE,RESEARCH  AND DEVELOPEMENT</option>
                        <option value="9" <?php if($row['category']==9){?> selected="selected" <?php }?>>CIJ LAW AND SOCIAL STUDIEST</option>
                        <option value="10" <?php if($row['category']==10){?> selected="selected" <?php }?>>CIJ INDUSTRIAL RESEARCH</option>
                        <option value="11" <?php if($row['category']==11){?> selected="selected" <?php }?>>CIJ ECONOMICS AND DEVELOPMENT</option>
                        <option value="12" <?php if($row['category']==12){?> selected="selected" <?php }?>>CIJ ENGINEERING AND TECHNICAL ADVANCEMENT</option>
                    </select>
                </div>



                <div class="form-group">
                    <label for="paper_author">Subject & Specialization *</label>
                    <input type="text" class="form-control" name="subject_spec" required="required" value="<?php echo $row['subject_spec']?>">
                </div>

                <div class="form-group">
                    <label for="address">Address </label>
                    <textarea class="form-control" name="address" placeholder="Address"><?php echo $row['address'];?></textarea>

                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo $row['phone']?>">
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $row['mobile']?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email']?>">
                </div>

                <div class="form-group">
                    <label for="website">Web Site</label>
                    <input type="text" class="form-control" name="website" placeholder="Web Site" value="<?php echo $row['website']?>">
                </div>

                <div class="form-group">
                    <label for="document">Image</label>
                    <input type="file" name="image">
                    <p class="help-block">Upload only JPEG.</p>

                    <img src="<?php if($row['image']!=''){echo $row['image'];}else{?>../img/no-profile-img.gif <?php } ?>" width="150"/>
                </div>


            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>


    </div><!-- /.box -->

    <iframe id="categoryedit_iframe" name="categoryedit_iframe" style="display:none;"></iframe>


</div><!--/.col (left) -->
<!-- right column -->

</div>   <!-- /.row -->
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
    <?php include('footer.php');?>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="dist/js/demo.js" type="text/javascript"></script>-->
<script src="javascript/custom.js" type="text/javascript"></script>
</body>
</html>
