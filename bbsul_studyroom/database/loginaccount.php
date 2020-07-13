<?php
$lemail=$_POST['lemail'];
$lpass=$_POST['lpass'];
if ($lemail==null && $lpassword==null) {
echo "<script> alert('All fields should be filled properly!');</script>";
}
else{
	$admin=mysqli_query($conn,"SELECT * FROM admin WHERE email='$lemail' AND pass='$lpass'");
	$adminnum=mysqli_num_rows($admin);

	$user=mysqli_query($conn,"SELECT * FROM student WHERE email='$lemail' AND pass='$lpass'");
	$usernum=mysqli_num_rows($user);

	$teacher=mysqli_query($conn,"SELECT * FROM teacher WHERE email='$lemail' AND pass='$lpass'");
	$teachernum=mysqli_num_rows($teacher);

	$_SESSION['user']=$lemail;
	if($adminnum > 0)
	{
		header('location:admin');
	}
	else if($usernum > 0)
	{
			header('location:./database/userindex.php');
	}
	else if($teachernum)
	{
			header('location:teachers');
	}
	else{
		echo"<script>alert('invaild username or password');</script>";
	}
}
?>