<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>NewLine Infotech | Ivoice</title>
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
<?php include('db_connect.php');?>
<?php include('header.php') ?>
<!-- Left side column. contains the logo and sidebar -->
<?php include('menu.php')?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
       Settings
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Settings</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Settings</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <form method="post" action="insert_quote.php">


            <div class="box-body">


                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Invoice Number" value="NewLine Infotech">

                </div>

                <div class="form-group">
                    <label>Proprietor Name</label>
                    <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Invoice Number" value="Sundar Raman">

                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Invoice Number" value="+91 9884279405">

                </div>

                <div class="form-group">
                    <label>Office</label>
                    <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Invoice Number" value="+9144 65736574">

                </div>
                <div class="form-group">
                    <label>E-Mail</label>
                    <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Invoice Number" value="info@newlineinfotech.ins">

                </div>

                <div class="form-group">
                    <label>Account Number</label>
                    <input type="text" class="form-control" id="invoice_number" name="invoice_number" placeholder="Invoice Number" value="083010200012704">

                </div>

                <div class="form-group">
                    <label>Logo</label>
                        <img src="images/logo.png" class="img-responsive">
                </div>


              </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </div><!-- /.box-body -->


        </form>

        <div class="alert alert-success alert-dismissable" id="success" style="display: none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>	<i class="icon fa fa-check"></i> Category Succefully Added.</h4>

        </div>
    </div><!-- /.box -->

    <iframe id="category_iframe" name="category_iframe" style="display:none;"></iframe>

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
    <script src="javascript/custom.js" type="text/javascript"></script>
</body>
</html>
