<?php include("DBConnect.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Amaclone</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>
		tr,td,a{font-weight:bold;text-decoration:null;}
		table{margin-top:100px; }
	</style>
</head>
<!--body background="http://webneel.com/wallpaper/sites/default/files/images/10-2017/37-rain-wallpaper-vanerich.jpg"-->
<body background="https://thumbs.dreamstime.com/z/handmade-pumpkin-autumn-leaves-background-cute-colorful-out-felt-light-brown-wooden-lots-copy-space-82543519.jpg">

<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="dashboard.php" class="navbar-brand">Oasis</a>
			</div>
<ul class="nav navbar-nav navbar-right">
<li><a href="index.php">log out</a></li>
</ul>
</div>
</div>
</br>
</br>
</br>		
		
	


<?php
include("dbconnect.php");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
		echo "<table border=1 bordercolor= '#000099' background-color:'#ffb3d9' style='font-size:20px' cellspacing='10' cellpadding='10' align='center' width='600px' height='400px'><tr><th>product_id</th><th>product_title</th><th>QTY</th><th>add stock</th></tr>   ";
	while($row = mysqli_fetch_assoc($result)) 
	{$xyz=$row[user_id];
	
		echo "<tr><td>".$row[product_id]."</td>";
		echo "<td>".$row[product_title]."</td>";
		echo "<td>".$row[qty]."</td>";
		echo "<td><a href='addstock.php?product_id=".$row[product_id]."'>ADD</a></td>";
	}echo "</table>";
}
mysqli_close($conn);

?>




</body>
</html>

