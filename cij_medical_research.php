<?php
include 'db_connect.php';

include 'misc_files.php';

include 'header.php';

include 'menu.php';

?>

<div class="container content">

    <div class="row" >

        <div class="col-lg-9 col-sm-10 col-md-10 col-xs-10">
            <h3 class="caas_heading"> <span aria-hidden="true" class="glyphicon glyphicon-folder-open"></span>  CIJ of Medical Research</h3>
            <h4>About the Jounal</h4>
            <p> Our Parent organisation CAAS Management Research  Organises Conferences Every Year across the world & India with  Number of Scientific Societies,Publishers,National and international institutions.</p>
            <h4 class="caas_heading">Editorial Board</h4>
            <div class="panel-group" id="accordion">
                <?php
                    $get_editorialboard = mysql_query("SELECT * FROM `editorial_board` WHERE `category` = 1");

                if(mysql_num_rows($get_editorialboard)>0)
                {
                    $i=1;
                    while($fet_edit=mysql_fetch_array($get_editorialboard))
                    {

                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>"><?php echo $fet_edit['prof_name']?> <span class="glyphicon glyphicon-plus pull-right"></span></a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $i;?>" <?php if($i!=1){?>class="panel-collapse collapse"<?php }?>>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-10 col-sm-10 col-md-10 col-xs-10">
                                            <span style="">Prof Name : <?php echo $fet_edit['prof_name'];?></span><br>
                                            <span style="font-size:12px;">Subject & Specialization :  <?php echo $fet_edit['subject_spec'];?></span><br>
                                            <span style="font-size:12px;"style="">Mobile : <?php echo $fet_edit['mobile'];?></span><br>
                                            <span style="font-size:12px;"style="">Phone : <?php echo $fet_edit['phone'];?></span><br>
                                            <span style="font-size:12px;"style="">Email : <?php echo $fet_edit['email'];?></span><br>
                                            <span style="font-size:12px;"style="">Address : <?php echo $fet_edit['address'];?></span>

                                        </div>

                                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
                                            <?php
                                            if($fet_edit['image']!=''){
                                                ?>
                                                <img src="admin/<?php echo $fet_edit['image']?>" class="img-responsive">

                                            <?php
                                            }
                                            else{


                                                ?>
                                                <img src="img/no-profile-img.gif" class="img-responsive">
                                            <?php

                                            }
                                            ?>
                                        </div>
                                        <?php $i++;?>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                }
                else
                {
                    echo '<span style="color: red">No Editorial Board Found.</span>';
                }
                ?>


            </div>
            <h4 class="caas_heading">Current Issue</h4>
            <div class="container">
                <div class="row" >
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">2015</div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><a href="current_issues.php?category=1&&month=10&&year=2015"> Oct</a></div>



                </div>
            </div>

            <h4 class="caas_heading">Archives</h4>
            <div class="container">
                <div class="row" >
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">2015</div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><a href="archives.php">Jan</a> </div>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2"><a href="archives.php">Feb</a></div>


                </div>
            </div>

            <h4 class="caas_heading">Conferences</h4>
            <ul>
                <li>Link 1 </li>
                <li>Link 2</li>
                <li>Link 3</li>
            </ul>
            <h4 class="caas_heading">Submission</h4>
        </div>


        <div class="col-lg-3 col-sm-2 col-md-2 col-xs-2 ">
            <div class="news_box">
                <div class="newsbox_header"><b>Newslater</b></div>


            </div>

            <div class="news_box">
                <div class="newsbox_header"><b>Newslater</b></div>


            </div>

            <div class="news_box">
                <div class="newsbox_header"><b>Newslater</b></div>


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