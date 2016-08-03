<?php

include 'misc_files.php';

include 'header.php';

include 'db_connect.php';
?>

<div class="container content">
<br>
    <div class="row" >



        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
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

         <h3 class="">India</h3>
            <br>
          <h4 class="caas_heading"> Tamil Nadu</h4>
         <h3 class="caas_heading">A</h3>

            <ul class="missionsCountries">


                <?php

                $getcountry = mysql_query("SELECT `id`,`name` FROM `tamil_nadu` WHERE `name` LIKE 'A%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="pse_statedetails.php?state_id=<?php echo $fetch_coun['id'];?>"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>




            </ul>


        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">B</h3>

            <ul class="missionsCountries">

                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'B%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>



            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">C</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'C%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>


        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">D</h3>

            <ul class="missionsCountries">

                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'D%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">E</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'E%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>


        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">G</h3>

            <ul class="missionsCountries">

                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'G%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>

            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">H</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'H%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>



        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">J</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'J%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">K</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'K%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">L</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'L%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">M</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'M%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">N</h3>
            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'N%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>
        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">O</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'O%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">P</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'P%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">


                        </div>
                        <div class="countryName">
                            <a href="pse_worlddetails.php?<?php echo $fetch_coun['id'];?>"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">Q</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'L%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">R</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'R%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>

        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">S</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'S%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>


        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">T</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'T%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>



        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">U</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'U%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>


        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">V</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'V%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>



        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">

            <h3 class="caas_heading">Y</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`  FROM `tamil_nadu` WHERE `name` LIKE 'Y%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            
                        </div>
                        <div class="countryName">
                            <a href="#" id="    0"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>


            </ul>


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