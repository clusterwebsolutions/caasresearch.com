<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CASS | Admin</title>
    <?php include('components.php'); ?>

    <?php

    include('../db_connect.php');

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
               Editorial Board List
                <small>Control pannel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active"> Editorial Board List</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"> Editorial Board List Details</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Prof Name</th>
                                    <th>Category</th>
                                    <th>Subject Spec</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Mobile</th>
                                    <th>E-Mail</th>
                                    <th>Website</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php


                                $s=mysql_query("select * from `editorial_board` ORDER BY `time_stamp` DESC");
                                $i=1;
                                if(mysql_num_rows($s)>0)
                                {
                                    while($res=mysql_fetch_array($s))
                                    { ?>

                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo ucfirst($res['prof_name']);?></td>
                                            <td><?php $cat = $res['category'];
                                                if($cat ==1){echo 'CIJ MEDICAL RESEARCH';}
                                                elseif($cat ==2){echo 'CIJ SCIENCE AND TECHNOLOGY';}
                                                elseif($cat ==3){echo 'CIJ ENGINEERING RESEARCH';}
                                                elseif($cat ==4){echo 'CIJ BASIC SCIENCE AND APPLIED RESEARCH';}
                                                elseif($cat ==5){echo 'CIJ ENGINEERING  APPLICATIONS';}
                                                elseif($cat ==6){echo 'CIJ MANAGEMENT SCIENCES';}
                                                elseif($cat ==7){echo 'CIJ LANGUAGE AND RESEARCH';}
                                                elseif($cat ==8){echo 'CIJ SCIENCE, RESEARCH  AND DEVELOPEMENT';}
                                                elseif($cat ==9){echo 'CIJ LAW AND SOCIAL STUDIEST';}
                                                elseif($cat ==10){echo 'CIJ INDUSTRIAL RESEARCH';}
                                                elseif($cat ==11){echo 'CIJ ECONOMICS AND DEVELOPMENT';}
                                                elseif($cat ==12){echo 'CIJ ENGINEERING AND TECHNICAL ADVANCEMENT';}

                                                ?></td>
                                            <td><?php echo ucfirst($res['subject_spec']);?></td>
                                            <td><?php echo ucfirst($res['address']);?></td>
                                            <td><?php echo $res['phone'];?></td>
                                            <td><?php echo $res['mobile'];?></td>

                                            <td><?php echo $res['email'];?></td>
                                            <td><?php echo $res['website'];?></td>
<!--                                            <td><a href="add_quote.php?client_id=--><?php //echo $res['id'];?><!--">Send quote</a></td>-->
                                            <td><a href="edit_editorialboard.php?id=<?php echo $res['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;
                                                <a href="javascript:;" onclick="delete_editorialboard(<?php echo $res['id']; ?>)"><span class="glyphicon glyphicon-trash"></span></a></td>
                                        </tr>
                                    <?php }  }  ?>


                                </tbody>
                                <!--                                <tfoot>-->
                                <!--                                <tr>-->
                                <!--                                    <th>No</th>-->
                                <!--                                    <th>Name</th>-->
                                <!--                                    <th>Gender</th>-->
                                <!--                                    <th>Age</th>-->
                                <!--                                    <th>Address</th>-->
                                <!--                                    <th>E-mail</th>-->
                                <!--                                    <th>Mobile</th>-->
                                <!--                                    <th>Date of Birth</th>-->
                                <!--                                    <th>Qualification</th>-->
                                <!--                                    <th>Experience</th>-->
                                <!--                                    <th>Category</th>-->
                                <!--                                    <th>Designation</th>-->
                                <!--                                    <th>Passport No</th>-->
                                <!--                                    <th>Experience</th>-->
                                <!--                                </tr>-->
                                <!--                                </tfoot>-->
                            </table>
                        </div><!-- /.box-body -->
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
