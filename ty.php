<!DOCTYPE html>
<link rel="stylesheet" href="main.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<title>LOGIN FORM</title>
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
<input type="text" placeholder="Email ID" autocomplete="off" name="a" style="width:300px;height:30px;border:none;border-radius:10px">
</td>
</tr>

<tr>
<td style="color:white;font-family:gabriola" align="center" >
<b style="font-size:14pt">Password--</b>
<br>
<input type="password" placeholder="Password" name="b" autocomplete="off" style="width:300px;height:30px;border:none;border-radius:10px"> 
</td>
</tr>
<tr>
<td>
<button type="Submit" style="background:orange;color:white;border:none;height:40px;width:170px;border-radius:10px;font-size:15pt;margin-left:60px">Submit</button>
</td>
</tr>
<tr>
<td align="right" >
<a href="formm.php" style="background:white;border-radius:4px;font-size:12pt;color:blue">Haven<sup>'</sup>t create account?Create account--</a>
</td>
</tr>
<tr>
<td align="right">
<a href="index.php" style="background:white;border-radius:4px;font-size:12pt;color:blue">Go to Home Page</a>
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
	$umaillog=$_POST['a'];
	$upass=$_POST['b'];
	$query=mysqli_query($cnap,"select u_email,u_pass from xcjs23324nsnd3w1 where u_email='$umaillog' and u_pass='$upass'");
	$count=mysqli_num_rows($query);
	
	if($count==1)
	{
		$row=mysqli_fetch_assoc($query);
		$umail=$row['u_email'];
		$_SESSION['login_session']=$umail;
		header('location:welcome.php');
	}
	

else
{header('location:notprocess.php');
	echo"Login Failed";
}
}
?>
