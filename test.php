<?php

include 'misc_files.php';

include 'header.php';


?>

<style type="text/css">
    /* Global */


    img { max-width:100%; }

    a {
        -webkit-transition: all 150ms ease;
        -moz-transition: all 150ms ease;
        -ms-transition: all 150ms ease;
        -o-transition: all 150ms ease;
        transition: all 150ms ease;
    }

    a:hover {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
        filter: alpha(opacity=50); /* IE7 */
        opacity: 0.6;
        text-decoration: none;
    }



    .thumbnails li> .fff .caption {
        background:#fff !important;
        padding:10px;

    }

    .fff
    {
        border: 1px solid #ccc;
        min-height: 330px !important;
    }

    /* Page Header */
    .page-header {
        background: #f9f9f9;
        margin: -30px -40px 40px;
        padding: 20px 40px;
        border-top: 4px solid #ccc;
        color: #999;
        text-transform: uppercase;
    }

    .page-header h3 {
        line-height: 0.88rem;
        color: #000;
    }

    ul.thumbnails {
        margin-bottom: 0px;
    }



    /* Thumbnail Box */
    .caption h4 {
        color: #444;
    }

    .caption p {
        color: #999;
    }



    /* Carousel Control */
    .control-box {
        text-align: right;
        width: 100%;
    }
    .carousel-control{
        background: #666;
        border: 0px;
        border-radius: 0px;
        display: inline-block;
        font-size: 34px;
        font-weight: 200;
        line-height: 18px;
        opacity: 0.5;
        padding: 4px 10px 0px;
        position: static;
        height: 30px;
        width: 15px;
    }



    /* Mobile Only */
    @media (max-width: 767px) {
        .page-header, .control-box {
            text-align: center;
        }
    }
    @media (max-width: 479px) {
        .caption {
            word-break: break-all;
        }
    }


    li { list-style-type:none;}

    ::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
    ::-moz-selection { background: #ff5e99; color: #FFFFFF; }

    h4{
        font-size: 14px !important;
    }

    .content p {
        line-height: 20px !important;
        text-align: none !important;
    }

</style>

<div class="container content">

<br>

<h3> Our Team</h3>

<h3 class="caas_heading"><span aria-hidden="true" class="" ></span> Industrial Research</h3>


<div class="row">

    <div class="col-xs-12">

        <div class="carousel slide" id="myCarousel1">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" width="360" height="240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr.  Jawahar Anand M.Tech</h4>
                                    <p>Research Area: Quality control technical research (Leather Technology)</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr.B.Vijaya Ramnath, Ph.D</h4>
                                    <p>Research Area:  Mechanical Engineering & Alternative energy Research</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr.S.N.KArthick ,PhD</h4>
                                    <p>Research Area: Materials science, Power source</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr V.CYRIL RAJ Ph.D </h4>
                                    <p>Research Area :  Network Security.</p>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div><!-- /Slide1 -->
                <div class="item">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr. S. Dinesh Kirupha PhD </h4>
                                    <p>Research Area: Organic Chemistry</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr.J. Subash Chandra Bose, PhD</h4>
                                    <p>Research Area :  Computer science</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Ms. S.Vennila  M.Sc( Computer Science)</h4>
                                    <p>Research Area: Networking Technology</p>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div><!-- /Slide2 -->

            </div>


            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel1" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel1" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                </ul>
            </nav>
            <!-- /.control-box -->

        </div><!-- /#myCarousel -->

    </div>

</div>

<h3 class="caas_heading"><span aria-hidden="true" class="" ></span> Socio Economic Research</h3>


<div class="row">

    <div class="col-xs-12">

        <div class="carousel slide" id="myCarousel2">
            <div class="carousel-inner">

                <div class="item active">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" width="360" height="240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. P. Senthil Kumar MBA</h4>
                                    <p>Research Area: Socio Economy & Public Policy</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr.Adidya Poyharaju MS</h4>
                                    <p>Research Area: Transport Management</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr. Sharath Mandal PhD</h4>
                                    <p>Research Area : Anthropometric Research  </p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr.R.Pandiyan PhD</h4>
                                    <p>Research Area : Human interaction with Technology<br></p>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div><!-- /Slide1 -->


                <div class="item">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr.Vel Vizhi PhD</h4>
                                    <p>Research Area : Women & Child issues</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4> Dr.Shanthi Gajendran PhD</h4>
                                    <p>Research Area: Unorganized sector  </p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr.Saravanan Ponnusamy MA</h4>
                                    <p>Research : Public Policy & Public Affairs</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mrs. RamaGanesh M.Sc</h4>
                                    <p>Research Area : Corporate social Responsibility</p>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div><!-- /Slide2 -->

                <div class="item">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4> Mr. Sanjay Kumar Kashyap</h4>
                                    <p>Research Area : Insurance and Society</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4> Mrs.Bhuvaneshwari chinnadurai M.A</h4>
                                    <p>Research Area: Primary education system </p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mrs. Sharmila senthil kumar MBA</h4>
                                    <p>Research Area :  Money Laundering ,Culture and women development</p>

                                </div>
                            </div>
                        </li>


                    </ul>
                </div><!-- /Slide2 -->

            </div>



        </div>


        <nav>
            <ul class="control-box pager">
                <li><a data-slide="prev" href="#myCarousel2" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                <li><a data-slide="next" href="#myCarousel2" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
            </ul>
        </nav>
        <!-- /.control-box -->

    </div><!-- /#myCarousel -->

</div>



<h3 class="caas_heading"><span aria-hidden="true" class="" ></span> Intellectual Property Rights</h3>


<div class="row">

    <div class="col-xs-12">

        <div class="carousel slide" id="myCarousel5">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" width="360" height="240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. Murugan,M.L.DPIR , Advocate, India</h4>
                                    <p>Research Area: Intellectual Property Rights ,Trade mark</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr.Sakthivel Bsc.B.L, Advocate , India</h4>
                                    <p>Research Area: Geographical Indicator</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr. Venkatesan PhD</h4>
                                    <p>Research Area: IPR &Trade Mark</p>

                                </div>
                            </div>
                        </li>



                    </ul>
                </div><!-- /Slide1 -->

            </div>


            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel3" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel3" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                </ul>
            </nav>
            <!-- /.control-box -->

        </div><!-- /#myCarousel -->

    </div>

</div>


<h3 class="caas_heading"><span aria-hidden="true" class="" ></span> Psephological Research</h3>


<div class="row">

    <div class="col-xs-12">

        <div class="carousel slide" id="myCarousel4">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" width="360" height="240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. Senthil Kumar</h4>
                                    <p>Research Area: Senior Strategist , Psephologist</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr Milind rao Alok</h4>
                                    <p>Research Area: Micro Management Poling station</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. Jagadeesn MBA</h4>
                                    <p>Research Area: Micro Management Electoral Roll</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4> Mr. Ganesh Moorthy MS (UK) </h4>
                                    <p>Research Area: Scheduling Psephologist<br></p>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div><!-- /Slide1 -->

                <div class="item">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. Gopinath  MBA </h4>
                                    <p>Research Area: Strategist –Electronic Media</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. Prakash</h4>
                                    <p>Research Area : Strategist -Print & Outdoor  Media</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Ms.Sharmila Senthil Kumar  MBA</h4>
                                    <p>Research Area: DATA Interpretation</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. Veera Gowtham  MBA</h4>
                                    <p>Research Area: Psephological survey – On field</p>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div><!-- /Slide2 -->

                <div class="item">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Amith Khurana MBA </h4>
                                    <p>Research Area: Psephological Survey – Participation method</p>

                                </div>
                            </div>
                        </li>


                    </ul>
                </div><!-- /Slide2 -->


            </div>


            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel4" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel4" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                </ul>
            </nav>
            <!-- /.control-box -->

        </div><!-- /#myCarousel -->

    </div>

</div>


<h3 class="caas_heading"><span aria-hidden="true" class="" ></span> International Diplomacy</h3>

<div class="row">

    <div class="col-xs-12">

        <div class="carousel slide" id="myCarousel2">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" width="360" height="240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. Senthil Kumar</h4>
                                    <p>Research Area: International Security issues, UN, US, Europe Relations with Rest of the Power Emerging Powers, Regional Blogs</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. Amith Jha</h4>
                                    <p>Research Area: ASEAN & African Studies</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr. Milind rao alok</h4>
                                    <p>Research Area: US studies, South American Studies </p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Mr . Nithin Jain </h4>
                                    <p>Research Area:  East Asian Studies<br></p>

                                </div>
                            </div>
                        </li>

                    </ul>
                </div><!-- /Slide1 -->


            </div>


            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel2" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel2" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                </ul>
            </nav>
            <!-- /.control-box -->

        </div><!-- /#myCarousel -->

    </div>

</div>



<h3 class="caas_heading"><span aria-hidden="true" class="" ></span> Environment & Climate Change</h3>

<div class="row">

    <div class="col-xs-12">

        <div class="carousel slide" id="myCarousel2">
            <div class="carousel-inner">
                <div class="item active">
                    <ul class="thumbnails">

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" width="360" height="240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4>Dr. L. Ramesh B.E., M. Tech, MBA, Ph.D., MISTE , AMIE,MIET</h4>
                                    <p>Research Area : Environmental Economics</p>

                                </div>
                            </div>
                        </li>

                        <li class="col-sm-3">
                            <div class="fff">
                                <div class="thumbnail">
                                    <a href="#"><img src="http://placehold.it/360x240" alt=""></a>
                                </div>
                                <div class="caption">
                                    <h4> Dr.V.Shanthil Gajendran</h4>
                                    <p>Research Area : Environmental Economics</p>

                                </div>
                            </div>
                        </li>



                    </ul>
                </div><!-- /Slide1 -->


            </div>


            <nav>
                <ul class="control-box pager">
                    <li><a data-slide="prev" href="#myCarousel2" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
                    <li><a data-slide="next" href="#myCarousel2" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>
                </ul>
            </nav>
            <!-- /.control-box -->

        </div><!-- /#myCarousel -->

    </div>

</div>



</div>

<?php include 'footer.php';?>

</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: false
        })
    });
</script>

</html>