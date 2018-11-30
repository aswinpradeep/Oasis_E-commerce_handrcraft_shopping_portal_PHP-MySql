<html>
<head>

<meta charset="utf-8">
	<title>Oasis</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<style>
		tr,td,a{font-weight:bold;text-decoration:null;}
	</style>
</head>
<body >
<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="dashboard.php" class="navbar-brand">Oasis</a>
			</div>

			
		</div>
	</div>
<h1 align="center" style="font-size:60px;color:white;"><u>CATEGORY</u></h1>


<?php
include("dbconnect.php");

$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
		
	while($row = mysqli_fetch_assoc($result)) 
	{
		echo "<h2><a href='addproductnw.php?cat_id=".$row[cat_id]."'>".$row['cat_title']."</a></h2>";
	}
}
mysqli_close($conn);

?>

</body>
</html>

