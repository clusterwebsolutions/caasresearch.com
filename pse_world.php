<?php

include 'misc_files.php';

include 'header.php';

include 'db_connect.php';
?>

<div class="container content">
<br>
    <div class="row" >



        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">


        <br>

         <h3 class="">World</h3>
         <h3 class="caas_heading">A</h3>

            <ul class="missionsCountries">


                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'A%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
                        </div>
                        <div class="countryName">
                            <a href="pse_worlddetails.php?country_id=<?php echo $fetch_coun['id'];?>"><?php echo $fetch_coun['name'];?></a>
                        </div>
                    </li>


                <?php
                }
                ?>




            </ul>


        </div>
        <br>

        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">


            <h3 class="caas_heading">Our team</h3>

            <section id="carousel">



                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="2" ></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">

                            <h4>Mr.  Jawahar Anand M.Tech</h4>

                            <div class="profile-circle" style="background: url('img/team/mr_jawahar_anand.jpg')"></div>

                            <p><b>Research Area:</b> Quality control technical research (Leather Technology) </p>

                        </div>

                        <div class="item">

                            <h4>Mr. P. Senthil Kumar MBA</h4>

                            <div class="profile-circle" style="background: url('img/team/team2/caas_team2_1.jpg')"></div>

                            <p>Research Area: Socio Economy & Public Policy </p>

                        </div>

                        <div class="item">

                            <h4>Mr. Murugan,M.L.DPIR</h4>

                            <div class="profile-circle" style="background: url('img/team/team3/caas_team3_1.jpg')"></div>

                            <p>Research Area: Intellectual Property Rights ,Trade mark </p>

                        </div>

                        <div class="item">

                            <h4>Amith Khurana MBA</h4>

                            <div class="profile-circle" style="background: url('img/team/team4/caas_team4_9.jpg')"></div>

                            <p> Psephological Survey – Participation method</p>

                        </div>

                        <div class="item">

                            <h4>Dr. L. Ramesh B.E., M. Tech, MBA, Ph.D</h4>

                            <div class="profile-circle" style="background: url('img/team/team6/caas_team6_1.jpg')"></div>

                            <p>Research Area:  </p>

                        </div>

                        <div class="item">

                            <h4>Mr . Nithin Jain</h4>

                            <div class="profile-circle" style="background: url('img/team/team5/caas_team5_4.jpg')"></div>

                            <p>Research Area: East Asian Studies </p>

                        </div>





                    </div>
                </div>



            </section>

        </div>

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">B</h3>

            <ul class="missionsCountries">

                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'B%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">

            <br>
            <h3 class="caas_heading">News</h3>
            <marquee loop="true" direction="up" scrollamount="2">

                <div class="news_div"><a href="#">News 1</a></div>
                <div class="news_div"><a href="#">News 1</a></div>
                <div class="news_div"><a href="#">News 1</a></div>
                <div class="news_div"><a href="#">News 1</a></div>
                <div class="news_div"><a href="#">News 1</a></div>
                <div class="news_div"><a href="#">News 1</a></div>
            </marquee>

        </div>

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">C</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'C%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">

            <br>

            <h3 class="caas_heading">Our Reports</h3>
            <marquee loop="true" direction="up" scrollamount="2">

                <div class="news_div"><a href="#">Report 1</a></div>
                <div class="news_div"><a href="#">Report 2</a></div>
                <div class="news_div"><a href="#">Report 3</a></div>
                <div class="news_div"><a href="#">Report 4</a></div>
                <div class="news_div"><a href="#">Report 5</a></div>
                <div class="news_div"><a href="#">Report 6</a></div>
            </marquee>

        </div>


        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">D</h3>

            <ul class="missionsCountries">

                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'D%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">

            <br>

            <h3 class="caas_heading">Current Research</h3>
            <marquee loop="true" direction="up" scrollamount="2">

                <div class="news_div"><a href="#">Report 1</a></div>
                <div class="news_div"><a href="#">Report 2</a></div>
                <div class="news_div"><a href="#">Report 3</a></div>
                <div class="news_div"><a href="#">Report 4</a></div>
                <div class="news_div"><a href="#">Report 5</a></div>
                <div class="news_div"><a href="#">Report 6</a></div>
            </marquee>

        </div>


        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">E</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'E%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-3">

            <br>

            <h3 class="caas_heading">Our Partners</h3>

            <section id="carousel">



                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="2" ></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="3"></li>

                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="item active">

                            <h4>CLRI</h4>

                            <div class="profile-circle" style="background: url('img/partners/clri.jpg')"></div>

                            <p><b>Project:</b> MDGs Impact on Society Conference TCIFES 2015.</p>

                        </div>

                        <div class="item">

                            <h4>Reach Today Media</h4>

                            <div class="profile-circle" style="background: url('img/partners/reach_today_meadia.jpg')"></div>

                            <p><b>Project:</b> Psephological survey Tamil Nadu Election 2016 Media Research Partner. </p>

                        </div>

                        <div class="item">

                            <h4>Serials Publications</h4>

                            <div class="profile-circle" style="background: url('img/partners/serials_publications.gif')"></div>

                            <p><b>Project:</b> Academic research papers in journal publications. </p>

                        </div>

                        <div class="item">

                            <h4>MGR University</h4>

                            <div class="profile-circle" style="background: url('img/partners/mgr-university.jpg')"></div>

                            <p> <b>Project:</b> Academic publications for University 2016.</p>

                        </div>







                    </div>
                </div>



            </section>

        </div>
        
        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">F</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'F%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">G</h3>

            <ul class="missionsCountries">

                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'G%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">H</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'H%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">I</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'I%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">J</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'J%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">K</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'K%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">L</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'L%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">M</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'M%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">N</h3>
            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'N%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">O</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'O%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">P</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'P%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="<?php echo $fetch_coun['name'];?>" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="<?php echo $fetch_coun['name'];?>" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">Q</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'L%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">R</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'R%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">S</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'S%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">T</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'T%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">U</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'U%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">V</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'V%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">Y</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'Y%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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

        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-9">

            <h3 class="caas_heading">Z</h3>

            <ul class="missionsCountries">
                <?php

                $getcountry = mysql_query("SELECT `id`,`name`,`flag` FROM `country` WHERE `name` LIKE 'Z%'");

                while($fetch_coun = mysql_fetch_array($getcountry))
                {
                    ?>
                    <li>
                        <div class="countryFlag">

                            <img alt="Afghanistan" src="img/flags/<?php echo $fetch_coun['flag'];?>.png" title="Afghanistan" id="  0">
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