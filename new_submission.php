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
                                <h3 class="caas_heading">New Submission</h3>
                            </div>

                        </div>

                            <form role="form" action="submission_process.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                            </div>
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
                                <label for="title">Paper Title *</label>
                                <input type="text" class="form-control" name="title" placeholder="Paper Title" required="required">
                            </div>
                            <div class="form-group">
                                <label for="abstract">Abstract *</label>
                                <input type="text" class="form-control" name="abstract" placeholder="Abstract" required="required">
                            </div>

                             <div class="form-group">
                                <label for="exampleInputFile">Upload *</label>
                                <input type="file" name="document" required="required">
                                <p class="help-block">Upload only document.</p>
                            </div>

                             <div class="form-group">
                                 <input type="checkbox" id="exampleInputFile">
                                <label for="exampleInputFile">I agree terms and conditions.</label>


                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
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