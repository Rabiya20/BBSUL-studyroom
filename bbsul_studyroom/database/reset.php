<?php
session_start();
include 'crdb.php';
$email = $_GET['email'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Reset Account</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
body{
	background: url("./bd3.jpg");
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
p{
	font-weight: bolder;
}
</style>
</head>
<body>
<div class="container">
<center><h4>Reset Password</h4></center><hr>
<form action="" method="post">
	<input type="password" name="password" placeholder="Enter New Passsword" class="form-control" /><br>
	<input type="password" name="cpass" placeholder="Confirm Passsword" class="form-control" /><br>
	<button type="submit" name="submit" class="btn btn-success">Save</button><br><br>
</form>
<?php
if (isset($_POST['submit'])) {
	$password = $_POST['password'];
	$cpass = $_POST['cpass'];
	if (!empty($email) && !empty($password)) {
		if ($password==$cpass) {
		if (mysqli_query($conn,"UPDATE `student` SET `pass`='$password' WHERE `email` = '$email'")) {
			header("Location:logout.php?your password has been changed");
		}
	}
	else{
		?>
		<div class="alert alert-danger warnside"><p><strong>Invalid: </strong>Both Passwords are not matched!</p></div>
		<?php
	}
}
}
?>
</div>
</body>
</html>