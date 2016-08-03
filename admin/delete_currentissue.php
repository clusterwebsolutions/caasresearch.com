<?php

include '../db_connect.php';
extract($_GET);
$sql = "DELETE FROM `current_issues` WHERE `id` = '$id'";
mysql_query($sql);

?>
<script>
    window.top.window.location = "current_issues.php";
</script>
