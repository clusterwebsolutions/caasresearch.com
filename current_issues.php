<?php

include 'misc_files.php';

include 'header.php';

include 'menu.php';

include 'db_connect.php';

extract($_GET);
?>

<div class="container content">

    <div class="row" >

        <div class="col-lg-9 col-sm-10 col-md-10 col-xs-10">
            <h3>Current Issues</h3>

            <?php

               $get_ci = mysql_query("SELECT * FROM `current_issues` WHERE `month`='$month' and `year`='$year' and `category`='$category'");

            $i=1;
            if(mysql_num_rows($get_ci)>0)
            {
            while($ci=mysql_fetch_array($get_ci))
            {

            ?>
            <div class="news_box">
                <div class="newsbox_header"><b><?php echo 'Volume '.$ci['volume'].' Issue '.$ci['volume'];?></b></div>
                <div class="row" style="padding: 10px;">
                    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
                        <h5><?php echo $ci['paper_title'];?></h5>
                        <span><?php echo $ci['paper_author'];?></span>

                        <h5 style="padding-top:30px ">DOI : </h5>

                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-4">
                    
                        <a href="admin/documents/<?php echo $ci['document'];?>"><img src="img/pdf_button24.png" class="img-responsive"></a>

                    </div>
                </div>

            </div>

            <?php
            }
            }
            else
            {
            ?>
                <div class="row" style="padding: 10px;">
                    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8">
                       <span style="color: red">No Issues Found...</span>
                    </div>


                </div>
            <?php
            }
            ?>

        </div>


<!--        <div class="col-lg-3 col-sm-2 col-md-2 col-xs-2 ">-->
<!--            <div class="news_box">-->
<!--                <div class="newsbox_header"><b>Newslater</b></div>-->
<!---->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="news_box">-->
<!--                <div class="newsbox_header"><b>Newslater</b></div>-->
<!---->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="news_box">-->
<!--                <div class="newsbox_header"><b>Newslater</b></div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
    </div>




</div>

<?php include 'footer.php';?>

</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>