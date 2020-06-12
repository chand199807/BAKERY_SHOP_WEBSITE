<title>ThanXX</title>
<link rel="stylesheet" href="last.css">
<body class="hjk">
<?php
include('mysession.php');


?>
<table align="center">
<tr>
<td style="font-family:gabriola;text-shadow:blue 4px 4px 4px;font-size:35pt;color:white">
<b>Thanxx....<?php echo"$name";?></b>
<br>
For Shopping With Us.<br>
</td>
</tr>
<tr>
<td>
<b style="font-family:gabriola;font-size:32pt;color:white;text-shadow:blue 4px 4px 4px">Your Order:</b>
<?php
include('mydb3.php');
$i=0;
$query=mysqli_query($cnap,"select product,username from nnkgdg7idjbcdd8s6fsad6 where username='$name'");

while($row=mysqli_fetch_array($query))
{   $i++;
?>
<table style="border:solid;border-width:2px;border-color:white;border-radius:8px" >
<tr>

<td style="font-family:gabriola;font-size:27pt;color:white;text-shadow:blue 3px 3px 3px;border:solid;border-width:2px;border-color:yellow"><?php echo $row['product'];?></td>
<br>
</tr>
</table>
<br>
<?php
}
?>







<br><br><br><br>
<b style="font-family:gabriola;font-size:32pt;color:white;text-shadow:blue 4px 4px 4px">Delivered at:</b><br>
<?php
include('mydb3.php');
$i=0;
$query=mysqli_query($cnap,"select u_address,u_mobile from xcjs23324nsnd3w1 where u_username='$name'");

while($row=mysqli_fetch_array($query))
{   $i++;
?>
<table style="border:solid;border-width:2px;border-color:white;border-radius:8px" align="right">
<tr>
<td style="font-family:gabriola;font-size:24pt;color:white;text-shadow:blue 3px 3px 3px"><?php echo "$name";?></td></tr>
<tr><td style="font-family:gabriola;font-size:24pt;color:white;text-shadow:blue 3px 3px 3px"><?php echo $row['u_address'];?></td></tr>
<tr><td style="font-family:gabriola;font-size:24pt;color:white;text-shadow:blue 3px 3px 3px;"><?php echo $row['u_mobile'];?></td></tr>
</tr>
</table>
<?php
}
?>

</td>
</tr>

<tr>
<td>
<a href="ty.php" style="text-decoration:none;font-family:gabriola;font-size:20pt;color:white;border:solid;border-width:3px;border-color:yellow">Logout?</a>
</td>
</tr>
<tr>
<td>
<a href="welcome.php" style="text-decoration:none;font-family:gabriola;font-size:20pt;color:white;border:solid;border-width:3px;border-color:yellow">Continue Shopping?</a>
</td>
</tr>





</table>
</body>