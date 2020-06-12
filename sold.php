<title>Payment</title>
<link rel="stylesheet" href="css/all.css">
<body style="background:rgb(216,216,216)">
<?php

include('mysession.php');


?>
<table style="height:500px;width:675px;background:white;border:solid;border-color:rgb(53,124,130);border-radius:13px;box-shadow:black 15px 15px 15px" align="center">
<tr>
<td style="background:rgb(24,143,255);color:white;width:675px;border:none;font-family:gabriola;font-size:30pt" align="center">
Hey,<?php echo"$name"; ?>
</td>
</tr>
<tr>
<td>

<tr>
<td>
<form method="post">

<b>Username:</b><input type="text" Placeholder="UserName" autocomplete="off" name="ui" style="margin-left:20px;height:30px;width:200px;border-radius:14px"><br><br>
<b>Token no.</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" autocomplete="off" Placeholder="ID" name="ssa" style="height:30px;width:200px;border-radius:14px"><br><br>
<b>Product Name</b><input type="text" Placeholder="Product Name" name="sas"  autocomplete="off" style="height:30px;width:200px;border-radius:14px"><br><br>
<b>Quantity NO.:</b><input type="number" Placeholder="Quantity" name="aqs"  autocomplete="off" style="height:30px;width:200px;border-radius:14px"><br><br>
<button type="submit" style="height:30px;width:90px;border:solid;border-radius:10px;border-width:1px;border-color:black"><b>SUBMIT</b></button>
</form>
<?php
include('mydb3.php');
if(isset($_POST['ui']))
{
	$ui=$_POST['ui'];
	$ssa=$_POST['ssa'];
	$sas=$_POST['sas'];
	$aqs=$_POST['aqs'];
	mysqli_query($cnap,"insert into nnkgdg7idjbcdd8s6fsad6(u_token,product,username,Quantity)values('$ssa','$sas','$ui','$aqs')");
	
	
}







?>
</td>
</tr>






<tr>
<td>
<b style="font-family:gabriola;font-size:20pt;color:blue">We Prefer.....</b>
</td>
</tr>


<tr>
<td>
<b style="font-family:gabriola;font-size:20pt;margin-left:280px">Cash On Delivery</b></a>
</td>
</tr>
<tr>
<td>

<a href="cod.php" style="font-family:gabriola;font-size:20pt;margin-left:330px">Next</a>

</td>
</tr>
</table>
</body>