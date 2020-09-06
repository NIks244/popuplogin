<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to Time Session Login</title>
</head>
<body>
<?php
include_once('link.php');
session_start();
if(isset($_SESSION["user"]))
{
 if((time() - $_SESSION['last_time']) > 5) // Time in Seconds
 {
 header("location:logout.php");
 }
 else
 {
 $_SESSION['last_time'] = time();
 echo "<h1 align='center'>Welcome ".$_SESSION["user"]. "</h1>";
 echo "<h3 align='center'>Automatic Logout after 1 minute of inactive</h3>";
 echo "<p align='center'><a href='logout.php'>Logout</a></p>";
 }
}
else
{
 header('Location:login.php');
}
?>
</body>
</html>