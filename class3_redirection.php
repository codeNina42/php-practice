<?php
$user = $_REQUEST['username'];
$pass= $_REQUEST['password'];


echo $user;
echo $pass;

// Corrected variable name and comparison
if ($user == "google") {
    header("Location: show2.php?test=&_REQUEST['username']");
    exit; // stop script after redirect
} 
?>
