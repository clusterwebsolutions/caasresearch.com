<?php
session_start();
include 'db_connect.php';

include 'misc_files.php';

include 'header.php';

include 'menu.php';

$user_id = $_SESSION['user_id'];

?>

<div class="container content">

    <div class="row" >

        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ">

            <!--
            User Profile Sidebar by @keenthemes
            A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
            Licensed under MIT
            -->

            <div class="row profile">
                <div class="col-md-3" style="padding-left:0px !important; margin-left: 0px !important; ">
                    <?php include 'profile_sidemenu.php';?>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="caas_heading">Paper List</h3>
                            </div>

                        </div>

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Paper title</th>
                                <th>Paper ID</th>
                                <th>Status</th>
                                <th>Paper</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $papers_query = mysql_query("SELECT * FROM `papers` WHERE `user_id` = '$user_id'");
                            $i=1;
                            if(mysql_num_rows($papers_query)>0)
                            {
                                while($res=mysql_fetch_assoc($papers_query))
                                {
                                        ?>
                                    <tr>
                                        <th><?php echo $i++;?></th>
                                        <td><?php echo $res['name']?></td>
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
                                        <td><?php echo $res['title']?></td>
                                        <td><?php echo $res['paper_id']?></td>
                                        <td><?php echo $res['']?></td>
                                        <td><a href="documents/<?php echo $res['document']?>">Download</a> </td>
                                    </tr>
                            <?php
                                }
                            }


                            ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>





    </div>




</div>

<!--footer -->

<?php include 'footer.php';?>

</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>