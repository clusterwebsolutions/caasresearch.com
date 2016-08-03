<?php

include 'db_connect.php';
extract($_GET);
$sql = "DELETE FROM `clients` WHERE `id` = '$id'";
mysql_query($sql);

?>
<script>
    window.top.window.location = "clients.php";
</script>
