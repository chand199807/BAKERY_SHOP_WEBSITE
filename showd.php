<link rel="stylesheet" href="hl.css">
<link rel="stylesheet" href="css/all.css">
<title>USer Details</title>
<body class="we">


<form method="post" align="center-left">
<span style="color:rgb(189,26,112);font-family:gabriola;font-size:30pt">Search record by your username:<input type="text" autocomplete="off" name="nn" style="width:300px;height:30px;border-radius:10px">
<button type="submit" style="background:rgb(36,189,59);width:150px;height:50px;border-radius:10px"><b style="color:white;font-family:gabriola;font-size:17pt;border:none">Search</b></button>
</form>
<br>
<?php
if(isset($_POST ['nn']))
{
	$nn=$_POST['nn'];

?>
<table border="0px">

<?php
include('mydb3.php');
$i=0;
$query=mysqli_query($cnap,"select * from xcjs23324nsnd3w1 where u_username='$nn'");
while($row=mysqli_fetch_array($query))
{   $i++;
?>
<tr>
<td>
<i class="fas fa-user"></i>
</td>
</tr>
<tr>
<td style="border:none;font-family:gabriola;font-size:20pt;color:black">Sr. no.---<b><?php echo $row['Sno'];?></b></td></tr>
<tr><td style="border:none;font-family:gabriola;font-size:20pt;color:black">Token---<b><?php echo $row['u_token'];?></b></td></tr>
<tr><td style="border:none;font-family:gabriola;font-size:20pt;color:black">Username---<b><?php echo $row['u_username'];?></b></td></tr>
<tr><td style="border:none;font-family:gabriola;font-size:20pt;color:black">Address---<b><?php echo $row['u_address'];?></b></td></tr>
<tr><td style="border:none;font-family:gabriola;font-size:20pt;color:black">Gender---<b><?php echo $row['gender'];?></b></td></tr>
<tr><td style="border:none;font-family:gabriola;font-size:20pt;color:black">Mobile no.---<b><?php echo $row['u_mobile'];?></b></td></tr>

</tr>
<tr>
<td>
<a href="welcome.php" style="font-family:gabriola;font-size:20pt">Back!</a>
</td>
</tr>
<?php
}
?>
</table>
<?php
}
?>

















</body> 