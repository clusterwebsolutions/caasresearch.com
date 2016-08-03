<?php
session_start();
include('../db_connect.php');

extract($_POST);

$email=addslashes($email);
$password=addslashes($password);

if(mysql_num_rows(mysql_query("select * from `admin_users` where email='$email' and password='$password'"))>0)
{
    $admin_details=mysql_fetch_assoc(mysql_query("select * from `admin_users` where email='$email' and password='$password'"));
    $admin_id=$admin_details['id'];
    $admin_name=$admin_details['name'];
    $_SESSION['admin_name']=$admin_name;
    $_SESSION['admin_id']=$admin_id;

?>
<script>window.parent.window.location="dashboard.php";</script>
<?php
}
else
{
    $description = "Login Failed User Name : ".$login_name;

    ?>
    <script>window.parent.alert("Sorry !!! Invalid Login");</script>
    <script>window.parent.window.location="index.php";</script>
    <script>window.parent.document.getElementById('password').value="";</script>

<?php
}
?>
