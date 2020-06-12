<?php
session_start();
include('mydb3.php');
$user_mail=$_SESSION['login_session'];
$kquery=mysqli_query($cnap,"select * from xcjs23324nsnd3w1 where u_email='$user_mail'");

$row=mysqli_fetch_assoc($kquery);
$name=$row['u_username'];
if(!isset($_SESSION['login_session']))
{
	
	header('location:ty.php');
}
?>