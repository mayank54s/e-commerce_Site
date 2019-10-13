<?php
require 'common.php';
if (isset($_SESSION['email'])) 
    {   
    header('location: index.php'); 
    } 

$old_pass= $POST['old_password'];
$old_pass=mysqli_real_escape_string($con,$old_pass);
$old_pass= MD5($old_pass);

$new_pass= $POST['new_password'];
$new_pass=mysqli_real_escape_string($con,$new_pass);
$new_pass= MD5($new_pass);

$retypepass= $POST['retypepassword'];
$retypepass=mysqli_real_escape_string($con,$retypepass);
$retypepass= MD5($retypepass);

if(strlen($new_pass)<8)
{header('location: settings.php?error=Password cannot be less than 8 character
');}

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$orig_pass = $row['password'];

if($new_pass!=$retypepass)
{header('location: settings.php?error=The two passwords don\'t match ');}
else
{
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated Successfully');
    } else
        header('location: settings.php?error=Wrong Old Password.');
}  ?>

