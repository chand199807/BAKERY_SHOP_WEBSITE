
<form method="post">
Search record by token:<input type="text" name="nn">
<button type="submit">Search</button>
</form>
<table border="2px">
<tr>
<th>Sr. No.</th>
<th>Token</th>
<th>Name</th>
<th>Email</th>

</tr>
<?php
if(isset($_POST ['nn']))
{
	$nn=$_POST['nn'];


include('mydb3.php');

$i=0;
$query=mysqli_query($cnap,"select * from xcjs23324nsnd3w1 where u_token='$nn'");
while($row=mysqli_fetch_array($query))
{   $i++;
?>
<tr>
<td><?php echo $row['Sno'];?></td>
<td><?php echo $row['u_first'];?></td>
<td><?php echo $row['u_token'];?></td>
<td><?php echo $row['u_email'];?></td>

</tr>
<?php
}
?>
</table>
<br>
<br>

<br>
<?php

include('mydb3.php');
$i=0;
$query=mysqli_query($cnap,"select * from xcjs23324nsnd3w1 where u_token='$nn'");
while($row=mysqli_fetch_array($query))
{   $i++;
?>
<form method="post">
<table border="0px">
<tr>
<td>Full Name</td>
<td><input type="text" name="adf" value="<?php echo $row['u_first'];?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="bdf" value="<?php echo $row['u_email'];?>"></td>
</tr>
<tr>
<td>token</td>
<td><input type="text" name="cdf" value="<?php echo $row['u_token'];?>"></td>
</tr>

</table>
<button type="submit">Update</button>
</form>
<br><br>
 <?php
}
?>

<?php
}
?>
<br><br>
<form></form>
<br>
<?php
if(isset($_POST['adf']))
{
	include('mydb3.php');
	$adf=$_POST['adf'];
	$cdf=$_POST['cdf'];
	$bdf=$_POST['bdf'];
	mysqli_query($cnap,"update xcjs23324nsnd3w1 set u_name='$adf',u_email='$bdf' where u_token='$cdf' ");
	
	
	
}



?>
<table border="2px">
<tr>
<th>Sr. No.</th>
<th>Token</th>
<th>Name</th>
<th>Email</th>
</tr>
<?php
include('mydb3.php');
$i=0;

$query=mysqli_query($cnap,"select * from xcjs23324nsnd3w1 where u_token='$nn'  ");
while($row=mysqli_fetch_array($query))
{   $i++;
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['u_first'];?></td>
<td><?php echo $row['u_token'];?></td>
<td><?php echo $row['u_email'];?></td>
</tr>
<?php
}
?>
</table>








</body>
</html>