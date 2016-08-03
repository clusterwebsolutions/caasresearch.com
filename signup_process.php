<?php

include 'db_connect.php';

extract($_POST);

mysql_query("INSERT INTO `users` (`user_name`, `password`, `mobile_number`, `email`, `categories`, `institution`) VALUES ('$name', '$password', '$mobile', '$email', '$categories', '$institution');");
?>

<script type="text/javascript">

    window.location='login.php';
</script>