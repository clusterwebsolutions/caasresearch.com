<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kaambazaar.com| Admin</title>
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
        Edit Quote
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Edit quote</li>
    </ol>
</section>
<?php
extract($_GET);
include('db_connect.php');
$row = mysql_fetch_assoc(mysql_query("select * from `clients` where `id` = '$id'"));

?>
<!-- Main content -->
<section class="content">
<div class="row">
<!-- left column -->
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Quote Form</h3>
        </div><!-- /.box-header -->
        <!-- form start -->

        <form  method="post" action="update_client.php">

            <input type="hidden" value="<?php echo $row['id'];?>" id="id" name="id"/>

            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name *</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" value="<?php echo $row['company_name'];?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Client Name *</label>
                    <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Client Name" value="<?php echo $row['client_name'];?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number *</label>
                    <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Mobile Number" value="<?php echo $row['mobile_number'];?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Office Number *</label>
                    <input type="number" class="form-control" id="office_number" name="office_number" placeholder="Office Number" value="<?php echo $row['office_number'];?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email'];?>">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Address *</label>
                    <textarea class="form-control" id="address" name="address" placeholder="Address"><?php echo $row['address'];?></textarea>
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
<script src="dist/js/demo.js" type="text/javascript"></script>
<script src="javascript/custom.js" type="text/javascript"></script>
</body>
</html>
