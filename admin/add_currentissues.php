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

<?php

include '../db_connect.php';

?>
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
                Add Current Issue
                <small>Add</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">Add Current Issue</li>
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
                            <h3 class="box-title">Current Issue Form</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" action="insert_currentissue.php"  enctype="multipart/form-data" data-toggle="validator">

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="category">Category *</label>
                                    <select class="form-control" name="category" placeholder="Company Name" required="required">
                                        <option value=""> Select Category</option>
                                        <option value="1">CIJ MEDICAL RESEARCH</option>
                                        <option value="2">CIJ SCIENCE AND TECHNOLOGY</option>
                                        <option value="3">CIJ ENGINEERING RESEARCH</option>
                                        <option value="4">CIJ BASIC SCIENCE AND APPLIED RESEARCH</option>
                                        <option value="5">CIJ ENGINEERING  APPLICATIONS</option>
                                        <option value="6">CIJ MANAGEMENT SCIENCES</option>
                                        <option value="7">CIJ LANGUAGE AND RESEARCH</option>
                                        <option value="8">CIJ SCIENCE,RESEARCH  AND DEVELOPEMENT</option>
                                        <option value="9">CIJ LAW AND SOCIAL STUDIEST</option>
                                        <option value="10">CIJ INDUSTRIAL RESEARCH</option>
                                        <option value="11">CIJ ECONOMICS AND DEVELOPMENT</option>
                                        <option value="12">CIJ ENGINEERING AND TECHNICAL ADVANCEMENT</option>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="paper_title">Paper Title *</label>
                                    <input type="text" class="form-control" name="paper_title" placeholder="Paper Title" required="required" >
                                </div>

                                <div class="form-group">
                                    <label for="paper_author">Paper Author *</label>
                                    <input type="text" class="form-control" name="paper_author" placeholder="Paper Author"  required="required" >
                                </div>

                                <div class="form-group">
                                    <label for="month">Month *</label>
                                    <select class="form-control"  name="month" required="required">
                                        <option value="">Select Month</option>
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="year">Year *</label>
                                    <select class="form-control"  name="year" required="required">
                                        <option value="">Select Year</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="volume">Volume</label>
                                    <select class="form-control"  name="volume" required="required">
                                        <option value="">Select Volume</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="volume">Issue</label>
                                    <select class="form-control"  name="issue" required="required">
                                        <option value="">Select Issue</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="document">Upload</label>
                                    <input type="file" name="document" required="required">
                                    <p class="help-block">Upload only PDF.</p>
                                </div>



                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
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

<script src="javascript/custom.js" type="text/javascript"></script>
<script type="text/javascript">

    $(function () {
        $('#datetimepicker10').datetimepicker({
            viewMode: 'years',
            format: 'MM/YYYY'
        });
    });
</script>
</body>
</html>
