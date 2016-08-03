
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->

<script type="text/javascript">

    $(document).ready(function() {
        $('form').submit(function(event) { //Trigger on form submit
            $('#name + .throw_error').empty(); //Clear the messages first
            $('#success').empty();

            //Validate fields if required using jQuery

            var postForm = { //Fetch form data
                'name'     : $('input[name=name]').val() //Store name fields value

            };

            $.ajax({ //Process the form using $.ajax()
                type      : 'POST', //Method type
                url       : 'process.php', //Your form processing file URL
                data      : $('#postForm').serialize(), //Forms name
                dataType  : 'json',
                success   : function(data) {
                    if (!data.success) { //If fails
                        if (data.errors.name) { //Returned if any error from process.php
                            $('.throw_error').fadeIn(1000).html(data.errors.name); //Throw relevant error
                        }
                    }
                    else {
                        $('#success').fadeIn(1000).append('<p>' + data.posted + '</p>'); //If successful, than throw a success message
                    }
                }
            });
            event.preventDefault(); //Prevent the default submit
        });
    });

</script>

<form method="post" name="postForm" id="postForm">
    <ul>
        <li>
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="Bruce Wayne">
            <input type="text" name="password" id="password" placeholder="Bruce Wayne">
            <span class="throw_error"></span>
        </li>
    </ul>
    <input type="submit" value="Send" />
</form>
<div id="success"></div>
