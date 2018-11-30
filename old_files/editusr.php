<?php

 include('dbconnect.php');
$sql = "update user_info set role=1 where user_id='$_GET[user_id]'";
$result= mysqli_query($conn,$sql);
if($result)
{
 header('Location: users.php');
}

?>




