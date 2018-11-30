<html>
    <head>
	<meta charset="utf-8">
	<title>Oasis</title>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	
	</head>
    <body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Oasis</a>
			</div>
<ul class="nav navbar-nav navbar-right">

</ul>
</div>
</div>
	
        <form method="post" action="log.php">
        <div id="adminpanel" class="panel" style= "text-align: center"><br>
		<table style=" background-color:#ffd9b3; border-width:0px; border-style:none;" align="center" cellspacing="3px" cellpadding="3px" width="400px">
		<tr>
		<td align="center">
        <strong><font color="grey" size="7">LOGIN</font></strong><br><br> <img src="http://pendidikankedokteran.net/images/icon/people-icon.png" style="width:300px;height:300px;"></td></tr>
        <tr><td align="center"><input type="text" name="email" placeholder="Username" style="width: 60%; padding: 9px 9px; margin: 8px 0; " id="usn" required></td></tr>
        <tr><td align="center"><input type="password" name="password" placeholder="Password" style="width: 60%; padding: 9px 9px; margin: 8px 0; " id="pwd" required></td></tr>
         <tr><td align="center"><input type="submit" name="submit" style="background-color:blue; border: none; color: white; padding: 16px 32px; text-decoration: none; margin: 4px 2px;cursor: pointer;"></td></tr></table>
        </div>			
        </form>
       <?php
             if(isset($_POST['submit']))
             { 
                 $email=$_POST['email'];
                 $password=$_POST['password'];
                 include("dbconnect.php");
                 $sql = " SELECT * FROM user_info where email='$email' && password='$password' ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                    $row=mysqli_fetch_array($result);
                    session_start();
				    $_SESSION['uid']=$row['user_id'];
                    $_SESSION['uname']=$row['first_name']; 
                    echo "Role::".$row['role'];
                    if($row['role']==1)
                    {
                        
                        header('location:dashboard.php');
                    }
                   else if($row['role']==0)
                    {
                        header('location:profile.php');
                    }
                }
                else
                {
                    echo "<h1>invalid credentials</h1>";

                }
                    
             }
             ?>
    </body>
</html>