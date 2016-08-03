<?php

include '../db_connect.php';

extract($_POST);

if(!empty($_FILES['document']['name']))
{

    $ext = explode('.',$_FILES['document']['name']);
    $extension = $ext[1];
    $document_name = $paper_title.'_'.time().'.'.$extension;
    $full_local_path = 'documents/'.$document_name;
    move_uploaded_file($_FILES['document']['tmp_name'], $full_local_path);

}

mysql_query("INSERT INTO `current_issues` (`category`, `paper_title`, `paper_author`, `month`, `year`, `volume`,`issue`, `document`) VALUES ('$category', '$paper_title', '$paper_author', '$month', '$year', '$volume','$issue', '$document_name');");
?>

<script type="text/javascript">
    alert('Current Issues Added Sucessfully');
    window.location = 'add_currentissues.php';
</script>