<?php
require 'common.php';
$email= mysql_eal_escape_string($con,$POST('email'));
$password=md5($password);
$select_query="select id,email from ecommerce where email=$email";
$select_query_result= mysql_query($con, $select_query) or die(mysql_error($con));
if(mysql_num_row($con,$select_query)==0)
{header('location: signup.php');
}
else
{$row=mysql_fetch_array($select_query_result);
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
}
header('loaction : products.php');
?>
