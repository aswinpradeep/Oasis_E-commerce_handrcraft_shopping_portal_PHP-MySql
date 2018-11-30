<?php include("dbconnect.php");?>
<html>
	<head>
	<meta charset="utf-8">
	<title>Oasis</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<style>
			.div1 {
					background-color: #adadeb;
				    width: 600px;
				    border:3px solid grey;
				    padding: 25px;
				    margin: 25px;
				    margin-left:25%;
				    margin-top:15%;
			     }
				 table,tr,td{font-weight:bold;text-decoration:null;}
				</style>
		</style>
		<body background="https://blog.visme.co/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-013.jpg">
	 <div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="dashboard.php" class="navbar-brand">Oasis</a>
			</div>

			
		</div>
	</div>
			<div class="div1" ><form method="post" enctype="multipart/form-data" action="addproductnw.php"><table align="center" cellpadding=10>
					
					<tr><td>product_id</td><td><input type="number" name="product_id" disabled></td></tr>
					<tr><td>product_cat</td><td><input type="text" name="product_cat" value="<?php echo $_GET['cat_id']; ?>"></td></tr>
					<tr><td>product_title</td><td><input type="text" name="product_title"></td></tr>
					<tr><td>product_price</td><td><input type="number" name="product_price"></td></tr>
					<tr><td>qty</td><td><input type="number" name="qty"></td></tr>
					<tr><td>product_desc</td><td><input type="text" name="product_desc"></td></tr>
					<tr><td>product_image</td><td><input name="image" accept="image/jpeg" type="file"></td></tr>
					<tr><td>product_keywords</td><td><input type="text" name="product_keywords"></td></tr>
					<tr><td colspan=2 align="center"><input type="submit" name="submit"></td></tr>

			</form ></table></div>	
				<?php
					if(isset($_POST["submit"]))
					{
						$product_id=$_POST["product_id"];
						$product_cat=$_POST["product_cat"];
						$product_title=$_POST["product_title"];
						$product_price=$_POST["product_price"];
						$qty=$_POST["qty"];
						$product_desc=$_POST["product_desc"];
						move_uploaded_file($_FILES["image"]["tmp_name"],"assets/prod_images/" . $_FILES["image"]["name"]);
						$file=$_FILES["image"]["name"];
						//$product_image=$_POST["product_image"];
						$product_keywords=$_POST["product_keywords"];
						//$product_brand=$_POST["product_brand"];
						$sql = "INSERT INTO products VALUES( NULL,'$product_cat','$product_title','$product_price',$qty,'$product_desc','$file','$product_keywords')";
						$result = mysqli_query($conn, $sql);
						if($result!=1) {
							echo "<center><div class='fail-msg'><a>Adding New book Failed, Please Try Again!</a></div></center>";
						}
						else{
							echo "<center><div class='suc-msg'><a>book Added Successfully</a></div></center>";
						}
					}
					?>


	</body>
</html>

