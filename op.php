
<title>Order List</title>
<link rel="stylesheet" href="lastt.css">
<body class="bnh">
<form method="post" >
<table style="border:none">
<tr>
<td style="font-family:gabriola;font-size:50pt;text-shadow:yellow 6px 6px 6px;color:white" align="center">
ORDER US!
</td>
</tr>
<tr>
<td>
<span style="color:white;font-size:15pt;margin-left:10px;">Username:</span>&nbsp;&nbsp;
<input type="text" autocomplete="off" Placeholder="USERNAME" name="a" style="height:30px;width:290px;border:solid;border-color:white;border-radius:4px">
</td>
</tr>

<tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Token:</span>&nbsp;&nbsp;
<input type="text" autocomplete="off" Placeholder="Token" name="b" style="margin-left:30px;height:30px;width:290px;border:solid;border-color:white;border-radius:4px">
</td>
</tr>

<tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Address:</span>&nbsp;&nbsp;
<input type="text" autocomplete="off" Placeholder="Address"  name="d" style="margin-left:15px;height:30px;width:290px;border:solid;border-color:white;border-radius:4px">
</td>
</tr>
<tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Mobile No.:</span>&nbsp;&nbsp;
<input type="Number" autocomplete="off" Placeholder="Mobile no." name="e" style="margin-left:-9px;height:30px;width:290px;border:solid;border-color:white;border-radius:4px">
</td>
</tr>
<tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Email ID:</span>&nbsp;&nbsp;
<input type="text"  autocomplete="off" Placeholder="Email"  name="f" style="margin-left:10px;height:30px;width:290px;border:solid;border-color:white;border-radius:4px">
</td>
</tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Desc.:</span>&nbsp;&nbsp;
<input type="text" autocomplete="off" Placeholder=""  name="k" style="margin-left:34px;height:30px;width:290px;border:solid;border-color:white;border-radius:4px">
</td>
</tr>
<td style="border:none">
<span style="color:white;font-size:15pt;margin-left:10px;">Quantity:</span>&nbsp;&nbsp;
<input type="number"autocomplete="off"  Placeholder="Quantity"  name="opq" style="margin-left:10px;height:30px;width:290px;border:solid;border-color:white;border-radius:4px">
</td>
</tr>








<br>
<br>
<tr>
<td>
Cost will be Told through Direct Call..as soon as you give order.
</td>

<tr>
<td align="center">

<button style="background:rgb(210,97,13);width:300px;height:50px;color:white;border-radius:10px" align="center" type="submit"><b style="font-size:20pt;font-family:gabriola">SUBMIT!</b></button>
</td>
</tr>
</table>
</form>
<?php
include('mydb3.php');
if(isset($_POST['a']))
{
	
	$a=$_POST['a'];
	$b=$_POST['b'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	$k=$_POST['k'];
	$opq=$_POST['opq'];
	
	
	mysqli_query($cnap,"insert into sadgjjsdg78687sghs7(username,token,address,mobile,email,specf,quantity)values('$a','$b','$d','$e','$f','$k','$opq')");
	header('location:welcome.php');
	
	
	
}














?>