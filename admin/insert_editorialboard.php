<?php

include '../db_connect.php';

extract($_POST);

if(!empty($_FILES['image']['name']))
{

    $ext = explode('.',$_FILES['image']['name']);
    $extension = $ext[1];
    $prof_image = $prof_name.'_'.time().'.'.$extension;
    $image = 'editorial_images/'.$prof_image;
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

}

mysql_query("INSERT INTO `editorial_board` (`prof_name`, `category`, `subject_spec`, `address`, `mobile`, `phone`, `email`, `website`,`image` ) VALUES ('$prof_name', '$category', '$subject_spec', '$address', '$mobile', '$phone', '$email', '$website','$image');");

?>

<script type="text/javascript">
    alert('Editorial Board added Sucessfully');
    window.location = 'editorial_board.php';
</script>