<?php include("DBConnect.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Oasis</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>
		tr,td,a{font-weight:bold;text-decoration:null;}
	</style>
</head>
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
<h2 align="center" style="font-size:30px;color:white;"><u>USERS</u></h2>


<?php
include("dbconnect.php");

$sql = "SELECT * FROM user_info";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
		echo "<table border=1 bordercolor= '#000099' background-color:'#ffb3d9' style='font-size:20px' cellspacing='10' cellpadding='10' align='center' width='600px' height='400px'><tr><th>user_id</th><th>EMAIL_ID</th><th>ROLE</th><th>MAKE ADMIN</th><th>REMOVE ADMIN</th><th>DELETE</th></tr>   ";
	while($row = mysqli_fetch_assoc($result)) 
	{$xyz=$row[user_id];
	echo "<br>" ;
		echo "<tr><td>".$row[user_id]."</td>";
		echo "<td>".$row[email]."</td>";
		echo "<td>".$row[role]."</td>";
		echo "<td><a href='editusr.php?user_id=".$row[user_id]."'>Make admin</a></td>";
		echo "<td><a href='editusr2.php?user_id=".$row[user_id]."'>remove admin</a></td>";
		echo "<td><a href='deleteusr.php?user_id=".$row[user_id]."'>delete</a></td>";	
	}echo "</table>";
}
mysqli_close($conn);

?>




</body>
</html>

