--------practce.php-------
<?php


?>
<form action ="home.php" method="GET">
<input type ="text" name="username" placeholder="username"><br>
<input type="password" name="password" placeholder="user name"><br>
<input type="submit" value="submit">
</form>

---------home.php-------
<?php

$user=$_GET['username'];
$pass=$_GET['password'];
echo $user;
echo "<br>";
echo $pass;

?>
