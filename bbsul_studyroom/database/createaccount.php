<?php
$name=$_POST['name'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
if ($name==null || $fname==null || $email == null || $pass== null || $cpass==null) {
echo "<script>alert('All fields should be filled properly!');</script>";
}
else{
	if( $pass != $cpass){
		echo "<script>alert('Both passwords should be same!');</script>";
	}
	else{
		$insert=mysqli_query($conn,"INSERT INTO `student`(`sname`, `fname`, `email`, `pass`) VALUES ('$name','$fname','$email','$pass')");
		if($insert){
			echo "<script> alert('Sign up successfully');</script>";
		}
		else
		{
			echo "<script> alert('error');</script>";
		}
 }
}
?>