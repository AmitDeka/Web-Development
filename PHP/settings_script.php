<?php
// This page updates the user password
require("includes/common.php");

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

$old_pass = $_POST['old_password'];
$old_pass = mysqli_real_escape_string($con, $old_pass);
$old_pass = MD5($old_pass);

$new_pass = $_POST['new_password'];
$new_pass = mysqli_real_escape_string($con, $new_pass);
$new_pass = MD5($new_pass);

$rep_pass = $_POST['repnew_password'];
$rep_pass = mysqli_real_escape_string($con, $rep_pass);
$rep_pass = MD5($rep_pass);

$query = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);

$orig_pass = $row['password'];

//check old password and password taken from db
if ($new_pass != $rep_pass) {
    header('location: settings.php?error=The two passwords don\'t match.');
} else {
    if ($old_pass == $orig_pass) {
        $query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        header('location: settings.php?error=Password Updated Successfully');
    } else
        header('location: settings.php?error=Wrong Old Password.');
}
?>
