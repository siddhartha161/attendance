<?php
require_once('auth.php');
require_once('../com/connection.php');
$username=$_SESSION['SESS_FIRST_NAME'];
$querysk="UPDATE faculty_login SET skid='1' WHERE user_name='$username'";
$execsk=mysql_query($querysk);
if($querysk)
{
	header("Location:home.php?skid=1");
}
else
{
	header('Location:enter-rec-email.php?errid=1');
}
?>
