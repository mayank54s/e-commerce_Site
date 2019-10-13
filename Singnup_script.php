<?php
require 'common.php';
$name= $POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$epassword=md5($password);
$contact= $POST['contact'];
$city=$POST['city'];
$address=$POST['address'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
}
if (strlen($password) < 8) {
  echo "Password should have at-least 8 characters";
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$select_query = "SELECT id, email, first_name FROM users where email='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if( mysqli_num_rows($select_query_result)>0 )
{
    echo " Email id already exists";
}
else
{
    $insert_query = "INSERT INTO ecommerce.users (name, email, password, contact, city, address) values ('$name', '$email', '$epassword', $contact,'$city' ,'$address')";
    $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    $key= mysqli_insert_id($con) ;
}
$_SESSION['email'] = $email;
$_SESSION['id'] = $key;
header('loaction : products.php');
?>
