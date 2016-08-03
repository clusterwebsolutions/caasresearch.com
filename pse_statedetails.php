<?php

include 'misc_files.php';

include 'header.php';

include 'db_connect.php';
?>

<div class="container content">


    <div class="row" >



        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8" style="border-right: 1px solid #ccc;">

        <div class="page">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#"> > </a></li>
            <li><a href="#">Psephology</a></li>
            <li><a href="#"> > </a></li>
            <li><a href="#">world</a></li>
            <li><a href="#"> > </a></li>
            <li><a href="#">Afganistan</a></li>
        </ul>
        </div>
            <br>

            <?php

            $getcountrydetails = mysql_query("SELECT * FROM `country_details` WHERE `id` = $_GET[country_id]");

            $fetch_countrydetails = mysql_fetch_assoc($getcountrydetails);


            ?>

         <h3 class="caas_heading"><?php echo $fetch_countrydetails['title']?></h3>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
            <span ><?php echo $fetch_countrydetails['description']?></span><br><br>
                <span>Telephone : <?php echo $fetch_countrydetails['telephone']?></span><br><br>
                <span>Fax : <?php echo $fetch_countrydetails['fax']?></span><br><br>
                <span>Email : <?php echo $fetch_countrydetails['email']?></span><br><br>
                <span>www : <?php echo $fetch_countrydetails['website']?></span><br><br>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-6">
            <img src="img/coun1.jpg" class="img-responsive">
            </div>




        </div>






    <br>




        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8"  style="border-right: 1px solid #ccc;" >



                <!-- Page header -->
                <div class="page-header" style="border-top: 1px solid #ccc;">
                    <h2>News & Events <small>Afkanistan.</small></h2>
                </div>
                <!-- /Page header -->

                <!-- Timeline -->
                <div class="timeline">

                    <!-- Line component -->
                    <div class="line text-muted"></div>

                    <!-- Separator -->
                    <div class="separator text-muted">
                        <time>26. 3. 2015</time>
                    </div>
                    <!-- /Separator -->


                    <!-- Panel -->
                    <article class="panel panel-primary">

                        <!-- Icon -->
                        <div class="panel-heading icon">
                            <i class="glyphicon glyphicon-plus"></i>
                        </div>
                        <!-- /Icon -->

                        <!-- Heading -->
                        <div class="panel-heading">
                            <h2 class="panel-title">A Year of Transformational Diplomacy</h2>
                        </div>
                        <!-- /Heading -->

                        <!-- Body -->
                        <div class="panel-body">
                            Some new content has been added.
                        </div>
                        <!-- /Body -->


                    </article>
                    <!-- /Panel -->

                    <!-- Separator -->
                    <div class="separator text-muted">
                        <time>25. 3. 2015</time>
                    </div>
                    <!-- /Separator -->

                    <!-- Panel -->
                    <article class="panel panel-success">

                        <!-- Icon -->
                        <div class="panel-heading icon">
                            <i class="glyphicon glyphicon-plus"></i>
                        </div>
                        <!-- /Icon -->

                        <!-- Heading -->
                        <div class="panel-heading">
                            <h2 class="panel-title">New content added</h2>
                        </div>
                        <!-- /Heading -->

                        <!-- Body -->
                        <div class="panel-body">
                            Anything you can do with <code>.panel</code>, can be done in timeline too!
                        </div>
                        <!-- /Body -->


                    </article>
                    <!-- /Panel -->

                    <!-- Separator -->
                    <div class="separator text-muted">
                        <time>25. 3. 2015</time>
                    </div>
                    <!-- /Separator -->

                    <!-- Panel -->
                    <article class="panel panel-success">

                        <!-- Icon -->
                        <div class="panel-heading icon">
                            <i class="glyphicon glyphicon-plus"></i>
                        </div>
                        <!-- /Icon -->

                        <!-- Heading -->
                        <div class="panel-heading">
                            <h2 class="panel-title">New content added</h2>
                        </div>
                        <!-- /Heading -->

                        <!-- Body -->
                        <div class="panel-body">
                            Anything you can do with <code>.panel</code>, can be done in timeline too!
                        </div>
                        <!-- /Body -->


                    </article>
                    <!-- /Panel -->


                    <!-- Separator -->
                    <div class="separator text-muted">
                        <time>25. 3. 2015</time>
                    </div>
                    <!-- /Separator -->

                    <!-- Panel -->
                    <article class="panel panel-success">

                        <!-- Icon -->
                        <div class="panel-heading icon">
                            <i class="glyphicon glyphicon-plus"></i>
                        </div>
                        <!-- /Icon -->

                        <!-- Heading -->
                        <div class="panel-heading">
                            <h2 class="panel-title">New content added</h2>
                        </div>
                        <!-- /Heading -->

                        <!-- Body -->
                        <div class="panel-body">
                            Anything you can do with <code>.panel</code>, can be done in timeline too!
                        </div>
                        <!-- /Body -->


                    </article>
                    <!-- /Panel -->



                    <!-- Separator -->
                    <div class="separator text-muted">
                        <time>25. 3. 2015</time>
                    </div>
                    <!-- /Separator -->

                    <!-- Panel -->
                    <article class="panel panel-success">

                        <!-- Icon -->
                        <div class="panel-heading icon">
                            <i class="glyphicon glyphicon-plus"></i>
                        </div>
                        <!-- /Icon -->

                        <!-- Heading -->
                        <div class="panel-heading">
                            <h2 class="panel-title">New content added</h2>
                        </div>
                        <!-- /Heading -->

                        <!-- Body -->
                        <div class="panel-body">
                            Anything you can do with <code>.panel</code>, can be done in timeline too!
                        </div>
                        <!-- /Body -->


                    </article>
                    <!-- /Panel -->



                    <!-- Separator -->
                    <div class="separator text-muted">
                        <time>25. 3. 2015</time>
                    </div>
                    <!-- /Separator -->

                    <!-- Panel -->
                    <article class="panel panel-success">

                        <!-- Icon -->
                        <div class="panel-heading icon">
                            <i class="glyphicon glyphicon-plus"></i>
                        </div>
                        <!-- /Icon -->

                        <!-- Heading -->
                        <div class="panel-heading">
                            <h2 class="panel-title">New content added</h2>
                        </div>
                        <!-- /Heading -->

                        <!-- Body -->
                        <div class="panel-body">
                            Anything you can do with <code>.panel</code>, can be done in timeline too!
                        </div>
                        <!-- /Body -->


                    </article>
                    <!-- /Panel -->



                </div>
                <!-- /Timeline -->


        </div>

        </div>


    </div>




</div>



<?php include 'footer.php';?>

<!--about modal-->
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="caas_heading" style="border-bottom:0px !important;"><span class="glyphicon glyphicon-folder-open"></span>  An Open Access publication</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                                <p>Restricted access to research findings and scientific discovery through subscription and pay-per-view journals will only impede communication through the scientific community. In addition, restricted access can also hamper the education and dissemination of scientific knowledge to the aspiring younger generations who are keen to pursue a career in science. Increased productivity and development of science can only be achieved by diffusing knowledge and providing the facilities for creating permanent repositories such as Open Access.
                                    Through Open Access publications, scientists can avoid subscription fees and copyright and licensing restrictions to access free scholarly literature. Since Open Access publishing allows the permanent restoration of scientific data through digital copies, other than the constraint of Internet access, scientists around the world can freely share information and collaborate to enhance the progress of science.Open Access journals not only give royalty to free literature, but also reduce costs for paper-copy production, physical storage, and distribution through digitalized copies.</p>
                                <p>The benefits of implementing Open Access are reaped by many end users, such as, students, researchers, clinicians, patients, policy makers, and journalists. As long as there is Internet access, people from all over the world, be it an underdeveloped country in Africa, a developing country like India or developed countries such as USA or UK, will have immediate access to latest research findings. Thus, Open Access initiative helps in unlocking the traditional methods of subscription articles and releasing information to tertiary level readers, who normally would not have access to first hand research studies.</p>
                                <p>Realizing the potential of Open Access in terms of greater visibility within and beyond the scientific community, in recent years, there has been a tremendous boost to Open Access movement through various Open Access publishers. CAAS is one such publishing group that believes in this movement and is most ardently working towards the welfare and progress of scientific community. CAAS Group is built upon the principles of Open Access and is determined to provide free and unrestricted access of research articles to scientists around the world for the advancement of science and technology.</p>
                    <!--            <button type="button"  class="btn btn-success pull-right">Read More</button>-->
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success pull-right" data-dismiss="modal" aria-hidden="true">Cancel</button>
            </div>
        </div>
    </div>
</div>

</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>