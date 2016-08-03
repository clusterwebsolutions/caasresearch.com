<?php

include 'misc_files.php';

include 'header.php';

include 'menu.php';

?>

<div class="container content">

    <div class="row" >

        <div class="col-lg-9 col-sm-10 col-md-10 col-xs-10">


            <h3 class="caas_heading">Contact Us</h3>

            <div id="content">


                <div class="col-md-6">
                    <div class="profile-content">


                        <form role="form" action="enquiry_process.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                            </div>

                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="text" class="form-control" name="email" placeholder="Email" required="required">
                            </div>

                            <div class="form-group">
                                <label for="mobile">Mobile</label>
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                            </div>



                            <button type="submit" class="btn btn-success">Send Enquiry</button>
                        </form>

                    </div>
                </div>


            </div>


            <!--            <a href="#aboutModal" role="button" class="btn btn-success pull-right" data-toggle="modal">Read More</a>-->
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

<?php include 'footer.php';?>



</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</html>