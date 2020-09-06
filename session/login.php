<?php
include 'conn.php'; // Database connection
include_once('link.php');
session_start();
if(isset($_POST["login"])){
 $_SESSION["user"] = $_POST["user"];
 $_SESSION["pass"] = $_POST["pass"];
 $_SESSION['last_time'] = time();
 {
 if(!empty($_POST['user']) && !empty($_POST['pass'])){
 $user = $_POST['user'];
 $pass = $_POST['pass'];
 //selecting database
 $query = mysqli_query($conn, "SELECT * FROM tbluser1 WHERE user='".$user."' AND pass='".$pass."'");
 $numrows= mysqli_num_rows($query);
 if($numrows !=0)
 {
 while($row = mysqli_fetch_assoc($query))
 {
 $username=$row['user'];
 $password=$row['pass'];
 }
 if($user == $username && $pass == $password)
 {
 //Redirect Browser
 header('Location:welcome.php');
 }
 }
 else
 {
 echo "Invalid Username or Password!";
 }
 }
 else
 {
 echo "Required All fields!";
 }
 }
}
?>
<!doctype html>
<html>
<body>

<form method="post">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1>User Login</h1>
<div class="form-group">				
<input type="mail" name="user" id="user" class="form-control" placeholder="Enter Username"><br/>
</div>
<div class="form-group">
<input type="password" name="pass" id="pass" class="form-control" placeholder="Enter Password"><br/>
</div>

<input type="submit" name="login" value="Login" class="btn btn-primary">

</form>
</div>
</div>
</div>
</body>
</html>