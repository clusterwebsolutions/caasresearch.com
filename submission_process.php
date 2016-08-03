<?php
session_start();
include 'db_connect.php';

extract($_POST);

$user_id = $_SESSION['user_id'];
$generate_number =  rand(pow(10, 4-1), pow(10, 4)-1);
if(!empty($_FILES['document']['name']))
{

    $ext = explode('.',$_FILES['document']['name']);
    $extension = $ext[1];
    $document_name = $name.'_'.time().'.'.$extension;
    $full_local_path = 'documents/'.$document_name;
    move_uploaded_file($_FILES['document']['tmp_name'], $full_local_path);

}

mysql_query("INSERT INTO `papers` (`paper_id`,`user_id`,`name`, `category`, `title`, `abstract`, `document`) VALUES ('$generate_number','$user_id','$name', '$category', '$title', '$abstract', '$document_name');");

?>

<script type="text/javascript">

   window.location='paper_list.php';
</script>