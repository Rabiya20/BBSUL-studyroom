<?php 
include 'crdb.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
body{
  background: url("../pics/bd3.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
}
.maindiv{
  background-color: rgba(0, 0, 0, 0.1);
  border: 1px solid grey;
  margin: 15px 0px 0px 15px; 
  width: 800px;
  padding: 10px;
  border-radius: 20px;
  box-shadow: 5px 10px black;
}
label,p{
  font-weight: bolder;
}
</style>
<body>
	<center>
	<h1 class="h1">Join Chat App</h1><hr>
	<h3>Forgot/Change Password</h3>
</center>
	<div class="maindiv">
<form action="" method="post">
	<label>Please provide your Email: </label>
	<input type="text" name="email" class="form-control" /><br>
	<button type="submit" name="submit" class="btn btn-warning">Done!</button>
</form>
</div>
<?php
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$query = mysqli_query($conn,"SELECT * FROM `student` WHERE `email`='$email'");
	$row = mysqli_fetch_array($query);
	if (count($row) == 0) {
		?>
		<div class="alert alert-danger"><p><strong>Error: </strong>This username is not exist</p></div>
		<?php
	}
	else {
		header("Location:reset.php?email=$email");
	}
}
?>
</table>
</body>
</html>