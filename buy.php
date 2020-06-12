<body style="background:url(images/poop.png)">
<table>
<tr>
<th>Sno</th>
<th>Product name</th>
<th>Product price</th>
</tr>
<tr>
<td>
<?php
include('mydb3.php');
$i=0;
$query=mysqli_query($cnap,"select * from cakevsda67587sax56hg");
while($row=mysqli_fetch_array($query))
{   $i++;
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $row['pname'];?></td>
<td><?php echo $row['pprice'];?></td>
</tr>
<?php
}
?>
?>
</td>
</tr>
</table>
