<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CAAS | Admin</title>
    <?php include('components.php'); ?>

    <?php

    include('db_connect.php');

    ?>
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
                Journal list
                <small>Control pannel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">Journal list</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Journal List</h3>

                            </div><!-- /.box-header -->

                            <div class="box-footer">

                                <div class="row">
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">

                                          <a href="papers_byjournals.php?category=1">  <h5 class="description-header">CIJ MEDICAL RESEARCH</h5></a>

                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">
<!--                                            <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>-->
                                            <a href="papers_byjournals.php?category=2">  <h5 class="description-header">CIJ SCIENCE AND TECHNOLOGY</h5></a>
<!--                                            <span class="description-text">TOTAL COST</span>-->
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">
<!--                                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>-->
                                            <a href="papers_byjournals.php?category=3"> <h5 class="description-header">CIJ ENGINEERING RESEARCH</h5></a>
<!--                                            <span class="description-text">TOTAL PROFIT</span>-->
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->

                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">

                                            <a href="papers_byjournals.php?category=4"> <h5 class="description-header">CIJ BASIC SCIENCE AND APPLIED RESEARCH</h5></a>

                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">
<!--                                            <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>-->
                                            <a href="papers_byjournals.php?category=5">  <h5 class="description-header">CIJ ENGINEERING APPLICATIONS</h5></a>
<!--                                            <span class="description-text">TOTAL COST</span>-->
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">
<!--                                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>-->
                                            <a href="papers_byjournals.php?category=6">  <h5 class="description-header">CIJ MANAGEMENT SCIENCES</h5></a>
<!--                                            <span class="description-text">TOTAL PROFIT</span>-->
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->

                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">

                                            <a href="papers_byjournals.php?category=7"> <h5 class="description-header">CIJ LANGUAGE AND RESEARCH</h5></a>

                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">
<!--                                            <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>-->
                                            <a href="papers_byjournals.php?category=8">  <h5 class="description-header">CIJ SCIENCE, RESEARCH  AND DEVELOPEMENT</h5></a>
<!--                                            <span class="description-text">TOTAL COST</span>-->
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">
<!--                                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>-->
                                            <a href="papers_byjournals.php?category=9">  <h5 class="description-header">CIJ LAW AND SOCIAL STUDIEST</h5></a>
<!--                                            <span class="description-text">TOTAL PROFIT</span>-->
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->

                                </div><!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">

                                            <a href="papers_byjournals.php?category=10"> <h5 class="description-header">CIJ INDUSTRIAL RESEARCH</h5></a>

                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">
<!--                                            <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>-->
                                            <a href="papers_byjournals.php?category=11">  <h5 class="description-header">CIJ ECONOMICS AND DEVELOPMENT</h5></a>
<!--                                            <span class="description-text">TOTAL COST</span>-->
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->
                                    <div class="col-sm-4 col-xs-4">
                                        <div class="description-block border-right">
<!--                                            <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>-->
                                            <a href="papers_byjournals.php?category=12">  <h5 class="description-header">CIJ ENGINEERING AND TECHNICAL ADVANCEMENT</h5></a>
<!--                                            <span class="description-text">TOTAL PROFIT</span>-->
                                        </div><!-- /.description-block -->
                                    </div><!-- /.col -->

                                </div><!-- /.row -->

                            </div><!-- /.box-footer -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->

            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <div class="hidden_div" style="display: none;"></div>
    <?php include('footer.php');?>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.3 -->
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- DATA TABES SCRIPT -->
<script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js" type="text/javascript"></script>

<script src="javascript/custom.js"></script>
<!-- page script -->
<script type="text/javascript">
    $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false
        });
    });
</script>

</body>
</html>
