<!DOCTYPE html>
<title>Sign UP For Account </title>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js "></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>





</head>
<body class="b1">
<form method="post">
<table  style="border:none;height:600px;width:450px;margin-top:20px;">
<tr>

<td align="center" style="font-family:gabriola;color:white;font-size:70pt">
<b>Jst A Byte!</b>
</td>

</tr>



<tr>
<td>
<table style="border:none">

<tr>
<td>
<span style="color:white;font-size:15pt;margin-left:10px;">Username:</span>&nbsp;&nbsp;
<input type="text" Placeholder="USERNAME" autocomplete="off" name="a" style="height:30px;width:290px;border:solid;border-color:white;border-radius:8px"><br>
</td>
</tr>
<tr>
<td>
<span style="color:white;font-size:15pt;margin-left:10px;">Password:</span>&nbsp;&nbsp;&nbsp;
<input type="password" Placeholder="Password" autocomplete="off" name="m" style="height:30px;width:290px;border:solid;border-color:white;border-radius:8px"><br>
</td>
</tr>
<tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">First name:</span>&nbsp;&nbsp;
<input type="text" Placeholder="First Name" autocomplete="off" name="b" style="margin-left:-3px;height:30px;width:290px;border:solid;border-color:white;border-radius:8px"><br>
</td>
</tr>
<tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Last name:</span>&nbsp;&nbsp;
<input type="text" Placeholder="Last Name" autocomplete="off" name="c" style="margin-left:-1px;height:30px;width:290px;border:solid;border-color:white;border-radius:8px"><br>
</td>
</tr>
<tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Address:</span>&nbsp;&nbsp;
<input type="text" Placeholder="Address"  name="d"  autocomplete="off" style="margin-left:17px;height:30px;width:290px;border:solid;border-color:white;border-radius:8px"><br>
</td>
</tr>
<tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Mobile No.:</span>&nbsp;&nbsp;
<input type="Number" Placeholder="Mobile no." name="e" autocomplete="off" style="margin-left:-9px;height:30px;width:290px;border:solid;border-color:white;border-radius:8px"><br>
</td>
</tr>
<tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Email ID:</span>&nbsp;&nbsp;&nbsp;
<input type="text" Placeholder="Email"  name="f" autocomplete="off" style="margin-left:10px;height:30px;width:290px;border:solid;border-color:white;border-radius:8px"><br>
</td>
</tr>
<br>
<br>
</table>
</td>
</tr>
<tr>
<td>
<table>
<span style="color:white;font-family:gabriola;font-size:17pt">GENDER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ab" style="border:solid;border-radius:8px;border-color:white" ></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
</table>
</td>
</tr>
<tr>
<td>
<span style="color:white;font-size:15pt" align="center">By clicking on button you Agree to the terms and conditions.</span>
</td>
</tr><tr>
<td align="center">

<button style="background:rgb(210,97,13);width:300px;height:50px;color:white;border-radius:10px" align="center" type="submit"><b style="font-size:20pt;font-family:gabriola">SUBMIT!</b></button>
</td>

</table>
</form>
<?php
include('mydb3.php');
if(isset($_POST['a']))
{
	$token=mt_rand(1300,567910);
	$dd=date('mdy');
	$final_token="JB".$dd.$token;
	$a=$_POST['a'];
	$m=$_POST['m'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	$ab=$_POST['ab'];
	
	mysqli_query($cnap,"insert into xcjs23324nsnd3w1(u_token,u_pass,u_username,u_first,u_last,u_address,u_mobile,u_email,gender)values('$final_token','$m','$a','$b','$c','$d','$e','$f','$ab')");
	header('location:index.php');
	
	
	
}














?>