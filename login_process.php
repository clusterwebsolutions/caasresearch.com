
<?php
session_start();
include('db_connect.php');


$errors = array(); //To store errors
$form_data = array(); //Pass back the data to `form.php`

extract($_POST);


if(mysql_num_rows(mysql_query("select * from users where email='$email' and password='$password'"))>0)
{
    $user_details=mysql_fetch_assoc(mysql_query("select * from users where email='$email' and password='$password'"));
    $user_id=$user_details['id'];
    $user_name=$user_details['user_name'];
    $_SESSION['user_name']=$user_name;
    $_SESSION['user_id']=$user_id;
    $form_data['success'] = true;
    $form_data['posted'] = 'Success';

}
else
{

    $form_data['success'] = false;
    $errors['name'] = 'Email id or password Incorrect.';
    $form_data['errors']  = $errors;


}

echo json_encode($form_data);

//$errors = array(); //To store errors
//$form_data = array(); //Pass back the data to `form.php`
//extract($_POST);
//$email_query = mysql_query("SELECT * FROM `bsi_admin` WHERE  `email` = '$name'");
//
//
//if(mysql_num_rows($email_query)!=0)
//{
//    $pass_query = mysql_fetch_assoc($email_query);
//    $password = md5($pass_query['pass']);
//    $form_data['success'] = true;
//    $form_data['posted'] = $password.'Email Sent Successfully';
//}
//else
//{
//    $form_data['success'] = false;
//    $errors['name'] = 'Email Not Found.';
//    $form_data['errors']  = $errors;
//}
//
//
//echo json_encode($form_data);
?>

