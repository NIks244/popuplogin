<!--
Into this file, we create a layout for welcome page.
-->

<?php
include_once('link.php');
require_once('connection.php');


$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
	}
}

?>
<div class="jumbotron">
	<center>
		<h1>Welcome <?php echo $fname." ".$lname; ?></h1>
		<form action="logout.php" method="post">
		<div class="form-group">
			<button type="submit" name="create" class="btn btn-primary">logout</button>
		</div>
		</form>
	</center>
</div>