<!DOCTYPE html>
<link rel="stylesheet" href="main.css">
<body class="login1" >
<div  class="dia"  align="center">
<b>Jst A Byte!</b>
</div>
<form method="post">
<table align="center">
<tr>
<td style="color:white;font-family:gabriola" align="center">
<b style="font-size:14pt">Email--</b>
<br>
<input type="text" placeholder="Email ID" name="a" style="width:300px;height:30px;border:none;border-radius:10px">
</td>
</tr>

<tr>
<td style="color:white;font-family:gabriola" align="center" >
<b style="font-size:14pt">Password--</b>
<br>
<input type="text" placeholder="Password" name="b" style="width:300px;height:30px;border:none;border-radius:10px"> 
</td>
</tr>
<tr>
<td>
<button type="Submit" style="background:orange;color:white">Submit</button>
</td>
</tr>
</table>
</form>
</body>



















<?php
if(isset($_POST['a']))
{
	include('mydb3.php');
	session_start();
	$um=$_POST['a'];
	$up=$_POST['b'];
	$query=mysqli_query($cna,"select u_email,u_pass from xcjs23324nsnd3w1 where u_email='$um' and u_pass='$up'");
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