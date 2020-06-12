<center>
<body style="background:url('C:/xamp/htdocs/bakery/images/back1.jpg')">
<form method="post">

<span style="font-size:15pt;color:black">Username:</span><br>
<input type="text" name="a" autocomplete="off">
<br><span style="font-size:15pt;color:black">Password:</span><br>
<input type="password" name="b">
<br><br>
<button type="submit" style="height:40px;width:70px;color:black" class="btn btn-dark">Login</button>
</form>

<?php
if(isset($_POST['a']))
{
	include('mydb2.php');
	session_start();
	$uname=$_POST['a'];
	$upass=$_POST['b'];
	$query=mysqli_query($cn,"select u_email,u_pass from ad546hj9800 where u_email='$uname' and u_pass='$upass'");
	$count=mysqli_num_rows($query);
	if($count==1)
	{
		$row=mysqli_fetch_assoc($query);
		$umail=$row['u_email'];
		$_SESSION['login_session']=$umail;
		header('location:dashboard.php');
	}

else
{
	
	echo"Login Failed";
}
}
?>
