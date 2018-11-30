
<html>
	<head>
		<title></title>
		<style>
			.div {
    				background-color: lightgrey;
				    width: 800px;
				    border: 25px solid purple;
				    padding: 25px;
				    margin: 25px;
				    margin-left:25%;
				    margin-top:5%;
			     }zz
		</style>
	</head>
	<body>
	

			<?php 
include("dbconnect.php"); 				

	
				
				echo " <div align='center' class='divx'><table align='center' cellpadding=8'><form method='post'>    ";	
				echo "	<tr><td>ENTER QTY TO ADD</td><td><input type='number' name='qty'  required></td></tr>";
				
				echo "	<tr><td colspan=2 align=center><input type='submit' name='submit' value='ADD TO EXISTING QTY'></td></tr></form> </div>";
			


			
					if(isset($_REQUEST['submit']))
					{	$qty=$_POST["qty"];
						
						$sql = "update products set qty=qty+$qty where product_id='$_GET[product_id]'";
						//echo $sql;
						$result = mysqli_query($conn, $sql);
						if($result!=1) {
							echo "<center><div><a>editing book Failed, Please Try Again!</a></div></center>";
						}
						else{
							echo "<center><div><a>book updated Successfully</a></div></center>";
							header('location:stock.php');
						}
					}
				?>
	


	</body>
</html>

