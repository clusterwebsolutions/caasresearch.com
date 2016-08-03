<?php

include '../db_connect.php';
extract($_GET);
$sql = "DELETE FROM `editorial_board` WHERE `id` = '$id'";
mysql_query($sql);

?>
<script>
    window.top.window.location = "editorial_board.php";
</script>
