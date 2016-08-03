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
            <h3>Reset Password</h3>

            <div class="row profile">
                <div class="col-md-3" style="padding-left:0px !important; margin-left: 0px !important; ">
                    <?php include 'profile_sidemenu.php';?>
                </div>
                <div class="col-md-6">
                    <div class="profile-content">


                        <form id="signupform" role="form" action="signup_process.php" method="post">

                            <div id="signupalert" style="display:none" class="alert alert-danger">
                                <p>Error:</p>
                                <span></span>
                            </div>

                            <div class="form-group">
                                <label for="name" >Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                            </div>

                            <div class="form-group">
                                <label for="mobile" >Mobile</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="required">
                            </div>

                            <div class="form-group">
                                <label for="email" >Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email Address" required="required">
                            </div>


                            <div class="form-group">
                                <label for="categories" >Categories</label>
                                    <select class="form-control" name="categories" required="required" >
                                        <option value="" >Select Category</option>
                                        <option value="Under Graduation" >Under Graduation</option>
                                        <option value="Post Graduation" >Post Graduation</option>
                                        <option value="Research Scholar" >Research Scholar</option>
                                        <option value="Academision" >Academision</option>
                                    </select>

                            </div>


                            <div class="form-group">
                                <label for="institution" >Institution</label>
                                    <input type="text" class="form-control" name="institution" placeholder="Institution" required="required">
                            </div>

                            <div class="form-group">
                                <label for="password" >Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                            </div>

                            <div class="form-group">
                                <label for="confirm_password" >Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                            </div>

                            <div class="form-group">
                                <!-- Button -->
                                    <button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Update</button>

                            </div>




                        </form>

                    </div>
                </div>
            </div>
        </div>





    </div>




</div>

<!--footer -->
<div class="container">
    <div class="row footer">

        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ">

            <ul class="small_menu">
                <li><a href="#">Home</a> </li>
                <li><a href="#">About Us</a> </li>
                <li><a href="#">Contact Us</a> </li>
            </ul>

        </div>

    </div>
</div>

</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>