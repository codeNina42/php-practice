<?php 
echo "db saved information: <br>"; 
$dbUserName = "seyam@gmail.com";
$dbPassword = "123";

echo $dbUserName;
echo "<br>";  // Added line breaks for better readability
echo $dbPassword;
echo "<br>";
echo "user input saved<br>";
echo "user input information <br>";
$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];

echo $user;
echo "<br>";  // Added line breaks for better readability
echo $pass;
echo "<br>";

if ($dbUserName == $user && $dbPassword == $pass) {  // Fixed comparison operator
    echo '<font color="green">your login is successful</font>';  // Fixed quotes
} else {
    echo '<font color="red">log in failed</font>';  // Fixed quotes
}
?>

-------- this will use the data from practic.php page...
