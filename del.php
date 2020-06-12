<link rel="stylesheet" href="pl.css">
<body class="hjkl">
<?php
include('mysession.php');

?>



<?php
include('mydb3.php');
$i=0;
$query=mysqli_query($cnap,"select * from sadgjjsdg78687sghs7 where username ='$name'");
while($row=mysqli_fetch_array($query))
{   $i++;
?>
<table align="center">
<tr>
<td  style="font-family:gabriola;font-size:49pt;color:black;text-shadow:white 9px 9px 9px">
<b>YOUR ORDER LIST</b>
</td>
</tr> 
</table>
<table align="center" style="background:rgb(239,228,176);border:double;border-radius:13px">

<tr>
<td style="font-family:gabriola;font-size:29pt;color:black">USERNAME:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['username'];?></td></tr>
<tr><td style="font-family:gabriola;font-size:29pt;color:black">TOKEN   :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['token'];?></td></tr>
<tr><td style="font-family:gabriola;font-size:29pt;color:black">MOBILE  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['mobile'];?></td></tr>

<tr><td style="font-family:gabriola;font-size:29pt;color:">DESCRIPTION:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['specf'];?></td></tr>
<tr><td style="font-family:gabriola;font-size:29pt;color:black">Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['specf'];?></td></tr>
<table>
<?php
}
?>

<table align="center">
<tr>
<td>
<a href="welcome.php"><b>Back</b></a>
</td>
</tr>
</table>

















</body>