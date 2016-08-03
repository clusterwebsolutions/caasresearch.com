<?php
include '../db_connect.php';
extract($_POST);

if(!empty($_FILES['image']['name']))
{
    $del_filequery = mysql_query("SELECT * FROM `editorial_board` WHERE `id` = '$id'");
    $get_file = mysql_fetch_assoc($del_filequery);
    $del_filename = $get_file['image'];
    unlink($del_filename);

    $ext = explode('.',$_FILES['image']['name']);
    $extension = $ext[1];
    $image = $prof_name.'_'.time().'.'.$extension;
    $full_local_path = 'editorial_images/'.$image;
    move_uploaded_file($_FILES['image']['tmp_name'], $full_local_path);

    mysql_query("UPDATE `editorial_board` SET  `prof_name`='$prof_name',`category`='$category',`subject_spec`='$subject_spec',`phone`='$phone',`email`='$email',`address`='$address',`mobile`='$mobile',`website`='$website',`image`='$account_number',`image` = '$full_local_path' WHERE `id`='$id' ");


}

else{

mysql_query("UPDATE `editorial_board` SET  `prof_name`='$prof_name',`category`='$category',`subject_spec`='$subject_spec',`phone`='$phone',`email`='$email',`address`='$address',`mobile`='$mobile',`website`='$website',`image`='$account_number' WHERE `id`='$id' ");

}
?>

<script type="text/javascript">

    alert('Editorial Board Updated Successfully.');
    window.location='editorial_board.php';
</script>
