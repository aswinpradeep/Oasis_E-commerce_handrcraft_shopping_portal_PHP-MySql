<?php

 include('dbconnect.php');
$sql = "delete from user_info where user_id='$_GET[user_id]'";
$result= mysqli_query($conn,$sql);
if($result)
{
 header('Location: index.php');
}

?>




