<?php 
include('mysession.php');
?>
<title>Welcome</title>
<link rel="stylesheet" href="swe.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<div class="container-fluid">
<!--container declaration start-->
<div class="row" style="background:rgb(0,123,255)">
<div class="col-sm-12">
<button class="btn btn-primary" style="width:100%"><b>Welcome,<?php echo "$name";?></b></button>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-dark" style="color:white;width:1350px;background:rgb(52,58,64);margin-left:-16px">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    
	<i class="fas fa-bars" style="color:white"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav col-sm-2">
       <div class="nav-item nav-link" style="color:white;font-family:gabriola;font-size:24pt"><b><i class="fas fa-user"></i></b></div>
    </div>
	<div class="navbar-nav col-sm-2">
       <div class="nav-item nav-link" style="color:yellow;font-family:gabriola;font-size:24pt"><b><a href="showd.php" style="color:yellow;text-decoration:none"><i class="fas fa-user">User Info</i></a></b></div>
    </div>
	<div class="navbar-nav col-sm-2">
       <div class="nav-item nav-link" style="color:yellow;font-family:gabriola;font-size:24pt"><b><a href="del.php" style="color:yellow;text-decoration:none">Order List</a></b></div>
    </div>
	
	
  </div>
</nav>
<table border="2px" style="border:dashed;border-color:black;width:1350px;margin-left:-16px">
<tr>
<td class="apl" align="center">
Cakes & Pasteries
</td>

<td class="apl" align="center">
Chocolates & Cookies
</td>
<td class="apl2" align="center">
Bread & Bun<sup>'</sup>s
</td>
</tr>
<tr>
<td style="background:rgb(243,190,243)" >
<a href="cakes.php"><img  src="images/c1.png" style="background:rgb(180,244,170);border-radius:300px;height:480px;width:440px;border:dashed;border-color:rgb(101,7,78);border-width:6px"></a>
</td>
<td style="background:rgb(180,244,170)">
<a href="chocolates.php"><img src="images/c2.jpg" style="background:rgb(243,190,243);border-radius:300px;height:480px;width:440px;border:dashed;border-color:rgb(24,65,7);border-width:6px"></a>
</td>
<td style="background:rgb(162,219,225)">
<a href="buns.php"><img   src="images/c3.jpg" style="background:rgb(162,219,225);border-radius:300px;height:480px;width:440px;border:dashed;border-color:rgb(14,111,116);border-width:6px"></a>
</td>

</tr>
<tr>
<td colspan="3" style="background:rgb(24,143,255)" align="center">
<a href="logout.php" style="color:white;font-family:gabriola;font-size:25pt;text-decoration:none">LOGOUT?</a>
</td>
</tr>