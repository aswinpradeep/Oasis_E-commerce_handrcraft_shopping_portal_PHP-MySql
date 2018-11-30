<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oasis</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	
</head>
<body background="https://cdn2.bigcommerce.com/server1500/8eaf0/product_images/uploaded_images/birch-tree-wall-decal.jpg?t=1460657645">
	

	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="dashboard.php" class="navbar-brand">Oasis</a>
			</div>
<ul class="nav navbar-nav navbar-right">
<li>Hello,<?php session_start(); echo $_SESSION['uname']; ?><a href="index.php">log out</a></li>
</ul>
</div>
</div>
<div style="margin-top:200px;">
<table style=" background-color: #ffb3d9; border-width:0px; border-style:none;" align="center" cellspacing="3px" cellpadding="3px" width="400px" height="300px">
<tr><td></td></tr>
<tr><td align="center">
<form method="post" action="users.php">
<input type="submit" name="remove" value="Remove user/Edit previlege" style="width: 60%; padding: 9px 9px; margin: 8px 0; background-color:magenta; border: none; color: white;">
</form></td></tr>
<tr><td align="center">
<form method="post" action="stock.php">
<input type="submit" name="stock" value="View/Add stock of existing products" style="width: 60%; padding: 9px 9px; margin: 8px 0; background-color:magenta; border: none; color: white;">
</form></td></tr>
<tr><td align="center">
<form method="post" action="addpbyc.php">
<input type="submit" name="product" value="Add new product by category" style="width: 60%; padding: 9px 9px; margin: 8px 0; background-color:magenta; border: none; color: white;">

</form><br></td></tr>
</table>
</body>
</html>
