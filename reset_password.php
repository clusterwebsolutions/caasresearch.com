<?php

include 'db_connect.php';

include 'misc_files.php';

include 'header.php';

include 'menu.php';
$generate_number =  rand(pow(10, 4-1), pow(10, 4)-1);
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
                <div class="col-md-6">
                    <div class="profile-content">

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="caas_heading">Reset Password</h3>
                            </div>

                        </div>


                            <form role="form" action="submission_process.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="old_password">Old Password *</label>
                                <input type="password" class="form-control" name="old_password" placeholder="Old Password" required="required">
                            </div>

                            <div class="form-group">
                                <label for="new_password">New Password *</label>
                                <input type="password" class="form-control" name="new_password" placeholder="New Password" required="required">
                            </div>
                            <div class="form-group">
                                <label for="re_password">Re-Enter Password *</label>
                                <input type="text" class="form-control" name="re_password" placeholder="Re-Enter Password" required="required">
                            </div>



                            <button type="submit" class="btn btn-success">Reset Password</button>
                        </form>

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