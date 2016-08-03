<?php

include 'db_connect.php';

include 'misc_files.php';

include 'header.php';

//include 'menu.php';
?>

<div class="container content">

    <div class="row" >

        <div class="col-lg-9 col-sm-10 col-md-10 col-xs-10 ">

            <div class="container">
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title">Sign In</div>
                            <div style="float:right; font-size: 80%; position: relative; top:-10px;color: #ffffff;"><a style="color: #ffffff;" href="#" onclick="$('#loginbox').hide(); $('#forgotbox').show()">Forgot password?</a></div>
                        </div>

                        <div style="padding-top:30px" class="panel-body" >


                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form id="loginform" class="form-horizontal" role="form" method="post" validation="validation">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="email" type="text" class="form-control" name="email" value="" placeholder="Email" required="required">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="required">
                                </div>



<!--                                <div class="input-group">-->
<!--                                    <div class="checkbox">-->
<!--                                        <label>-->
<!--                                            <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
<!--                                        <a id="btn-login" href="#" class="btn cass_button">Login  </a>-->
<!--                                        <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>-->


                                        <button id="btn-signin" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Sign in</button>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account!
                                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()" style="color: #408001">
                                                Sign Up Here
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="display: none;" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
                </div>

                <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px;"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" method="post">

                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="mobile" class="col-md-3 control-label">Mobile</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address" required="required">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="categories" class="col-md-3 control-label">Categories</label>
                                    <div class="col-md-9">
                                        <select class="form-control" name="categories" required="required" >
                                            <option value="" >Select Category</option>
                                            <option value="Under Graduation" >Under Graduation</option>
                                            <option value="Post Graduation" >Post Graduation</option>
                                            <option value="Research Scholar" >Research Scholar</option>
                                            <option value="Academision" >Academision</option>
                                        </select>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="institution" class="col-md-3 control-label">Institution</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="institution" placeholder="Institution" required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="confirm_password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Sign Up</button>

                                    </div>
                                </div>




                            </form>
                        </div>
                    </div>




                </div>


                <div id="forgotbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Login</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px;"><a id="signinlink" href="#" onclick="$('#forgotbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" method="post">

                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email *</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> Send</button>

                                    </div>
                                </div>




                            </form>
                        </div>
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
<script src="js/jquery-2.1.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $('#loginform').submit(function(event) { //Trigger on form submit

            $.ajax({ //Process the form using $.ajax()
                type      : 'POST', //Method type
                url       : 'login_process.php', //Your form processing file URL
                data      : $('#loginform').serialize(), //Forms name
                dataType  : 'json',
                success   : function(data) {
                    if (!data.success) { //If fails
                        if (data.errors.name) { //Returned if any error from process.php
                            $('#login-alert').fadeIn(1000).html(data.errors.name); //Throw relevant error
                        }
                    }
                    else {
                       window.location='profile.php';
                    }
                }
            });
            event.preventDefault(); //Prevent the default submit
        });
    });

</script>
</html>