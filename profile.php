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


            <?php


            $s=mysql_query("select * from `users` WHERE `id` = $user_id ");
            $i=1;
            if(mysql_num_rows($s)>0)
            {
            $res=mysql_fetch_assoc($s);
            }
            ?>

                <div class="row profile">
                    <div class="col-md-3" style="padding-left:0px !important; margin-left: 0px !important; ">
                        <?php include 'profile_sidemenu.php';?>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-content">

                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="caas_heading">Profile</h3>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    Name
                                </div>
                                <div class="col-md-3">
                                    <?php echo $res['user_name'];?>
                                </div>
                                <div class="col-md-3">
                                    <a href="edit_profile.php?id=<?php echo $res['id'];?>"><span class="glyphicon glyphicon-pencil"> </span></a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                   E-Mail
                                </div>
                                <div class="col-md-3">
                                    <?php echo $res['email'];?>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                   Mobile
                                </div>
                                <div class="col-md-3">
                                    <?php echo $res['mobile_number'];?>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                   Categories
                                </div>
                                <div class="col-md-3">
                                    <?php echo $res['categories'];?>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-md-3">
                                  Institution
                                </div>
                                <div class="col-md-3">
                                    <?php echo $res['institution'];?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



    </div>




</div>

<?php include 'footer.php';?>

</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>